<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Evaluaciones;
use App\Models\Departamentos;

use Illuminate\Http\Request;
use PDF;


class RHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("recursos-humanos.index");
    }
    public function pdf($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        $pdf=PDF::loadView('recursos-humanos.pdf',['empleado'=>$empleado]);
        return $pdf->download($empleado['nombre'].'.pdf');
        //return view('recursos-humanos.pdf',compact('empleado'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Listaempleados()
    {
        $departamentos['departamentos']=Departamentos::pluck('nombre','id');
        $datos['empleados']=Empleado::paginate();
        //return response()->json($departamentos);
        return view('/recursos-humanos.Listaempleado',$datos,$departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevoempleado()
    {
        //
        $departamentos['departamentos']=Departamentos::pluck('nombre','id');
        $puestos['puestos']=['Asesor legal y organizacional','Administrador','Analista','Diseñador UI/UX','Programador','Documentador','Analista financiero','Jefe de presupuestos','Publicista','Ventas'];
        return view('/recursos-humanos.nuevoempleado',$puestos,$departamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeempleado(Request $request)
    {
        $datosEmpleado=request()->except('_token','Prestaciones','Salario');
        $validaciones=['Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Puesto'=>'required',
            'Departamento_id'=>'required',
            'Tipo_Contrato'=>'required|string|max:100',
            'Prestaciones'=>'required|max:100',
            'Salario'=>'required|int',];
        $mensaje=['required'=>'El :attribute es requerido.',
            'Apellidos.required'=>'Los apellidos son requeridos',
            'Prestaciones.required'=>'Las prestaciones son requeridas',];
        $this->validate($request,$validaciones,$mensaje);
        $prestacion=implode(',',$request->Prestaciones);
        $P["Prestaciones"]=$prestacion;
        $Salario=$request->Salario;
        $S["Salario"]=$Salario;
        $emp=$datosEmpleado+$P+$S;
        Empleado::insert($emp);
        return redirect('/recursos-humanos/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function editarempleado($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        $departamentos['departamentos']=Departamentos::pluck('nombre','id');
        return view('recursos-humanos.editarempleado',compact('empleado'),$departamentos);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function updateempleado(Request $request, $id)
    {
        //
        $datosEmpleado=request()->except('_token','Prestaciones','Salario','_method');
        $prestacion=implode(',',$request->Prestaciones);
        $P["Prestaciones"]=$prestacion;
        $Salario=$request->Salario;
        $S["salario"]=$Salario;
        $emp=$datosEmpleado+$P+$S;
        $validaciones=['Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Puesto'=>'required',
            'Departamento_id'=>'required',
            'Tipo_Contrato'=>'required|string|max:100',
            'Prestaciones'=>'required|max:100',
            'Salario'=>'required',];
        $mensaje=['required'=>'El :attribute es requerido.',
            'Apellidos.required'=>'Los apellidos son requeridos',
            'Prestaciones.required'=>'Las prestaciones son requeridas',];
        $this->validate($request,$validaciones,$mensaje);
        Empleado::where('id','=',$id)->update($emp);
        $datos['empleados']=Empleado::paginate();
        return redirect('/recursos-humanos/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroyempleado($id)
    {
        //
        Empleado::destroy($id);
        return redirect('/recursos-humanos/empleados');
    }

    public function Listaevaluacion()
    {
        //
        $evaluaciones['evaluaciones']=Evaluaciones::paginate();
        $empleados['empleados']=Empleado::get();
        //return response()->json($evaluaciones);
        return view('/recursos-humanos.evaluaciones',$evaluaciones,$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createevaluacion($id)
    {
        //
        $empleado['empleado']=Empleado::findOrFail($id);
        $departamentos['departamentos']=Departamentos::pluck('nombre','id');
        return view('recursos-humanos.crearevaluacion',$empleado,$departamentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeevaluacion(Request $request)
    {
        //
        $ev=request()->except('_token');
        $empid=request()->empid;
        $fecha=request()->fecha;
        if($ev['PUNTUALIDAD']=="MP")
        {
           $p=1;
        }
        if($ev['PUNTUALIDAD']=="BP")
        {
           $p=3;
        } 
        if($ev['PUNTUALIDAD']=="RP")
        {
           $p=2;
        } 
        if($ev['ASISTENCIA']=="MA")
        {
           $a=1;
        } 
        if($ev['ASISTENCIA']=="BA")
        {
           $a=3;
        } 
        if($ev['ASISTENCIA']=="RA")
        {
           $a=2;
        } 
        if($ev['PRODUCTIVIDAD']=="BR")
        {
           $r=3;
        } 
        if($ev['PRODUCTIVIDAD']=="MR")
        {
           $r=1;
        } 
        if($ev['PRODUCTIVIDAD']=="RR")
        {
           $r=2;
        } 
        $total=($p+$a+$r)/3;
        $sql=['empleado_id'=>$empid,'calificacion'=>$total,'fecha'=>$fecha];
        Evaluaciones::insert($sql);
        return redirect('recursos-humanos/evaluaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluaciones  $evaluaciones
     * @return \Illuminate\Http\Response
     */
    public function destroyevaluacion($id)
    {
        //
        Evaluaciones::destroy($id);
        return redirect('recursos-humanos/evaluaciones');
    }
}
