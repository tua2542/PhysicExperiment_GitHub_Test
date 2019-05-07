<?php
use App\Http\Controllers\MemberController;

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
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/motion', function () {
    return view('motion');
});
Route::get('AboutUs', function () {
    return view('AboutUs');
});
Route::get('IncomingFeatures', function () {
    return view('IncomingFeatures');
});
Route::get('Linear', function () {
    return view('Linear');
});
Route::get('news', function () {
    return view('news');
});
Route::get('Payment', function () {
    return view('Payment');
});
Route::get('Projectile', function () {
    return view('Projectile');
});
Route::get('ProjectileMotionSimulator', function () {
    return view('ProjectileMotionSimulator');
});

Route::get('SimpleHarmonicMotionSimulator', function () {
    return view( 'SimpleHarmonicMotionSimulator');
});

Route::get('LinearMotionSimulator', function () {
    return view( 'LinearMotionSimulator');
});

Route::get('SignIn', 'MemberController@index');

Route::get('SimpleHarmonic', function () {
    return view('SimpleHarmonic');
});

Route::post('login', 'MemberController@login');
Route::any('logout', 'MemberController@logout');

Route::get('kuyrai', 'MemberController@user');

Route::post('signup', 'MemberController@store');
