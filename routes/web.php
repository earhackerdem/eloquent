<?php

use App\Models\{Course, Flight, Destination, Mechanic, User,Phone};
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

    // $user = User::find(1);

    // return $user->phone;



    // $phone = Phone::find(1);

    // return $phone->user();



    // $user = User::find(1);

    // return $user->courses;



    // $course = Course::find(1);

    // return $course->user;



    // $user = User::find(1);

    // return $user->latestCourse;



    // $mechanic = Mechanic::find(1);

    // return $mechanic;

    $course = Course::first();

    return $course->lessons;

});
