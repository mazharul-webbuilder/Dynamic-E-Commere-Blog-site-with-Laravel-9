<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route:: get('/', [HomeController::class, 'home'])->name('home');
Route:: get('/all-product', [HomeController::class, 'products'])->name('all-product');
Route:: get('/all-blogs', [HomeController::class, 'blogs'])->name('blog');
Route:: get('/registration', [HomeController::class, 'registration'])->name('registration');
Route:: get('/login', [HomeController::class, 'login'])->name('login');
Route:: get('/product-detail/{id}', [HomeController::class, 'detail'])->name('product-detail');
Route:: get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog-details');

