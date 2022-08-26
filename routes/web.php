<?php

use App\Http\Controllers\ProviderController;
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

Route::get('/',function(){
    return view('dashboard.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::prefix('/provider')->group(function(){
    Route::get('/create', function () {
        return view('dashboard.provider.create');
    })->name('provider.create');

    Route::post('/store', [ProviderController::class,'store'])->name('provider.store');
});




Auth::routes();

