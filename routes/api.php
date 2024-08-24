<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::middleware('auth:api')->get('/quotes/{number}', function ($number) {
    $quotes = [];
    for ($i = 0; $i < $number; $i++) {
        $response = Http::get('https://api.kanye.rest/');
        $quotes[] = $response->json('quote');
    }
    return response()->json($quotes);
});
