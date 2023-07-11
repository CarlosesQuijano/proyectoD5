<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




/**
 * Class MaestroController
 * @package App\Http\Controllers
 */
class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $maestros = Maestro::all();
        return view('maestro/index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('maestro/create');
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
            "nombre" => ["required"],
            "email" => ["required", "email"],
            "direccion" => ["required"],
            "fecha_naciminiento" => ["required"],
            "clase" => ["required"]
            ]);

           Maestro::create([
            "nombre" => $request->nombre,
            "email" => $request->email,
            "direccion" => $request->direccion,
            "fecha_naciminiento" => $request->fecha,
            "clase_asignada" => $request->clase,
           ]);
           return redirect()->route("maestro.index");


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
        $maestro = Maestro::find($id);

        return view("maestro/edit", compact("maestro"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Maestro $maestro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $maestro = Maestro::find($id);
        $maestro->id = $request->input('id');
        $maestro->nombre = $request->input ('name');
        $maestro->email = $request->input ('email');
        $maestro->direccion = $request->input ('direccion');
        $maestro->fecha_naciminiento = $request->input ('fecha');
        $maestro->clase_asignada = $request->input ('clase');
        $maestro->save();

        return redirect()->route("maestro.index");
    }
        //1 - Leer el rol que recibe


        // 2 - traer todos los roles existentes



        // 3 - Guardo los nombres de los roles en un arreglo.


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(string $id)
    {
        $maestro= Maestro::find($id);
        $maestro->delete();

        return redirect()->route("maestro.index")->with('status', 'Usuario eliminado');;
    }
}
