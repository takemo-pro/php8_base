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
        Schema::create('training_menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("name");
            $table->foreignId("product_id")
                ->references("id")
                ->on("products")
                ->cascadeOnDelete();
            $table->string("description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_menus');
    }
};
