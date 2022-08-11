<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DestinationController;

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
$locale = Request::segment(1);

if(in_array($locale, ['en','de','ru'])){
    App::setLocale($locale);
}else{
    App::setLocale('en');

    $locale = '';
}


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix'=>$locale],function()
{
    Route::get('/',[HomePageController::class,'index'])->name('home');  
    Route::post('/',[HomePageController::class,'contact'])->name('contact');
    Route::post('/subscribe',[HomePageController::class,'subscribe'])->name('subscribe');


    Route::get(__('lang.slug_dest'),[DestinationController::class,'index'])->name('destination');  


});

