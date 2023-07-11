<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno/index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno/create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "DNI" => ["required"],
            "nombre" => ["required", "email"],
            "correo" => ["required"],
            "direccion" => ["required"],
            "fecha_nacimiento" => ["required"]
            ]);

           Alumno::create([
            "DNI" => $request->DNI,
            "nombre" => $request->nombre,
            "correo" => $request->correo,
            "direccion" => $request->direccion,
            "fecha_nacimiento" => $request->fecha_nacimiento,
           ]);
           return redirect()->route("alumno.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        return view("alumno/edit", compact("alumno"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id )
    {
        $alumno = Alumno::find($id);
        $alumno->id = $request->input('id');
        $alumno->DNI = $request->input ('dni');
        $alumno->nombre = $request->input ('nombre');
        $alumno->correo = $request->input ('correo');
        $alumno->direccion = $request->input ('direccion');
        $alumno->fecha_nacimiento= $request->input ('fecha_nacimiento');
        $alumno->save();

        return redirect()->route("alumno.index");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy( string $id)
    {
        $alumno= Alumno::find($id);
        $alumno->delete();

        return redirect()->route("alumno.index")->with('status', 'Usuario eliminado');
    }
}
