<?php

namespace App\Http\Controllers;

use App\carreras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return carreras::all();
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
        $carreras=carreras::create($request->all());
        return $carreras;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function show(carreras $carreras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function edit(carreras $carreras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $affected = DB::table('carreras')
              ->where('id', $id)
              ->update(['nombre' => $request->nombre]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::table('carreras')->where('id', '=', $id)->delete();
    }
}
