<?php

namespace App\Http\Services\Api\Mock;

use App\Enums\TrainingType;
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
                'training_type' => TrainingType::Count,
                'success_flag' => true,
                'set_number' => 30,
                'actual_number' => 30,
                'set_time_sec' => null,
                'actual_time_sec' => 40,
                'played_at' => now()->format('Y-m-d H:i:s'),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Count,
                'success_flag' => true,
                'set_number' => 30,
                'actual_number' => 30,
                'set_time_sec' => null,
                'actual_time_sec' => 40,
                'played_at' => now()->format('Y-m-d H:i:s'),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Count,
                'success_flag' => true,
                'set_number' => 30,
                'actual_number' => 30,
                'set_time_sec' => null,
                'actual_time_sec' => 40,
                'played_at' => now()->format('Y-m-d H:i:s'),
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
        ];
    }

    public function createTraining(array $params)
    {
        return [
            'id' => 3,
            'user_id' => Str::orderedUuid()->toString(),
            'training_menu_id' => TrainingMenu::first()->id,
            'training_type' => TrainingType::Count,
            'success_flag' => true,
            'set_number' => 30,
            'actual_number' => 30,
            'set_time_sec' => null,
            'actual_time_sec' => 40,
            'played_at' => now()->format('Y-m-d H:i:s'),
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}
