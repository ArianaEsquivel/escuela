<?php

namespace App\Http\Controllers;

use App\alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return alumnos::all();
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
        $alumnos=alumnos::create($request->all());
        return $alumnos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $matricula)
    {
        $affected = DB::table('alumnos')
              ->where('matricula', $matricula)
              ->update(['nombre' => $request->nombre, 
              'promedio' => $request->promedio, 
              'aula' => $request->aula]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $matricula)
    {
        DB::table('alumnos')->where('matricula', '=', $matricula)->delete();
    }
}
