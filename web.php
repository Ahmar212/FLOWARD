<?php
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\TeacherController;
 use App\Http\Controllers\LoginController;
 use App\Http\Controllers\FlowardController;
 /*
 |--------------------------------------------------------------------------
 | Web Routes
 | --------------------------------------------------------------------------
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider within a group which
 | contains the "web" middleware group. Now create something great!
 |
 */
 Route::get('/', function () {
    return view('welcome');
 });
 Route::get('/home', [FlowardController::class, 'index'])->name('homeindex');
 /////////////////////Route Teacher Start
 Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
 Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
 Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');
 Route::get('/teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
 Route::post('/teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');
 Route::get('/teacher/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
 Route::get('/login',[LoginController::class,'index'])->name('login.index');
 ////////////////////////Route Teacher End