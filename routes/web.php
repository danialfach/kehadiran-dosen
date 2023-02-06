<?php

use App\Http\Controllers\DosenController;
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
    return view('welcome');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);
Route::post('/dosen/store', [DosenController::class, 'store']);
Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);
Route::get('/dosen/search', [DosenController::class, 'search']);
Route::get('/dosen/mahasiswa/searchA', [DosenController::class, 'searchA']);
Route::get('/dosen/wali/searchB', [DosenController::class, 'searchB']);

// one to one
Route::get('/dosen/mahasiswa', [DosenController::class, 'mahasiswa']);

// one to many
Route::get('/dosen/wali', [DosenController::class, 'wali']);