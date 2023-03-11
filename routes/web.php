<?php
use App\Http\Controllers\ManageController;
use app\Http\Controllers\StudentsController\StudentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin/index',[ManageController::class,'index'])->name('admin.index');
    Route::get('/students/index','App\Http\Controllers\StudentsController\StudentsController@index')->name('students.index');
    Route::get('/subjects/index',[SubjectsController::class,'index'])->name('subjects.index');
    Route::get('/exams/index',[ExamsController::class,'index'])->name('exams.index');
   
    Route::get('/teachers/index',[TeachersController::class,'index'])->name('teachers.index');
});


Route::middleware(['auth','teacher'])->group(function () {
    Route::get('/results/index',[ResultsController::class ,'index'])->name('results.index');
});


require __DIR__.'/auth.php';
