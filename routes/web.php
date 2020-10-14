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
Route::get('inicio', function () {
    return view('login');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// in group we can add several roles to the middelware
Route::group(['middleware' => ['role:administrador|ventas']], function () {

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
    Route::post('productShow',"ProductController@show");

    Route::post('category_productDestroy',"ProductController@category_productDestroy");
    Route::post('category_productStore',"ProductController@category_productStore");
    Route::post('category_productEdit',"ProductController@category_productEdit");

    Route::resource("proveedores", 'ProviderController');
    Route::post('providerStore',"ProviderController@store");
    Route::post('providerEdit',"ProviderController@edit");
    Route::post('providerUpdate',"ProviderController@update");
    Route::post('providerDestroy',"ProviderController@destroy");
    Route::post('providerShow',"ProviderController@show");

    Route::resource("almacenes", 'WarehouseController');
    Route::post('warehouseStore',"WarehouseController@store");
    Route::post('warehouseEdit',"WarehouseController@edit");
    Route::post('warehouseUpdate',"WarehouseController@update");
    Route::post('warehouseDestroy',"WarehouseController@destroy");
    Route::post('warehouseShow',"WarehouseController@show");

    Route::resource("clientes", 'CustomerController');
    Route::post('customerStore',"CustomerController@store");
    Route::post('customerEdit',"CustomerController@edit");
    Route::post('customerUpdate',"CustomerController@update");
    Route::post('customerDestroy',"CustomerController@destroy");
    Route::post('customerShow',"CustomerController@show");

    Route::resource('usuarios', 'UserController');
    Route::post('userCreate', 'UserController@create');
    Route::post('userStore', 'UserController@store');
    Route::post('userDestroy', 'UserController@destroy');
    Route::post('userEdit', 'UserController@edit');
    Route::post('userUpdate', 'UserController@update');
    Route::post('userShow', 'UserController@show');
    Route::post('userUpdateProfile', 'UserController@updateProfile');

    Route::post('userRoleStore',"UserController@userRoleStore");
    Route::post('userRoleEdit',"UserController@userRoleEdit");
    Route::post('userRoleDestroy',"UserController@userRoleDestroy");

    Route::resource("roles", 'RolesController');
    Route::post('roleStore',"RolesController@store");
    Route::post('roleEdit',"RolesController@edit");
    Route::post('roleUpdate',"RolesController@update");
    Route::post('roleDestroy',"RolesController@destroy");
    Route::post('roleShow',"RolesController@show");

    Route::post('rolePermissionStore',"RolesController@rolePermissionStore");
    Route::post('rolePermissionEdit',"RolesController@rolePermissionEdit");
    Route::post('rolePermissionDestroy',"RolesController@rolePermissionDestroy");

    Route::resource("distribuciones", 'DistributionController');
    Route::post('distributionStore',"DistributionController@store");
    Route::post('distributionEdit',"DistributionController@edit");
    Route::post('distributionUpdate',"DistributionController@update");
    Route::post('distributionDestroy',"DistributionController@destroy");
    Route::post('distributionShow',"DistributionController@show");

    Route::resource("distribucionporalmacen", 'DistributionWarehouseController');

    Route::resource("colores", 'ColorController');
    Route::post('colorStore',"ColorController@store");
    Route::post('colorEdit',"ColorController@edit");
    Route::post('colorUpdate',"ColorController@update");
    Route::post('colorDestroy',"ColorController@destroy");
    Route::post('colorShow',"ColorController@show");

    Route::resource("medidas", 'SizeController');
    Route::post('sizeStore',"SizeController@store");
    Route::post('sizeEdit',"SizeController@edit");
    Route::post('sizeUpdate',"SizeController@update");
    Route::post('sizeDestroy',"SizeController@destroy");
    Route::post('sizeShow',"SizeController@show");

    Route::resource("tipos", 'TypeController');
    Route::post('typeStore',"TypeController@store");
    Route::post('typeEdit',"TypeController@edit");
    Route::post('typeUpdate',"TypeController@update");
    Route::post('typeDestroy',"TypeController@destroy");
    Route::post('typeShow',"TypeController@show");


});
