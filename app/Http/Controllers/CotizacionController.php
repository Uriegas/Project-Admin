<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PresupuestoProyecto;
use App\Models\Proyectos;
use Illuminate\Support\Facades\Redirect;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proyectos = DB::table('proyectos')
                     ->join('clientes', 'proyectos.cliente_id', '=', 'clientes.id')
                     ->selectRaw('proyectos.id, proyectos.nombre, clientes.nombre as cliente')
                     ->get();
        return view('finanzas.cotizacion', [
            'proyectos' => $proyectos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
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
            'proyecto_id' => 'required|numeric',
            'concepto' => 'required|max:255',
            'cantidad' => 'required|numeric',
            'monto' => 'required|between:0,9999999999.99',
        ]);
        $item = PresupuestoProyecto::create($request->all());
        $item->save();
        return redirect()->route('cotizacion.show', $item->proyecto_id)->with('status', 'Gasto actualizado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        if (!$proyecto) {
            return redirect()->route('reporte.index')->with('status', 'Proyecto no encontrado');
        }
        $presupuesto = PresupuestoProyecto::where('proyecto_id', $id)->get();
        $total = PresupuestoProyecto::where('proyecto_id', $id)
                 ->selectRaw('sum(cantidad * monto) as total')
                 ->get();
        return view('finanzas.visualizar_proyecto', [
            'proyecto' => $proyecto,
            'presupuesto' => $presupuesto,
            'total' => $total[0]->total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('finanzas.cotizacion_edit', [
            'item' => PresupuestoProyecto::findOrFail($id),
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
            'concepto' => 'required|max:255',
            'cantidad' => 'required|numeric',
            'monto' => 'required|between:0,9999999999.99',
        ]);
        $item = PresupuestoProyecto::findOrFail($id);
        $item->update($request->all());
        $item->save();
        
        return redirect()->route('cotizacion.show', $item->proyecto_id)->with('status', 'Gasto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PresupuestoProyecto::findOrFail($id);
        $item->delete();
        // Stay in current view
        return Redirect::to(url()->previous());
    }
}
