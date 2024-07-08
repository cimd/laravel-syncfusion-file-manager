<?php

use Illuminate\Support\Facades\Route;
use Konnec\Examples\Controllers\FileManagerController;

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

Route::post('copy', [FileManagerController::class, 'copy']);
Route::post('create', [FileManagerController::class, 'create']);
Route::post('move', [FileManagerController::class, 'move']);
Route::post('delete', [FileManagerController::class, 'delete']);
Route::post('details', [FileManagerController::class, 'details']);
Route::post('read', [FileManagerController::class, 'read']);
Route::post('rename', [FileManagerController::class, 'rename']);
Route::post('search', [FileManagerController::class, 'search']);
Route::post('upload', [FileManagerController::class, 'upload']);
