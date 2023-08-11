<?php

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

Route::get('/user', function () {
    $user = \App\Models\User::all();

    $student = $user->all();

    return response()->json($student);
});

Route::get('/student/{id}', function (string $id) {
    $user = \App\Models\Student::all();

    $student = $user->where('id', $id);

    return response()->json($student);
});

Route::get('/student/{id}/wallet', function (string $id) {
    $user = \App\Models\Student::all();

    $student = $user->where('id', $id)->first();

    return response()->json($student['amount']);
});
