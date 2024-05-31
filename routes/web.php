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

Route::get('/', function () {
    return view('Main-Website.index');
})->name('Home-Page');

Route::get('/About-US',function(){
    return view('Main-Website.About');
})->name('About-Page');

Route::get('/Our-Courses',function(){
    return view('Main-Website.Our-Courses');
})->name('Our-Courses-Page');

Route::get('/Courses-Details',function(){
    return view('Main-Website.Courses-Details');
})->name('Courses-Details-Page');

Route::get('/Our-Compaign',function(){
    return view('Main-Website.Our-Campaign');
})->name('Our-Compaign-Page');

Route::get('/Compaign-Details',function(){
    return view('Main-Website.Campaign-Details');
})->name('Compaign-Details-Page');

Route::get('/Our-Scholar',function(){
    return view('Main-Website.Our-Scholar');
})->name('Our-Scholar-Page');

Route::get('/Scholar-Details',function(){
    return view('Main-Website.Scholar-Details');
})->name('Scholar-Details-Page');

Route::get('/Our-Event',function(){
    return view('Main-Website.Our-Events');
})->name('Our-Event-Page');

Route::get('/404',function(){
    return view('Main-Website.404');
})->name('404-Page');

Route::get('/Pricing-Packages',function(){
    return view('Main-Website.Pricing-Packages');
})->name('Pricing-Packages-Page');

Route::get('/Our-Blog',function(){
    return view('Main-Website.Our-Blog');
})->name('Our-Blog-Page');

Route::get('/Blog-Details',function(){
    return view('Main-Website.Blog-Details');
})->name('Blog-Details-Page');

Route::get('/Contact-US',function(){
    return view('Main-Website.Contact');
})->name('Contact-Page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
