<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;
use App\Models\Gastos;
use Illuminate\Support\Facades\DB;

class ReporteGastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = [];
        for($i=0;$i<Departamentos::count();$i++){
            $gastos[$i] = DB::table('gastos')
                  ->orderBy('gastos.departamento_id', 'desc')
                  ->join('departamentos', 'gastos.departamento_id', '=', 'departamentos.id')
                  ->where('departamentos.id', '=', $i+1)
                  ->select('gastos.*', 'departamentos.nombre')
                  ->get();
        }
        $totales = DB::table('gastos')
                    ->groupBy('departamento_id')
                    ->orderBy('departamento_id', 'asc')
                    ->selectRaw('SUM(cantidad * total ) as total, departamento_id as id')
                    ->get();
        $departamentos = Departamentos::all();
        return view('finanzas.reporte', [
            'gastos_por_departamento' => $gastos,
            'totales' => $totales,
            'departamentos' => $departamentos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *  NOTE: Not necessary
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'departamento_id' => 'required|numeric',
            'concepto' => 'required|max:255',
            'cantidad' => 'required|numeric',
            'total' => 'required|between:0,9999999999.99',
        ]);
        $gasto = Gastos::create($request->all());
        $gasto->save();
        return redirect()->route('reporte.index')->with('status', 'Gasto creado con éxito');
    }

    /**
     * Display the specified resource.
     * NOTE: Not necessary
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Return json with the gasto
        $gasto = Gastos::find($id);
        return response()->json($gasto);
    }

    /**
     * Show the form for editing the specified resource.
     * NOTE: Not necessary
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('finanzas.reporte_edit', [
            'gasto' => Gastos::findOrFail($id),
            'departamentos' => Departamentos::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'departamento_id' => 'required|numeric',
            'concepto' => 'required|max:255',
            'cantidad' => 'required|numeric',
            'total' => 'required|between:0,9999999999.99',
        ]);
        $gasto = Gastos::findOrFail($id);
        $gasto->update($request->all());
        $gasto->save();
        
        return redirect()->route('reporte.index')->with('status', 'Gasto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gasto = Gastos::findOrFail($id);
        $gasto->delete();
        return redirect()->route('reporte.index')->with('status', 'Gasto eliminado con éxito');
    }
}
