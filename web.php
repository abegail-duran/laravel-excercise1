<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Home page (controller variables)
Route::get('/exercise', [UserController::class, 'index']);


Route::get('/greet',function(){
    $name=request('name');
    $age =request('age');
    return compact('name','age');
});

Route::get('/user/{name}/{age}',function($name,$age){
    return compact('name','age');
});