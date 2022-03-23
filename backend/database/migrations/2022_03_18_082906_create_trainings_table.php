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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignUuid('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreignId('training_menu_id')
                ->references('id')
                ->on('training_menus')
                ->cascadeOnDelete();
            $table->integer('set_count')->comment('設定回数');
            $table->integer('actual_count')->comment('実際にやった回数');
            $table->integer('set_time_sec')->comment('設定時間');
            $table->integer('actual_time_sec')->comment('実際にやった時間');
            $table->boolean('success_flag')->comment('成功したかどうか');
            $table->string('training_type')->comment('トレーニング種別');
            $table->dateTime('played_at')->comment("プレイ時刻");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
};
