<?php

use App\Models\{Flight, Destination};
use App\Scopes\NotDeparted;
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

    //return Flight::withoutGlobalScope(NotDeparted::class)->get();


    // return Flight::withoutGlobalScopes([NotDeparted::class,NotDeparted::class])->get();

    // cuando el scope esta definido usando un callback en el modelo dentro de addGlobalScope
    // return Flight::withoutGlobalScopes('not_departed')->get();

    // return Flight::active()->get();

    // Flight::create([
    //     "name"=>"nombre",
    //     "legs"=>"4",
    //     "active" => 0,
    //     "departed" => 1,
    //     "destination_id" => 7,
    //     "deleted_at" => null
    // ]);

    $fligth = Flight::find(108);

    return $fligth;
});
