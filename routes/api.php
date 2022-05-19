<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\OrderDetailController;
use App\Http\Controllers\api\ComplaintController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', [AuthController::class ,'login']);
Route::post('register', [AuthController::class ,'register']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout', [AuthController::class, 'logout']);
});
    Route::resource('Category', CategoryController::class);
    Route::resource('Product', ProductController::class);
    Route::resource('Order', OrderController::class);
    Route::resource('OrderDetail', OrderDetailController::class);
    Route::resource('Complaint', ComplaintController::class);

    Route::get('/getNew',[OrderController::class,'getNew']);
    Route::get('/getShipping',[OrderController::class,'getShipping']);
    Route::get('/getOrdered',[OrderController::class,'getOrdered']);
    Route::get('/getOrderByUserId/{id}',[OrderController::class,'getOrderByUserId']);
    Route::get('/getOrderByEmployeeId/{id}',[OrderController::class,'getOrderByEmployeeId']);
    Route::get('/getProductByCategoryId/{id}',[ProductController::class,'getProductByCategoryId']);
    Route::get('/getProductByBrandId/{id}',[ProductController::class,'getProductByBrandId']);
    Route::get('/getOrderByDeliveryId/{id}',[OrderController::class,'getOrderByDeliveryId']);
    Route::get('/getComplaintByUserId/{id}',[ComplaintController::class,'getComplaintByUserId']);
    Route::get('/getComplaintByProductId/{id}',[ComplaintController::class,'getComplaintByProductId']);




