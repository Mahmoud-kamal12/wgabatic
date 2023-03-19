<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\MealController;
use \App\Http\Controllers\ResturantController;
use \App\Http\Controllers\OrdertController;

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

//Route::get('/testt', function (){
////    $or = \App\Models\Order::insert([
////        "user_id" => 1,
////        "resturant_id" => 1,
////        "total" => 520.2
////    ]);
//    $or = \App\Models\Order::find(1);
//    dd(auth()->user()->orders);
//});


Route::name('web.')->group(function(){
    Route::get('/about', [WebController::class , 'about'])->name('about');
    Route::get('/home', [WebController::class , 'home'])->name('home');
    Route::get('/', [WebController::class , 'home'])->name('home');
    Route::get('/contact', [WebController::class , 'contact'])->name('contact');
    Route::get('/faqs', [WebController::class , 'faqs'])->name('faqs');
    Route::get('/how-it-work', [WebController::class , 'howItWork'])->name('howItWork');
    Route::get('/ordering', [WebController::class , 'ordering'])->name('ordering');



    Route::group(["middleware" => "auth:web"],function (){
        Route::get('/logout', [ AuthController::class ,'logout'])->name('logout');
        Route::get('/user-profile', [ UserController::class ,'userProfile'])->name('userProfile');

    });

    Route::group(["middleware" => "auth:restaurant"],function (){
        Route::get('/logoutr', [ AuthController::class ,'logoutr'])->name('logoutr');
        Route::get('/restaurant-profile', [ ResturantController::class ,'restaurantProfile'])->name('restaurantProfile');
        Route::post('/restaurant-profile/update', [ ResturantController::class ,'update'])->name('restaurantProfile.update');
        Route::post('/restaurant-profile/menuadd', [ ResturantController::class ,'menuadd'])->name('restaurantProfile.menuadd');
        Route::post('/restaurant-profile/menuupdate/{id}', [ ResturantController::class ,'menuupdate'])->name('restaurantProfile.menuupdate');
        Route::get('/restaurant-profile/menudelete/{id}', [ ResturantController::class ,'menudelete'])->name('restaurantProfile.menudelete');

        Route::resource('/meal', MealController::class);

    });



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

