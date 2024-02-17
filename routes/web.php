<?php

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

Route::get('/login', function () {
    return view('authentication.login');
});
Route::get('/register', function () {
    return view('authentication.register');
});
Route::get('/books', function () {
    return view('books.index');
});
Route::get('/user-dashboard', function () {
    return view('dashboard.user');
});
Route::get('/books/detail', function () {
    return view('books.detail');
});
Route::get('/categories', function () {
    return view('categories.index');
});
Route::get('/categories/detail', function () {
    return view('categories.detail');
});
Route::get('/reports', function () {
    return view('reports.index');
});
Route::get('/borrowings', function () {
    return view('borrowings.index');
});
Route::get('/reports/generate', function () {
    return view('reports.all');
});
Route::get('/reports/generate/id', function () {
    return view('reports.one');
});
Route::get('/user/books', function () {
    return view('user-books.index');
});
Route::get('/user/books/detail', function () {
    return view('user-books.detail');
});
Route::get('/user/collections', function () {
    return view('collections.index');
});
Route::get('/users', function () {
    return view('users.index');
});
Route::get('/users/edit', function () {
    return view('users.edit');
});
Route::get('/landing', function () {
    return view('dashboard.landing');
});
Route::get('/profile', function () {
    return view('user-profile.index');
});
Route::get('/profile/edit/id', function () {
    return view('user-profile.edit');
});
Route::get('/profile/edit-password/id', function () {
    return view('user-profile.edit-password');
});
