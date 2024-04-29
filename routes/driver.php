<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| driver Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('driver')->name('driver.')->group(function(){

    Route::middleware('isDriver')->group(function(){
        Route::view('index' ,'driver.index')->name('index');
});

    require __DIR__.'/driver_auth.php';
});

// Multi guard_Auth 
// Route::view('/driver/register','driver.register');
// Route::view('/driver/login','driver.login');

