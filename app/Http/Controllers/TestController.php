<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// モデルの読み込み
use App\Models\Test;

class TestController extends Controller
{
    // indexアクションを設定
    public function index()
    {
        // 全件取得
        $values = Test::all();

        // デバッガー：処理を止め内容を確認できる
        // dd($values);

        // compact関数でView側に変数を渡すと楽
        return view('tests.test', compact('values'));
    }
}
