<?php

use Illuminate\Http\Request;

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


Route::get('/products',function(){
	return response()->json(
		[
			"message" => "Success Get Data"
		]
	);
});

Route::post('/product',function(){
	return response()->json(
		[
			"message" => "Success Post Data"
		]
	);
});


Route::put('/product/{id}',function($id){
	return response()->json(
		[
			"message" => "Success Put Data".$id
		]
	);
});


Route::delete('/product/{id}',function($id){
	return response()->json(
		[
			"message" => "Success Delete Data".$id
		]
	);
});