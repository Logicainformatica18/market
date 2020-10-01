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

});
Route::resource("categorias", 'CategoryController');
Route::post('categoryStore',"CategoryController@store");
Route::post('categoryEdit',"CategoryController@edit");
Route::post('categoryUpdate',"CategoryController@update");
Route::post('categoryDestroy',"CategoryController@destroy");
Route::post('categoryShow',"CategoryController@show");

Route::resource("productos", 'ProductController');
Route::post('productStore',"ProductController@store");
Route::post('productEdit',"ProductController@edit");
Route::post('productUpdate',"ProductController@update");
Route::post('productDestroy',"ProductController@destroy");


Route::post('category_productDestroy',"ProductController@category_productDestroy");
Route::post('category_productStore',"ProductController@category_productStore");
Route::post('category_productEdit',"ProductController@category_productEdit");

Route::resource("proveedores", 'ProviderController');
Route::post('providerStore',"ProviderController@store");
Route::post('providerEdit',"ProviderController@edit");
Route::post('providerUpdate',"ProviderController@update");
Route::post('providerDestroy',"ProviderController@destroy");
Route::post('providerShow',"ProviderController@show");
