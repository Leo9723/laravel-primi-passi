<?php

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
    return view('home');
})->name('home');

Route::get('/about_us', function () {
    $data = [
        'name'=> 'Frodo',
        'surname'=> 'Baggins',
        'age'=> 80
    ];


    $location = 'Terra di Mezzo';


    return view('about_us', compact('data', 'location'));
})->name('about-us');

Route::get('/contacts', function () {

    $data =[
        'phone' => '+39 334 56 6893',
        'mail' => 'mailrandom@randmail.ran',
        'adress' => 'Decumano ovest della Contea',
    ];

    return view('contacts', $data);
})->name('contacts');
