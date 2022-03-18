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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('icon_type')->default("0")->comment("アイコンのタイプ");
            $table->string('name')->comment('ユーザー名');
            $table->string('gender')->comment("性別");
            $table->string('data_transfer_token')->nullable()->comment("データ移行コード");
            $table->dateTime('last_synced_at')->comment('最終同期時刻');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
