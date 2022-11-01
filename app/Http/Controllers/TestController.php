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
        /* Eloquent(エロクアント) */
        // 全件取得
        $values = Test::all();

        // DB内のデータ数を取得
        $count = Test::count();

        // 指定したidのデータを取得
        $first = Test::findOrFail(1);

        // 条件指定したデータを取得
        $whereBBB = Test::where('text', '=', 'bbb')->get();

        // デバッガー：処理を止め内容を確認できる
        dd($values, $count, $first, $whereBBB);

        // compact関数でView側に変数を渡すと楽
        return view('tests.test', compact('values'));
    }
}
