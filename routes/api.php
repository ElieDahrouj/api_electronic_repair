<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReplacementTutorialController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryEshopController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ApplianceController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home', [ReplacementTutorialController::class,'index'])->name('home');
Route::get('category', [CategoryController::class,'index'])->name('category');
Route::get('eshop', [CategoryEshopController::class,'index'])->name('eshop');
Route::get('eshop/{id}', [CategoryEshopController::class,'show'])->name('eshopCategoryId');
Route::get('category/{id}', [CategoryController::class,'show'])->name('categoryId');
Route::get('equipment/{id}', [EquipmentController::class,'show'])->name('equipmentId');
Route::get('appliance/{id}', [ApplianceController::class,'show'])->name('applianceId');
Route::get('replacementTutorial/{id}', [ReplacementTutorialController::class,'show'])->name('replacementTutorialId');
