<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\profileController as profileController;

//admin controllers
use App\Http\Controllers\admin\PostController as AdminPostController;
use App\Http\Controllers\admin\TaskController as AdminTaskController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\EnrollmentController as EnrollmentController;

//audience controllers
use App\Http\Controllers\audience\PostController as AudiencePostController;
use App\Http\Controllers\audience\TaskController as AudienceTaskController;
use App\Http\Controllers\audience\HomeController as AudienceHomeController;

use function Ramsey\Uuid\v1;


//Read index, view single data, --> audience
// Route::get('/task',[TaskController::class,'index'])->name('task.index');
// Route::get('/task/{task}',[TaskController::class,'show'])->name('task.show');
//CRUDS, create read update delete --> admin



Route::get('/about-us/{id}',[AboutController::class,'show'])->name('about');


//admin routes
Route::get('/dashboard',function(){
    return view('admin.pages.dashboard');
})->name('admin.dashboard');

Route::get('/admin/users',[AdminUserController::class,'index'])->name('admin.user.index');
Route::get('/admin/users/create',[AdminUserController::class,'create'])->name('admin.user.create');
Route::post('/admin/users/store',[AdminUserController::class,'store'])->name('admin.user.store');
Route::get('/admin/users/{user}',[AdminUserController::class,'show'])->name('admin.user.show');
Route::get('/admin/users/edit/{user}',[AdminUserController::class,'edit'])->name('admin.user.edit');
Route::put('/admin/users/update/{user}',[AdminUserController::class,'update'])->name('admin.user.update');
Route::delete('/admin/users/destroy/{user}',[AdminUserController::class,'destroy'])->name('admin.user.destroy');

Route::get('/admin/posts',[AdminPostController::class,'index'])->name('admin.post.index');
Route::get('/admin/posts/show/{post}',[AdminPostController::class,'show'])->name('admin.post.show');
Route::get('admin/posts/create',[AdminPostController::class,'create'])->name('admin.post.create');
Route::post('admin/posts/store',[AdminPostController::class,'store'])->name('admin.post.store');
Route::get('/admin/posts/edit/{post}',[AdminPostController::class,'edit'])->name('admin.post.edit');
Route::put('/admin/posts/update/{post}',[AdminPostController::class,'update'])->name('admin.post.update');
Route::delete('/admin/posts/destroy/{post}',[AdminPostController::class,'destroy'])->name('admin.post.destroy');

Route::get('/admin/tasks', [AdminTaskController::class, 'index'])->name('admin.task.index');
Route::get('/admin/tasks/show/{task}', [AdminTaskController::class, 'show'])->name('admin.task.show');
Route::get('/admin/tasks/create', [AdminTaskController::class, 'create'])->name('admin.task.create');
Route::post('/admin/tasks/store', [AdminTaskController::class, 'store'])->name('admin.task.store');
Route::get('/admin/tasks/edit/{task}', [AdminTaskController::class, 'edit'])->name('admin.task.edit');
Route::put('/admin/tasks/update/{task}', [AdminTaskController::class, 'update'])->name('admin.task.update');
Route::delete('/admin/tasks/destroy/{task}', [AdminTaskController::class, 'destroy'])->name('admin.task.destroy');

Route::get('/admin/enrollments', [EnrollmentController::class, 'index'])->name('admin.enrollment.index');
Route::get('/admin/enrollments/show/{enrollment}', [EnrollmentController::class, 'show'])->name('admin.enrollment.show');
Route::get('/admin/enrollments/create', [EnrollmentController::class, 'create'])->name('admin.enrollment.create');
Route::post('/admin/enrollments/store', [EnrollmentController::class, 'store'])->name('admin.enrollment.store');
Route::get('/admin/enrollments/edit/{enrollment}', [EnrollmentController::class, 'edit'])->name('admin.enrollment.edit');
Route::put('/admin/enrollments/update/{enrollment}', [EnrollmentController::class, 'update'])->name('admin.enrollment.update');
Route::delete('/admin/enrollments/destroy/{enrollment}', [EnrollmentController::class, 'destroy'])->name('admin.enrollment.destroy');

//audience routes
Route::get('/',[AudienceHomeController::class,'index'])->name('audience.home');
Route::get('/audience/posts',[AudiencePostController::class,'index'])->name('audience.post.index');
Route::get('/audience/tasks',[AudienceTaskController::class,'index'])->name('audience.task.index');


// Route::get('/about',function(){
//     return view('pages.about');
// })->name('about');

// Route::get('/profile',[profileController::class,'show'])->name('profile');

// Route::get('/contactus',function(){
//     return view('pages.contactus');
// })->name('contactus');

// //task routes

// Route::get('/task/create',[TaskController::class,'create'])->name('task.create');
// Route::post('/task/store',[TaskController::class,'store'])->name('task.store');

// Route::get('/task/{task}/edit',[TaskController::class,'edit'])->name('task.edit');
// Route::put('/task/{task}/update',[TaskController::class,'update'])->name('task.update');

// //trash routes
// Route::put('/task/{task}/soft',[TaskController::class,'softdestroy'])->name('task.soft_destroy');
// Route::get('/trash',[TaskController::class,'trashindex'])->name('trash.index');
// Route::put('/task/{task}/restore',[TaskController::class,'taskrestore'])->name('task.restore');
// Route::delete('/task/{task}/destroy',[TaskController::class,'destroy'])->name('task.destroy');



// Route::get('/user/{id}',function($id){
//     return view('pages.user', ['idd'=>$id]);
// });




