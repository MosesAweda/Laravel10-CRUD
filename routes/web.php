<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/home', [StudentController::class, 'index']);

Route::post('/save-student', [StudentController::class, 'saveStudent']);
Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('/update-student', [StudentController::class, 'updateStudent']);
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);
Route::get('/view/{id}', [StudentController::class, 'View']);
