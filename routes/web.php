<?php

use App\Models\Cars;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regxister web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('ozod','welcome');

Route::view('table','table');

Route::post('save_product', function(Request $request)
{
    Product::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);
    return 'Ismoil norm';
});













Route::view('/ismoil','ismoil');

Route::post('/idea', function(Request $request)
{
    Cars::create([
        'name' => $request->name,
        'price' => $request->price,
    ]);
    return 'Good';
});