<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', ['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});

Route::get('/services-mobile', function () {
    return view('services-mobile', ['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/blog', function () {
    return view('blog', ['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/blog-inside', function () {
    return view('blog-inside', ['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/case-study-ujji', function () {
    return view('case-study-ujji', ['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/case-studies', function () {
    return view('case-studies',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/tech-ionic', function () {
    return view('tech-ionic',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/free-consultation', function () {
    return view('free-consultation',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/ai-development', function () {
    return view('ai-development',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/one-stop-shop', function () {
    return view('one-stop-shop',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/it-outsourcing', function () {
    return view('it-outsourcing',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/software-product', function () {
    return view('software-product',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/switch-fast', function () {
    return view('switch-fast',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/discovery-service', function () {
    return view('discovery-service',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/services-uxui', function () {
    return view('services-uxui',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/about-us', function () {
    return view('about-us',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/clutch', function () {
    return view('clutch',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/custom-software-development-services', function () {
    return view('custom-software-development-services',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});
Route::get('/glossary-it-terms', function () {
    return view('glossary-it-terms',['page_title' => 'mDevelopers - Your Custom Software Development Company']);
});



