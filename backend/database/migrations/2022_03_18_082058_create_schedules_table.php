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
        Schema::create('schedules', function (Blueprint $table) {
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
            $table->dateTime('reserve_time')->comment("予約時間");
            $table->integer('set_count')->nullable()->comment('設定回数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
