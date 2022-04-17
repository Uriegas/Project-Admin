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
                  ->join('departamentos', 'gastos.departamento_id', '=', 'departamentos.id')
                  ->where('departamentos.id', '=', $i+1)
                  ->select('gastos.*', 'departamentos.nombre')
                  ->orderBy('gastos.id', 'desc')
                  ->get();
        }
        $totales = DB::table('gastos')
                    ->selectRaw('SUM(cantidad * total ) as total')
                    ->orderBy('departamento_id', 'desc')
                    ->groupBy('departamento_id')
                  ->get();
        return view('finanzas.reporte', [
            'gastos_por_departamento' => $gastos,
            'totales' => $totales
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
