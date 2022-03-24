<?php

namespace Database\Seeders;

use App\Models\TermsOfService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermsOfServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(TermsOfService::count() <= 3){
            TermsOfService::factory()->count(3)->create();
        }
    }
}
