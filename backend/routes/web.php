<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebController;
use \App\Http\Controllers\AuthController;
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


Route::name('web.')->group(function(){
    Route::get('/about', [WebController::class , 'about'])->name('about');
    Route::get('/home', [WebController::class , 'home'])->name('home');
    Route::get('/', [WebController::class , 'home'])->name('home');
    Route::get('/contact', [WebController::class , 'contact'])->name('contact');
    Route::get('/faqs', [WebController::class , 'faqs'])->name('faqs');
    Route::get('/how-it-work', [WebController::class , 'howItWork'])->name('howItWork');

    Route::get('/test', function (){
        dd("ddd");
    })->middleware(['auth:restaurant']);

    Route::get('/test', function (){
        dd("ddd");
    })->middleware(['auth:web']);


    Route::get('/logout', [ AuthController::class ,'logout'])->name('logout');
    Route::get('/logoutr', [ AuthController::class ,'logoutr'])->name('logoutr');


    Route::group(['middleware' => ['guest' , 'guesResturant']],function (){

        Route::get('/login', [WebController::class , 'login'])->name('login');
        Route::get('/user-signup', [WebController::class , 'userSignUp'])->name('user-signup');
        Route::get('/resturant-signup', [WebController::class , 'resturantSignUp'])->name('resturant-signup');

        Route::post('/userSignUp', [AuthController::class , 'userSignUp'])->name('userSignUp');
        Route::post('/userLogin', [AuthController::class , 'userLogin'])->name('userLogin');

        Route::post('/resturantLogin', [ AuthController::class ,'resturantLogin'])->name('resturantLogin');
        Route::post('/resturantSignUpReq', [ AuthController::class ,'resturantSignUpReq'])->name('resturantSignUpReq');

    });

});

