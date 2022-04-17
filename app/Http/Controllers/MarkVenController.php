<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Actividades_Estrategias;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MarkVenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mrk-ventas.index");
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estrategias()
    {
        $datos['actividades_estrategias']=Actividades_Estrategias::paginate();
        return view('/mrk-ventas/estrategias_publicidad.dashboard',$datos);
    }

    public function clientes()
    {
        $datos['clientes']=Clientes::paginate();
        return view('/mrk-ventas/clientes.dashboard',$datos);
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
        $datosEstrategias = request()->except('_token');
        if($request->hasFile('Imagen')){
            $datosEstrategias['Imagen']=$request->file('Imagen')->store('uploads','public');
        }
        Actividades_Estrategias::insert($datosEstrategias);
        return redirect('/mrk-ventas/estrategias_publicidad/dashboard');
        
    }

    public function storeclientes(Request $request)
    {
        //
        $datosClientes = request()->except('_token');
        Clientes::insert($datosClientes);
        return redirect('/mrk-ventas/clientes/dashboard');
        
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

    public function mostrarEstrategia($id)
    {
        $estrategia=Actividades_Estrategias::findOrFail($id);
        //return response()->json($estrategia);
        return view('/mrk-ventas/estrategias_publicidad.visualizar_estrategia',compact('estrategia'));
    }

    public function mostrarCliente($id)
    {
        $cliente=Clientes::findOrFail($id);
        //return response()->json($estrategia);
        return view('/mrk-ventas/clientes.visualizar_clientes',compact('cliente'));
    }

    public function editarEstrategia($id)
    {
        $estrategia=Actividades_Estrategias::findOrFail($id);
        return redirect('/mrk-ventas/estrategias_publicidad/modal_estrategias/edit', compact('estrategia'));
    }

    public function editarCliente($id)
    {
        $cliente=Actividades_Estrategias::findOrFail($id);
        return redirect('/mrk-ventas/clientes/modal_clientes/edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateestrategia(Request $request, $id)
    {
        //
        $datosEstrategias = request()->except('_token','_method');
        if($request->hasFile('Imagen')){
            $estrategia=Actividades_Estrategias::findOrFail($id);
            Storage::delete('public/'.$estrategia->Imagen);

            $datosEstrategias['Imagen']=$request->file('Imagen')->store('uploads','public');
        }
        Actividades_Estrategias::where('id','=',$id)->update($datosEstrategias);
        $datos['actividades_estrategias']=Actividades_Estrategias::paginate();
        return redirect('mrk-ventas/estrategias_publicidad/dashboard');
    }

    public function updatecliente(Request $request, $id)
    {
        //
        $datosClientes = request()->except('_token','_method');
        Clientes::where('id','=',$id)->update($datosClientes);
        $datos['clientes']=Clientes::paginate();
        return redirect('mrk-ventas/clientes/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyestrategia($id)
    {
        //
        Actividades_Estrategias::destroy($id);
        return redirect('/mrk-ventas/estrategias_publicidad/dashboard');
    }

    public function destroycliente($id)
    {
        //
        Clientes::destroy($id);
        return redirect('/mrk-ventas/clientes/dashboard');
    }
}
