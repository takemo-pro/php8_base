<?php

namespace App\Http\Services\Api\Mock;

use App\Enums\TrainingType;
use App\Http\Services\Api\IScheduleService;
use App\Models\TrainingMenu;
use Illuminate\Support\Str;

class ScheduleService implements IScheduleService
{
    public function indexSchedule(array $params)
    {
        return [
            [
                'id' => 1,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Count,
                'set_number' => 30,
                'set_time_sec' => null,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Time,
                'set_number' => null,
                'set_time_sec' => 300,
                'created_at' => now()->addDay()->format('Y-m-d H:i:s'),
                'updated_at' => now()->addDay()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Time,
                'set_number' => null,
                'set_time_sec' => 420,
                'created_at' => now()->addDays(3)->format('Y-m-d H:i:s'),
                'updated_at' => now()->addDays(3)->format('Y-m-d H:i:s'),
            ],
        ];
    }

    public function createSchedule(array $params)
    {
        return [
            'id' => 1,
            'user_id' => Str::orderedUuid()->toString(),
            'training_menu_id' => TrainingMenu::first()->id,
            'training_type' => TrainingType::Count,
            'set_number' => 30,
            'set_time_sec' => null,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ];
    }

    public function updateSchedule($scheduleId, array $params)
    {
        return [
            'id' => 1,
            'user_id' => Str::orderedUuid()->toString(),
            'training_menu_id' => TrainingMenu::first()->id,
            'training_type' => TrainingType::Time,
            'set_number' => null,
            'set_time_sec' => 300,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ];
    }

    public function deleteSchedule($scheduleId)
    {
        return;
    }
}
