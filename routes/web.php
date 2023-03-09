<?php

use App\Http\Controllers\Datepicker;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TabController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
    Route::get('/teacher/index',[TeacherController::class,'index'])->name('teacher.index');
    Route::get('/manage/index',[ManageController::class,'index'])->name('manage.index');
});
Route::get('/tab',[TabController::class,'index'])->name('tab');
Route::get('/datepicker',[Datepicker::class,'index']);


require __DIR__.'/auth.php';
