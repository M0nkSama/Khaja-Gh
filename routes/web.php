<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';







      
Route::namespace('App\Http\Controllers')->group(function () 
{
      //FE controller
      Route::get('/','FeController@home');
      Route::get('/menu','FeController@menuv');
      Route::get('/order','FeController@userorder');
      Route::get('/momo','FeController@momo');
      Route::get('/chowmein','FeController@chowmein');
      Route::get('/pizza','FeController@pizza');
      Route::get('/drinks','FeController@drinks');
      Route::get('/product','FeController@product');
      Route::get('/order/{id}','FeController@porder');
      Route::get('/confirm/order/{id}','FeController@corder');
      Route::post('/store','OrderController@storeorder');
      Route::get('/logout','\App\Http\Controllers\Auth\AuthenticatedSessionController@logout');
      Route::get('/admin/order','OrderController@index');
      Route::get('/pop','FeController@popular');
      Route::delete('/order/{id}',[OrderController::class, 'destroyorder']);
      

    });


    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
        Route::get('/menu',[MenuController::class, 'index']);
        Route::post('/create',[MenuController::class, 'create']);
        Route::post('/menu',[MenuController::class, 'store']);
        Route::get('/menu/{id}/edit',[MenuController::class, 'edit']);
        Route::post('/menu/{id}',[MenuController::class, 'update']);
        Route::delete('/menu/{id}',[MenuController::class, 'destroy']);
    });


   Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
        Route::get('/menu',[MenuController::class, 'index']);
        Route::get('/menu/create',[MenuController::class, 'create']);
        Route::post('/menu',[MenuController::class, 'store']);
        Route::get('/menu/{id}/edit',[MenuController::class, 'edit']);
        Route::post('/menu/{id}',[MenuController::class, 'update']);
        Route::delete('/menu/{id}',[MenuController::class, 'destroy']);
    });

    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
        Route::get('/order',[OrderController::class, 'index']);
        Route::get('/create',[OrderController::class, 'create']);
        Route::post('/order',[OrderController::class, 'store']);
        Route::get('/order/{id}/edit',[OrderController::class, 'edit']);
        Route::post('/order/{id}',[OrderController::class, 'update']);
        Route::delete('/order/{id}',[OrderController::class, 'destroy']);
    });

    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
        Route::get('/customers',[UserController::class, 'index']);
        Route::get('/create',[OrderController::class, 'create']);
        Route::post('/customers',[OrderController::class, 'store']);
        Route::get('/customers/{id}/edit',[OrderController::class, 'edit']);
        Route::post('/customers/{id}',[OrderController::class, 'update']);
        Route::delete('/customers/{id}',[UserController::class, 'destroy']);
    });