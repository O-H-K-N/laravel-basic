<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('contact_forms', function (Blueprint $table) {
      // after：要素'名前'の後に追加
      $table->string('title', 50)->after('name');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('contact_forms', function (Blueprint $table) {
      $table->dropColumn('title');
    });
  }
};
