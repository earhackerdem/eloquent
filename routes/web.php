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

    $data = [
        'name' => 'Flight 1',
        'number' => '123',
        'legs' => 1,
        'departed' => false,
        'arrived_at' => null,
        'destination' => 1
    ];

    $flight = Flight::updateOrCreate([
        'name' => 'Flight 3'
    ], [
        'number' => '12345678900',
        'legs' => 1,
        'departed' => false,
        'arrived_at' => null,
        'destination_id' => 1
    ]);

    return $flight;
});
