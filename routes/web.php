<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\RoutineController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\HostelController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\ApplicationController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\CourseController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\HomeController;

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



//home Route
Route::get('/', [HomeController::class,'index']);


 Route::get('/about',[AboutController::class,'index']);

 Route::get('/courses',[CourseController::class,'index']);
Route::get('/events',[EventController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/application',[ApplicationController::class,'index']);
Route::post('/api/province', [ApplicationController::class, 'fetchProvince']);
Route::post('/api/district', [ApplicationController::class, 'fetchDistrict']);
Route::post('/api/sector', [ApplicationController::class, 'fetchSector']);
Route::post('/api/cell', [ApplicationController::class, 'fetchCell']);
Route::post('/api/village', [ApplicationController::class, 'fetchVillage']);



Route::get('/register',[AdminController::class,'create']);
Route::post('/register',[AdminController::class,'store']);
Route::post('/logout',[AdminController::class,'logout']);

Route::get('/login',[AdminController::class,'login'])->name('login')->middleware('guest');
Route::post('/user/authenticate',[AdminController::class,'authenticate']);


Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'index'])->middleware('auth');

// auth route


    // students routes
    Route::get('/admin/students',[StudentController::class,'index']);
    
    //show form to create student
    Route::get('/admin/students/create',[StudentController::class,'create'])->name('admin.createStudent')->where([]);
    
    // store students data
    Route::post('/admin/students',[StudentController::class,'store'])->name('/admin/students');
    
    // show form to edit student
    Route::get('/admin/students/{student}/edit',[StudentController::class,'edit'])->name('admin.editStudent');
    
    // route to update student
    Route::put('/admin/students/{student}/',[StudentController::class,'update'])->name('admin.editStudent');
    
    //route to delete student
    Route::delete('/admin/students/delete/{student}',[StudentController::class,'destroy']);
    // route to get single student
    Route::get('/admin/student/{student}',[StudentController::class,'show'])->name('admin.ShowStudent')->where([]);

    //teachers routes
Route::get('/admin/teachers/',[TeacherController::class,'index']);
Route::post('/admin/teacher',[TeacherController::class,'store']);
Route::put('/admin/teacher/{teacher}',[TeacherController::class,'update']);
Route::get('/admin/teacher/{teacher}/edit',[TeacherController::class,'edit']);
Route::get('/admin/teacher/create',[TeacherController::class,'create']);
Route::delete('/admin/teacher/delete/{teacher}',[TeacherController::class,'destroy']);

Route::get('/admin/teacher/{teacher}',[TeacherController::class,'show']);


// exam routes

Route::get('/admin/exams',[ExamController::class,'index']);
Route::post('/admin/exam',[ExamController::class,'store']);
Route::get('/admin/exam/{exam}/edit',[ExamController::class,'edit']);
Route::put('/admin/exam/{exam}',[ExamController::class,'update']);
Route::get('/admin/exam/create',[ExamController::class,'create']);
Route::delete('/admin/exam/delete/{exam}/',[ExamController::class,'destroy']);

// books route
Route::get('/admin/books',[BookController::class,'index']);
Route::post('/admin/book',[BookController::class,'store']);
Route::get('/admin/book/{book}/edit',[BookController::class,'edit']);
Route::put('/admin/book/{book}',[BookController::class,'update']);
Route::get('/admin/book/create',[BookController::class,'create']);
Route::delete('/admin/book/delete/{book}',[BookController::class,'destroy']);

// expense Routes
Route::get('/admin/expenses',[ExpenseController::class,'index']);
Route::post('/admin/expense',[ExpenseController::class,'store']);
Route::get('/admin/expense/{expense}/edit',[ExpenseController::class,'edit']);
Route::put('/admin/expense/{expense}',[ExpenseController::class,'update']);
Route::get('/admin/expense/create',[ExpenseController::class,'create']);
Route::delete('/admin/expense/delete/{expense}',[ExpenseController::class,'destroy']);

// parent Routes

Route::get('/admin/parents',[ParentController::class,'index']);
Route::post('/admin/parent',[ParentController::class,'store']);
Route::get('/admin/parent/{parent}/edit',[ParentController::class,'edit']);
Route::put('/admin/parent/{parent}',[ParentController::class,'update']);
Route::get('/admin/parent/create',[ParentController::class,'create']);
Route::delete('/admin/parent/delete/{parent}',[ParentController::class,'destroy']);
Route::get('/admin/parent/{parent}',[ParentController::class,'show']);

// Notice Routes
Route::get('/admin/notices',[NoticeController::class,'index']);
Route::post('/admin/notice',[NoticeController::class,'store']);
Route::get('/admin/notice/{notice}/edit',[NoticeController::class,'edit']);
Route::put('/admin/notice/{notice}',[NoticeController::class,'update']);
Route::get('/admin/notice/create',[NoticeController::class,'create']);
Route::delete('/admin/notice/{notice}',[NoticeController::class,'destroy']);


//  routines Routes
Route::get('/admin/routines',[RoutineController::class,'index']);
Route::post('/admin/routine',[RoutineController::class,'store']);
Route::get('/admin/routine/{routine}/edit',[RoutineController::class,'edit']);
Route::put('/admin/routine/{routine}',[RoutineController::class,'update']);
Route::get('/admin/routine/create',[RoutineController::class,'create']);
Route::delete('/admin/routine/{routine}',[RoutineController::class,'destroy']);

// hostel routes
Route::get('/admin/hostels',[HostelController::class,'index']);
Route::post('/admin/hostel',[HostelController::class,'store']);
Route::get('/admin/hostel/{hostel}/edit',[HostelController::class,'edit']);
Route::put('/admin/hostel/{hostel}',[HostelController::class,'update']);
Route::get('/admin/hostel/create',[HostelController::class,'create']);
Route::delete('/admin/hostel/{hostel}',[HostelController::class,'destroy']);

});








