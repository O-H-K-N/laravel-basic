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
}
