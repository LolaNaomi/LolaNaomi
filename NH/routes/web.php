<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
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


Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view ('dashboard');
})->name('dashboard');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });



// Home Controllers (User Front-End)
Route::post('/appointment', [HomeController::class,'appointment']);
Route::get('/myappointment', [HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);

// Admin Controllers (User Back-End)
Route::get('/add_doctor_view', [AdminController::class,'addview']);
Route::post('/upload_doctor', [AdminController::class,'upload']);
Route::get('/showappointment', [AdminController::class,'showappointment']);

Route::get('/approved/{id}', [AdminController::class,'approved']);
Route::get('/cancelled/{id}', [AdminController::class,'cancelled']);

// Admin Controllers (User Back-End)
Route::get('/showdoctor', [AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);