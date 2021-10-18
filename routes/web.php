<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FetchDataController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/magento', function () {
    return view('magento');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//Route::get('view_records',[FetchDataController::class,'FetchCategory']);
Route::get('/',[FetchDataController::class,'FetchCategory']);
Route::get('magento/{id}',[FetchDataController::class,'FetchPost']);

Route::get('show',[FetchDataController::class,'ShowData']);
// Route