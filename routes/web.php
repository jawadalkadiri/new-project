<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

use function Ramsey\Uuid\v1;


//Read index, view single data, --> audience
// Route::get('/task',[TaskController::class,'index'])->name('task.index');
// Route::get('/task/{task}',[TaskController::class,'show'])->name('task.show');
//CRUDS, create read update delete --> admin

Route::get('/',function(){
    return view('audience.home');
})->name('audience.home');

Route::get('/about-us/{id}',[AboutController::class,'show'])->name('about');

Route::get('/dashboard',function(){
    return view('admin.pages.dashboard');
})->name('admin.dashboard');

Route::get('/admin/users',[UserController::class,'index'])->name('admin.user.index');
Route::get('/admin/users/create',[UserController::class,'create'])->name('admin.user.create');
Route::post('/admin/users/store',[UserController::class,'store'])->name('admin.user.store');
Route::get('/admin/users/{user}',[UserController::class,'show'])->name('admin.user.show');
Route::get('/admin/users/edit/{user}',[UserController::class,'edit'])->name('admin.user.edit');
Route::put('/admin/users/update/{user}',[UserController::class,'update'])->name('admin.user.update');
Route::delete('/admin/users/destroy/{user}',[UserController::class,'destroy'])->name('admin.user.destroy');

Route::get('/admin/posts',[PostController::class,'index'])->name('admin.post.index');
Route::get('/admin/posts/show/{post}',[PostController::class,'show'])->name('admin.post.show');
Route::get('admin/posts/create',[PostController::class,'create'])->name('admin.post.create');
Route::post('admin/posts/store',[PostController::class,'store'])->name('admin.post.store');
Route::get('/admin/posts/edit/{post}',[PostController::class,'edit'])->name('admin.post.edit');
Route::put('/admin/posts/update/{post}',[PostController::class,'update'])->name('admin.post.update');
Route::delete('/admin/posts/destroy/{post}',[PostController::class,'destroy'])->name('admin.post.destroy');



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




