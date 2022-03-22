<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\TrainingMenu;
use Illuminate\Console\Command;

class UpdateOrCreateMaster extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:update_master';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'masterデータの更新';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->updateProducts();
        $this->updateTrainingMenus();
    }

    private function updateProducts()
    {
        $products = require(storage_path('master/products.php'));
        array_map(fn($product)=>Product::updateOrCreate($product),$products);
    }

    private function updateTrainingMenus()
    {
        $training_menus = require(storage_path('master/training_menus.php'));
        array_map(fn($menu)=>TrainingMenu::updateOrCreate($menu),$training_menus);
    }
}
