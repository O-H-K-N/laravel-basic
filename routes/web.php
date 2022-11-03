<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tests/test', [ TestController::class, 'index'] );

// お問い合わせフォームのルート設定をまとめて行ったパターン
// Route::resource('contacts', ContactFormController::class);

// 一行ずつで書くパターン(7つ書かないといけない)
// nameメソッドでルート情報に名前をつけることができる
// Route::get('contacts', [ ContactFormController::class, 'index'] )->name('contacts.index');

// グループ化で設定
Route::prefix('contacts')
// ログイン必須の設定
->middleware(['auth'])
// コントローラの設定
->controller(ContactFormController::class)
// 命名を共通化
->name('contacts.')
// アクションをグループ化
->group(function(){
  Route::get('/', 'index' )->name('index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';