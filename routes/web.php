<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BiztroxController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\CommentController;

//this rout for front controller
Route::get('/', [BiztroxController::class, 'index'])->name('home');
Route::get('/about', [BiztroxController::class, 'about'])->name('about');
Route::get('/service', [BiztroxController::class, 'service'])->name('service');
Route::get('/page', [BiztroxController::class, 'page'])->name('page');
Route::get('/blog-category/{id}', [BiztroxController::class, 'blog'])->name('blog.category');
Route::get('/blog-details/{id}', [BiztroxController::class, 'singleBlog'])->name('blog.single');
Route::get('/element', [BiztroxController::class, 'element'])->name('element');
Route::get('/contact', [BiztroxController::class, 'contact'])->name('contact');


Route::get('/user-login/{id?}', [AuthController::class, 'index'])->name('user.login');
Route::get('/user-register', [AuthController::class, 'userRegister'])->name('user.register');
Route::post('/new-user-register', [AuthController::class, 'newRegister'])->name('new-user.register');

Route::post('/new-comment/{id}', [CommentController::class, 'newComment'])->name('new.comment');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('category.add');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('category.new');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('category.manage');

    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('blog.add');
    Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('blog.new');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('blog.edit');
    Route::post('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('blog.update');
    Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('blog.delete');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('blog.manage');
    Route::get('/detail-blog/{id}', [BlogController::class, 'detailBlog'])->name('blog.detail');
    Route::get('/published-blog/{id}', [BlogController::class, 'publishedBlog'])->name('blog.published');
    Route::get('/blog-update-status/{id}', [BlogController::class, 'updateStatus'])->name('blog.status');

});

