<?php

use App\Http\Controllers\Api\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
    Route::group( [ 'middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('user-profile',[UserController::class, 'userProfile']);
    Route::get('logout',[UserController::class, 'logout']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',function (){
    return User::all();
});
Route::get('users/{user}',function (User $user){
    User::find($user);
    return $user;
});

Route::resource('usuarios', UserController::class)->names('admin.usuarios');


// Route::apiResource('user', 'UserController');

