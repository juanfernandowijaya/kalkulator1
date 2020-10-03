<?php

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

Route::get('/testing', function () {

    $array = [2, 89, 99, 150, 89, 64, 39];
    echo implode(' + ', $array) . ' = ' . \juan\kalkulator\BasicCalculator::add($array) . '<br>';

    $array = [2, 4, 8];
    echo implode(' * ', $array) . ' = ' . \juan\kalkulator\BasicCalculator::multiply($array) . '<br>';

    $number = rand(10, 100);
    $binary = \juan\kalkulator\AdvanceCalculator::decimalToBinary($number);
    echo $number . ' dalam biner: ' . $binary . '<br>';

    $hex = \juan\kalkulator\AdvanceCalculator::binaryToDecimal($binary);
    echo $binary . ' dalam desimal: ' . $hex . '<br>';
});
