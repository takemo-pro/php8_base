<?php

namespace App\Http\Services\Api\Mock;

use App\Http\Services\Api\ITrainingService;
use App\Models\TrainingMenu;
use Illuminate\Support\Str;

class TrainingService implements ITrainingService
{
    public function indexTraining(array $params)
    {
        return [
            [
                'id' => 1,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'success_flag' => true,
                'set_count' => 30,
                'actual_count' => 30,
                'actual_time_ms' => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'success_flag' => true,
                'set_count' => 30,
                'actual_count' => 30,
                'actual_time_ms' => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'success_flag' => true,
                'set_count' => 30,
                'actual_count' => 30,
                'actual_time_ms' => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }

    public function createTraining(array $params)
    {
        return [
            [
                'id' => 3,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'success_flag' => true,
                'set_count' => 30,
                'actual_count' => 30,
                'actual_time_ms' => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
    }
}
