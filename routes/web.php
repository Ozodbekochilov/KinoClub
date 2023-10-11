<?php

use App\Models\Animals;
use App\Models\Cars;
use App\Models\Animal;
use App\Models\Foods;
use App\Models\Laptops;
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





Route::get('/animal',  function () {
    return view('animals', ['animals' => Animals::all()]);
});


Route::post('/animal', function (Request $req) {
    Animals::create([
        'name' => $req->name,
        'type' => $req->type,
        'color' => $req->color,
    ]);

    return back();
});


Route::get('/delete2/{id}', function ($id) {
    Animals::where('id', '=', $id)->first()->delete();
    return back();
});














Route::get('/laptop',  function () {
    return view('laptops', ['laptops' => Laptops::all()]);
});


Route::post('/laptop', function (Request $req) {
    Laptops::create([
        'name' => $req->name,
        'manufacturer' => $req->manufacturer,
        'os' => $req->os,
        'ram' => $req->ram,
        'type' => $req->type,
        'date' => $req->date,
    ]);

    return back();
});


Route::get('/delete/{id}', function ($id) {
    Laptops::where('id', '=', $id)->first()->delete();
    return back();
});











Route::get('/food',  function () {
    return view('foods', ['foods' => Foods::all()]);
});


Route::post('/food', function (Request $req) {
    Foods::create([
        'name' => $req->name,
        'ccal' => $req->ccal,
        'type' => $req->type,
    ]);

    return back();
});


Route::get('/delete1/{id}', function ($id) {
    Foods::where('id', '=', $id)->first()->delete();
    return back();
});