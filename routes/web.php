<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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
Route::get('/homeBlog',[BlogController::class,'index']);
Route::get('/createpost',[PostController::class,'create_post'])->middleware(['checklogin','checkrole'])->name('createpost');
Route::post('/createpost',[PostController::class,'store_post'])->name('storepost');
Route::get('/login', function(){
    return view('login');
});
Route::get('/test', function () {
    $users= DB::table('posts')
    
    ->paginate(20);
    //dd($user);
    return view('test',compact('users') );
});
Route::get('/home.app',function(){
    return view('child');
});
Route::resource('posts',PostController::class);
Route::get('/index',[PostController::class, 'index'])->name('index');
