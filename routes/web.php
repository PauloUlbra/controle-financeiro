<?php

use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bills', [BillController::class, 'index']);
Route::get('bills/create', [BillController::class, 'create']);
Route::post('bills', [BillController::class, 'store']);
Route::get('bills/{id}/edit', [BillController::class, 'edit']);
Route::put('bills/{id}', [BillController::class, 'update']);
Route::delete('bills/{id}', [BillController::class, 'destroy']);

