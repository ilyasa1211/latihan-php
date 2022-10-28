<?php

use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    $data = new ItemController;

    // dd($data->getAll());
    return view('home.index', ['datas'=>$data->getAll()]);
});
Route::get('/getById/{id}', [ItemController::class, 'getById']);

Route::post('/add', [ItemController::class, 'add']);

Route::post('/ubah/{id}', [ItemController::class, 'ubah']);

Route::delete('/delete/{id}', [ItemController::class, 'delete']);


