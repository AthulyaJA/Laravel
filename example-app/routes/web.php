<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;
use  App\Http\Controllers\MemberController;
use  App\Http\Controllers\ProductController;

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
    return view('welcome');
});/*
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/wel', function () {
    return view('wel');
});

Route::get('user',[UserController::class,'index']);

Route::view('/about','about');
Route::get('{name}',function($name)
{
    echo $name;
    return view('welcome');
});
Route::get('{name}',function($name)
{
    echo $name;
    return view('about');
});

Route::get('user/{name}',[UserController::class,'index']);
Route::get('user/',[UserController::class,'about']);*/

/*Route::get('/log',[UserController::class,'login']);*/


//login
Route::view('xyz','login');
Route::post('log',[UserController::class,'login']);
Route::get('data',[UserController::class,'fetdata']);

//list the table
Route::view('mem',"member");
Route::get('table',[MemberController::class,'memberAdd']);
Route::get('list',[MemberController::class,'lis']);



//delet/edit
Route::get('delet/{id}',[MemberController::class,'del']);
Route::get('update/{id}',[MemberController::class,'edit']);
Route::post('edit/{id}',[MemberController::class,'edit_view']);


//product form
Route::view('add','product');
Route::get('pro',[ProductController::class,'pro_add']);
Route::get('product',[ProductController::class,'lis_pro']);



//delet/edit
Route::get('delet/{id}',[ProductController::class,'delete']);
Route::get('up_pro/{id}',[ProductController::class,'edit_pro']);
Route::post('edit_p/',[ProductController::class,'edit_view_pro']);
//login form
Route::view('loginform','login_form');
Route::view('page','profile_page');
Route::get('loginfor',[UserController::class,'login_pa']);


//Register form
Route::view('regform','Register');
Route::view('logform','login_reg');
//validation
Route::post('vali_reg',[UserController::class,'login_form_vali']);


Route::get('/su',[UserController::class,'check']);
Route::post('/dash',[UserController::class,'dashboard']);