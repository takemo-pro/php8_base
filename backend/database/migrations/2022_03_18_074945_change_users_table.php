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
        Schema::table('users',function(Blueprint $table){
            $table->foreignId('terms_of_service_id')
                ->references('id')
                ->on('terms_of_services');
            $table->foreignId('privacy_policy_id')
                ->references('id')
                ->on('privacy_policies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropConstrainedForeignId('terms_of_service_id');
            $table->dropConstrainedForeignId('privacy_policy_id');
        });
    }
};
