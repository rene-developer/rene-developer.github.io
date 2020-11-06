<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//haciendo una primera ruta
Route::get('firstroute',function (){
    return 'Esta es mi primera ruta';
});

//creando la ruta para productos
 Route::resource('products',ProductController::class);



//Route::get('register', function (){
// return view('auth.register');
//});
//
//Route::post('register','TokenAuthController@singup');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
