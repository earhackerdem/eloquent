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

     $flight = Flight::where('departed',true)->first();
     $flight = Flight::firstWhere('departed',true);

     return $flight;

     $flight = Flight::findOr(102, function(){
         return "No existe";
     });

     $flight = Flight::where('departed',true)->first();

     $flight = Flight::where('legs','>',3)->firstOr(function(){
         return "No se encontro el vuelo";
     });

     $flight = Flight::where('legs','>',2)->firstOrFail();

     $flight = Flight::findOrFail(101);




    $destination = Destination::firstOrCreate([
        'name' => 'Tetel'
    ]);



   $flight = Flight::firstOrCreate([
    'name' => 'Saul Pérez'
   ], [
    'number' => '23123',
    'legs' => 2,
    'active' => true,
    'departed' => false,
    'arrived_at' => now(),
    'destination_id' => 1
   ]);

   $flight = Flight::firstOrNew([
    'name' => 'Saul Pérez Ramos'
   ], [
    'number' => '23123',
    'legs' => 2,
    'active' => true,
    'departed' => false,
    'arrived_at' => now(),
    'destination_id' => 1
   ]);

   $flight->save();

   $flight = Flight::where('departed',true)->count();

   $flight = Flight::where('departed',true)->sum('legs');

   $flight = Flight::where('departed',true)->max('legs');

   $flight = Flight::where('departed',true)->avg('legs');

   return $flight;

});
