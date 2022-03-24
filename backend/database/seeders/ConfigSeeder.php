<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Config::count() < 1){
            Config::create([
                'body->voice_version' => 1.00,
                'body->character_version' => 1.00,
                'body->app_version' => 1.00,
                'body->calorie_coefficient' => 1.5,
            ]);
        }
    }
}
