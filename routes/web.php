<?php

use App\Models\{Flight,Destination};
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

    //    $flights = Flight::where('active',1)
    //    ->where('legs','>',2)
    //    ->orderBy('name','desc')
    //    ->take(5)
    //    ->get();

    // $numbers = range(1,10000000);

    //return $numbers;

    //Util para realizar operaciones a grandes cantidades de datos
    // $flights = Flight::chuck(20, function ($flights) {
    //     foreach ($flights as $flight) {
    //         $flight->number = 'a-' . $flight->number;
    //         $flight->save();
    //     }
    // });


    //Util cuando se modificara el campo con el que se esta filtrando
    // $flights = Flight::where('departed',true)->chuckById(20, function ($flights) {
    //     foreach ($flights as $flight) {
    //         $flight->departed = false;
    //         $flight->save();
    //     }
    // }, 'id');

    //return $flights;

    // Lo siguiente traera todos los registros del modelo y ejecutara la actualización
    // foreach(Flight::cursor() as $flight){
    //     $flight->active = true;
    //     $flight->save();
    // }

    //consulta cruzada
    $destinations = Destination::addSelect([
        'last_flight' => Flight::select('number')
        ->whereColumn('destination_id','destinations.id')
        ->orderBy('arrived_at','desc')
        ->limit(1)
    ])->get();

    return $destinations;

});
