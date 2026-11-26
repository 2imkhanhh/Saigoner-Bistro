<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/menu', 'pages.menu')->name('menu');
Route::view('/take-away', 'pages.takeaway')->name('takeaway');
Route::view('/kontakt', 'pages.contact')->name('contact');
