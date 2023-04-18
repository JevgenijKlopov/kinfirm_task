<?php

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/list', [ApiController::class, 'apiData']);
 
});
Route::middleware(['guest', 'api-session'])->group(function () {
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');    
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('registration', [AuthController::class, 'registration'])->name('registration');
        Route::post('/register-user',[AuthController::class, 'register'])->name('register-user');
        Route::post('/login-user',[AuthController::class, 'loginUser'])->name('login-user');
    });
//     Route::middleware('auth:sanctum')->group(function () {
//         Route::get('/user/{id}', function(Request $request, $id){
//         $user = User::find($id);
//         if(!$user) return response('', 404);
//         return $user;
//     })->name('user');
// });

