<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
  use HasFactory;

  // モデルの$fillableプロパティを使用して複数代入を可能にする
  protected $fillable = [
    'name',
    'title',
    'email',
    'url',
    'gender',
    'age',
    'contact',
    'caution',
  ];

  // 検索クエリの処理を行うスコープ
  public function scopeSearch($query, $search)
  {
    if($search !== null) {
      // 全角スペースを半角に変換
      $search_split = mb_convert_kana($search, 's');
      // 空白で区切り配列化
      $search_split2 = preg_split('/[\s]+/', $search_split);

      foreach($search_split2 as $value) {
        // 一つ一つwhere句を付与する
        $query->where('name', 'like', '%' .$value. '%');
      }
    }
    return $query;
  }

}
