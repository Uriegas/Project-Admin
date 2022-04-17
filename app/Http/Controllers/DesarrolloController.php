<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablero;
use App\Models\ActividadesProyecto;
use App\Models\Empleado;
use App\Models\Proyectos;
use Carbon\Carbon;



use Illuminate\Support\Facades\DB;



class DesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("desarrollo.index");
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

    public function showAllTableros()
    {
        $data['tableros'] = Tablero::all();
        $data['proyectos'] = Proyectos::select('id', 'descripcion')->get();
        return view("desarrollo.index", $data);
    }

    public function showActividadesTablero($idTablero)
    {
        $sqlQuery = 'SELECT actividades_proyecto.* FROM actividades_proyecto INNER JOIN tablero WHERE actividades_proyecto.tablero_id = ? AND tablero.id = ?;';
        
        $actividades = json_decode(json_encode(DB::select($sqlQuery, [$idTablero, $idTablero], true)));
        $tablero = Tablero::findOrfail($idTablero);

        $data['actividades'] = $actividades;
        $data['empleados'] = Empleado::select('id', 'nombre', 'apellido')->get();
        $data['idTablero'] = $idTablero;
        $data['nombreTablero'] = $tablero->titulo;


        return view("desarrollo/tarjetas", $data);
    }

    public function agregarActividadTablero(Request $req)
    {

        $fechaInicio = date("Y-m-d", strtotime(str_replace('/', '-', $req->fechaInicio)));
        $fechaFin = date("Y-m-d", strtotime(str_replace('/', '-', $req->fechaFin)));
        $sqlQuery = 'INSERT actividades_proyecto VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, null, null)';
        DB::insert($sqlQuery, [ $req->titulo, $req->descripcion, $req->encargado, $req->idTablero,  $fechaInicio,  $fechaFin,  $req->actividades,  $req->status]);
        
        $data = ["todo" => 1];
        
        return response()->json($data);
    }

    public function showActividadTablero($idTablero, $idActividad)
    {
        $actividad = ActividadesProyecto::findOrfail($idActividad);
        
        $empleado = Empleado::findOrFail($actividad->encargado);

        $nombre = $empleado->nombre . " " . $empleado->apellido;
        $actividad->setAttribute('nombreEmpleado', $nombre);

        $data["actividad"] = $actividad;
        return $data;
    }

    public function editarActividadTablero(Request $req)
    {
        $fechaFin = date("Y-m-d", strtotime(str_replace('-', '/', $req->fechaFin)));
        ActividadesProyecto::where('id', $req->verActividadId)->update(
            ['titulo' => $req->titulo, 'fin' => $fechaFin, 'actividades' => $req->actividades, 'estatus' => $req->status]
        );

        $data = ["todo" => 1];
        
        return response()->json($data);
    }

    public function eliminarActividadTablero($idActividad)
    {
        ActividadesProyecto::where('id', $idActividad)->delete();
        $data = ["todo" => 1];
        
        return response()->json($data);
    }




    ////////////
    public function agregarTablero(Request $req)
    {
        $fechaInicio = date("Y-m-d", strtotime(str_replace('/', '-', $req->fechaInicio)));
        $fechaFin = date("Y-m-d", strtotime(str_replace('/', '-', $req->fechaFin)));

        $sqlQuery = 'INSERT proyectos VALUES(null, ?, ?, ?, ?, ?, null, null)';

        DB::table('tablero')->insert([
            'id' => null,
            'titulo' => $req->titulo,
            'inicio' => $fechaInicio,
            'fin' => $fechaFin,
            'descripcion' => $req->descripcion,
            'codigo_proyecto' => $req->idProyecto,
            'created_at' => null,
            'updated_at' => null
        ]);

        $data = ["todo" => 1];
        
        return response()->json($data);
    }

    public function showTablero($idTablero)
    {
        $tablero = Tablero::findOrfail($idTablero);

        $proyecto = Proyectos::findOrfail($tablero->codigo_proyecto);

        $nombreProyecto = $proyecto->descripcion;
        $tablero->setAttribute('nombreProyecto', $nombreProyecto);

        $data["tablero"] = $tablero;
        return $data;
    }

    public function editarTablero(Request $req)
    {
        $fechaFin = date("Y-m-d", strtotime(str_replace('-', '/', $req->fechaFin)));

        Tablero::where('id', $req->verTableroId)->update(
            ['titulo' => $req->titulo, 'fin' => $fechaFin, 'descripcion' => $req->descripcion]
        );

        $data = ["todo" => 1];        
        return response()->json($data);
    }

    public function eliminarTablero($idTablero)
    {
        $actividades = ActividadesProyecto::where('tablero_id', $idTablero)->get();

        foreach($actividades as $actividad)
        {
            $this->eliminarActividadTablero($actividad->id);
        }

        Tablero::where('id', $idTablero)->delete();

        $data = ["todo" => 1];
        return response()->json($data);
    }

}
