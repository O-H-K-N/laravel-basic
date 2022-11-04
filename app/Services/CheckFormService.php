<?php

namespace App\Services;

class CheckFormService
{
  // 性別の判別
  public static function checkGender($data){
    $gender = $data->gender == 0 ? '男性' : '女性';

    return $gender;
  }

  // 年齢の判別
  public static function checkAge($data){
    if($data->age === 1){ $age = '〜19歳'; }
    if($data->age === 2){ $age = '20〜29歳'; }
    if($data->age === 3){ $age = '30〜39歳'; }
    if($data->age === 4){ $age = '40〜49歳'; }
    if($data->age === 5){ $age = '50〜59歳'; }
    if($data->age === 6){ $age = '60歳〜'; }

    return $age;
  }

}