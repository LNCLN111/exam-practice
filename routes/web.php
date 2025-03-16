<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/item', [ItemController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);