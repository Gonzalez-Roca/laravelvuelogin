<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/users', 'UserController@getUsers');
// Route::get('/users', function () {
//     return User::all();
// });

use App\Http\Controllers\BlogController;
Route::resource('blogs', BlogController::class);

// Route::get('/blogs', 'BlogController@index');
// Route::post('/nombretabla', 'BlogController@store');
// Route::get('/nombretabla/{id}', 'BlogController@show');
// Route::put('/nombretabla/{id}', 'BlogController@update');
// Route::delete('/nombretabla/{id}', 'BlogController');


