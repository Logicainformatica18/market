<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:administrador']], function () {
    Route::resource("categorias", 'CategoryController');

    Route::post('categoryStore',"CategoryController@store");
    Route::post('categoryEdit',"CategoryController@edit");
    Route::post('categoryUpdate',"CategoryController@update");
    Route::post('categoryDestroy',"CategoryController@destroy");


    Route::resource("productos", 'ProductController');

    Route::post('productStore',"ProductController@store");
    Route::post('productEdit',"ProductController@edit");
    Route::post('productUpdate',"ProductController@update");
    Route::post('productDestroy',"ProductController@destroy");
});
