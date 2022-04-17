<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class PresupuestoController extends Controller
{
    public function index()
    {
        return view("finanzas.presupuesto", [
            "departamentos" => Departamentos::all(),
        ]);
    }
    // This method is called when I use update method in a form
    // I don't know why.
    public function show(Request $request)
    {
        $this->update($request);
        return view("finanzas.presupuesto", [
            "departamentos" => Departamentos::all(),
        ]);
    }
    public function update(Request $request)
    {
        $departamento = Departamentos::find($request->id);
        $departamento->presupuesto = $request->presupuesto;
        $departamento->save();
        return $this->index();
    }

}
