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

Route::get('/hello', function(){
        return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route
::get('/p','PostsController@create');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/changeStatus', [MemberController::class,'changeMemberStatus'])->$name('changeStatus');