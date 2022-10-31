<?php

use Illuminate\Support\Facades\Route;

// コントローラを読み込み
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// ルートを作成
Route::get('tests/test', [TestController::class, 'index'] );
