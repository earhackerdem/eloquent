<?php

use App\Models\{Flight, Destination};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/prueba', function () {

    // $flight = Flight::find(103);

    // $flight->delete();

    $flight1 = Flight::destroy([
        95,96,100
    ]);

    // Flight::truncate();

    Flight::where('active',0)->delete();

    Flight::destroy(94);

    $flight = Flight::findOrFail(93);


    Flight::orderBy('id','desc')->withTrashed()->get();

    Flight::onlyTrashed()->get();

    Flight::where('id',93)->withTrashed()->get();

    Flight::where('id',94)->withTrashed()->restore();

    Flight::where('id',94)->delete();

    Flight::where('id',92)->withTrashed()->forceDelete();

    // $flight = Flight::where('id',94)->withTrashed()->first();

    $flight = Flight::withTrashed()->find(94);

    if($flight->trashed()){
        return "El registro se encuentra en la papelera de reciclaje";
    }else {
        return "El registo no se encuentra en la papera de reciclaje";
    }
});
