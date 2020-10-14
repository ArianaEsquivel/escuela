<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::get('posts', 'PostsController@index');
Route::post('posts', 'PostsController@store');
Route::delete("posts/{id}", "PostsController@destroy")-> where("id", "[0-9]+");
Route::put("posts/{id}", "PostsController@update")-> where("id", "[0-9]+");

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('carreras', 'CarrerasController@index');
Route::post('carreras', 'CarrerasController@store');
Route::put("carreras/{id}", "CarrerasController@update")-> where("id", "[0-9]+");
Route::put("carreras/{id}", "CarrerasController@update")-> where("id", "[0-9]+");

Route::get('aulas', 'AulasController@index');
Route::post('aulas', 'AulasController@store');
Route::put("aulas/{id}", "AulasController@update")-> where("id", "[0-9]+");
Route::put("aulas/{id}", "AulasController@update")-> where("id", "[0-9]+");

Route::get('alumnos', 'AlumnosController@index');
Route::post('alumnos', 'AlumnosController@store');
Route::put("alumnos/{id}", "AlumnosController@update")-> where("id", "[0-9]+");
Route::put("alumnos/{id}", "AlumnosController@update")-> where("id", "[0-9]+");