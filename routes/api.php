<?php

use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\API\ProductController;

use App\Http\Controllers\API\VoucherController;

use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\NotifyController;

use App\Models\ProductType;
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
/*----------------------------------------------------------------*/
//public Route
Route::post('/login', [AuthController::class, 'login'] );
Route::post('/register', [AuthController::class, 'register']);


Route::get('products', [ProductController::class ,'index']);
Route::get('products/{id}', [ProductController::class ,'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/profile', [AuthController::class ,'getProfile']);
    Route::prefix('products')->group(function () {
        Route::post('/',[ProductController::class, 'store']);
        Route::put('/{id}',[ProductController::class, 'update']);
        Route::delete('/{id}',[ProductController::class, 'destroy']);
    });
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});



//Product_type
Route::prefix('product_type')->group(function () {
    Route::get('/', [ProductTypeController::class, 'getAllProductType']);
    Route::get('/{id}', [ProductTypeController::class, 'getAllDetailProductType']);
});
//Order
Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'getAllOrder']);
    Route::get('/status', [OrderController::class, 'getAllOrderStatus']);
});
//Payment
Route::prefix('payment')->group(function () {
    Route::get('/', [PaymentController::class, 'getAllPayment']);
});
//Delivery_Method
Route::prefix('delivery_method')->group(function () {
    Route::get('/', [DeliveryController::class, 'getAllDeliveryMethod']);
});

//UserType
Route::prefix('user_type')->group(function () {
    Route::get('/', [UserTypeController::class, 'getAllUserType']);
});
//User
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'getAllUserMember']);
});
//Comment
Route::prefix('comments')->group(function () {
    Route::get('/{id}', [CommentController::class, 'show']);

});
//Voucher
Route::prefix('vouchers')->group(function () {
    Route::get('/', [VoucherController::class, 'getAllVoucher']);
});
//Notify
Route::prefix('notifies')->group(function () {
    Route::get('/', [NotifyController::class, 'index']);   
    Route::get('/detail/{id}', [NotifyController::class, 'show']);
    Route::get('/delete/{id}', [NotifyController::class, 'destroy']);
});



