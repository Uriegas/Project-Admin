<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
   public function index() {
       $proyectos = Proyectos::latest()->paginate(5);
       return view('administracion.index',compact('proyectos'))
            ->with('i', (request()->input('page',1) -1 ) * 5);
   }

   public function create() {
       return view('administracion.crear');
   }

   public function store(Request $request) {
        $request->validate([
            'nombre_proyecto' => 'required',
            'nombre_cliente' => 'required',
            'presupuesto' => 'required',
            'integrantes' => 'required',
            'descripcion' => 'required',
        ]);

        Proyectos::create($request->all());

        return redirect()->route('administracion.index')
            ->with('success','Proyectos creados satisfactoriamente.');
   }

   public function show(Proyectos $proyecto) {
       return view('administracion.mostrar', compact('proyectos'));
   }

   public function edit(Proyectos $proyecto) {
        return view('administracion.editar',compact('proyectos'));
   }

   public function update(Request $request, Proyectos $proyecto) {
       $request->validate([

       ]);

       $proyecto->update($request->all());

       return redirect()->route('administracion.index')
            ->with('success','Proyecto modificado satisfactoriamente');
   }

   public function destroy(Proyectos $proyecto) {
       $proyecto->delete();
       return redirect()->route('administracion.index')
            ->with('success','Proyecto eliminado satisfactiramente');
   }
}
 