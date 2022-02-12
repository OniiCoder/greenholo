<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\PagesController::class, 'signin']);

Route::get('/register', [App\Http\Controllers\PagesController::class, 'signup']);

Route::get('/home', [App\Http\Controllers\PagesController::class, 'home']);

Route::get('/jobs', [App\Http\Controllers\PagesController::class, 'jobs']);

Route::get('/notifications', [App\Http\Controllers\PagesController::class, 'notifications']);

Route::get('/network', [App\Http\Controllers\PagesController::class, 'network']);

Route::get('/chats', [App\Http\Controllers\PagesController::class, 'chats']);

Route::get('/profile', [App\Http\Controllers\PagesController::class, 'profile']);

Route::get('/savedseeds', [App\Http\Controllers\PagesController::class, 'savedseeds']);

Route::get('/connections', [App\Http\Controllers\PagesController::class, 'connections']);

Route::get('/peoplefollowing', [App\Http\Controllers\PagesController::class, 'peoplefollowing']);

Route::get('/groups', [App\Http\Controllers\PagesController::class, 'groups']);

Route::get('/newsletters', [App\Http\Controllers\PagesController::class, 'newsletters']);

Route::get('/jobs/saved', [App\Http\Controllers\PagesController::class, 'savedjobs']);

Route::get('/jobs/applied', [App\Http\Controllers\PagesController::class, 'appliedjobs']);

Route::get('/settings', [App\Http\Controllers\PagesController::class, 'settings']);

Route::get('/shop', [App\Http\Controllers\PagesController::class, 'shophome']);

Route::get('/shop/product', [App\Http\Controllers\PagesController::class, 'product']);

Route::get('/shop/saveditems', [App\Http\Controllers\PagesController::class, 'saveditems']);

Route::get('/cart', [App\Http\Controllers\PagesController::class, 'cart']);

Route::get('/blog', [App\Http\Controllers\PagesController::class, 'bloghome']);

Route::get('/blog/write', [App\Http\Controllers\PagesController::class, 'blogwrite']);

Route::get('/blog/profile', [App\Http\Controllers\PagesController::class, 'blogprofile']);

Route::get('/seeds', [App\Http\Controllers\PagesController::class, 'seeds']);

Route::get('/seed', [App\Http\Controllers\PagesController::class, 'seed']);






