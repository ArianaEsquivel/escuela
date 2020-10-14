<?php

namespace App\Http\Controllers;

use App\aulas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return aulas::all();
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
        $aulas=aulas::create($request->all());
        return $aulas;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function show(aulas $aulas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function edit(aulas $aulas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $affected = DB::table('aulas')
              ->where('id', $id)
              ->update(['seccion' => $request->seccion, 
              'carrera' => $request->carrera]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aulas  $aulas
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::table('aulas')->where('id', '=', $id)->delete();
    }
}
