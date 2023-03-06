<?php

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//! response
//! json
Route::get('/products', function () {
    $orders=product::get();
    return response()->json(["order"=>$orders]);


    });


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


