<?php
use App\Http\Controllers\AuthController;
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

Route::post('/register',[AuthController::class,'userRegister'])->name('register');
Route::get('/', function () {
    return view('welcome');
});



Route::get('/student', function () {
    return view('student');
});

Route::get('/slogin', function () {
    return view('slogin');
});


Route::get('/alogin', function () {
    return view('alogin');
});

Route::get('/feedback', function () {
    return view('feedback');
});

// Route::post('student',[
//     'uses'=>'studentController@studentregistation',
//     'as'=>'student'
// ]);
Route::post('feedback',[
    'uses'=>'FeedbackController@feedback',
    'as'=>'feedback'
]);
Route::post('slogin',[
    'uses'=>'UserController@slogin',
    'as'=>'slogin'
]);

Route::get('home',[
    'uses'=>'UserController@home',
    'as'=>'home'
]);

Route::get('/order', [
    'uses'=>'OrderController@show'
]);

Route::get('/adminadd', function () {
    return view('adminadd');
});
// Route::post('adminregistation',[
//     'uses'=>'AdminController@registation',
//     'as'=>'adminregistation'
// ]);

Route::get('/studentshow', [
    'uses'=>'UserController@show'
]

);

Route::get('/feedbackshow', [
    'uses'=>'FeedbackController@show'
]

);

Route::get('/food', [
    'uses'=>'FoodController@show'
]);
    
Route::get('/addfood', function () {
    return view('addfood');
});

Route::post('newfood',[
    'uses'=>'FoodController@add',
    'as'=>'newfood'
]);

Route::get('studentshow', [
    'uses'=>'UserController@show',
    'as'=>'studentshow'
]);

Route::get('/addorder', function () {
    return view('order');
});

Route::post('neworder',[
    'uses'=>'OrderController@order',
    'as'=>'neworder'
]);
Route::get('/back', [
    'uses'=>'FoodController@showone',
  
]);

Route::post('adminlogin',[
    'uses'=>'AdminController@adminlogin',
    'as'=>'adminlogin'
]);

Route::get('adminshow', [
    'uses'=>'OrderController@show',
    'as'=>'adminshow'
  
]);

Route::get('/logout',[
    'uses'=>'UserController@logout',
    
]);