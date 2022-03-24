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
                'set_count' => 30,
                'reserve_time' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Count,
                'set_count' => null,
                'reserve_time' => now(),
                'created_at' => now()->addDay(),
                'updated_at' => now()->addDay(),
            ],
            [
                'id' => 3,
                'user_id' => Str::orderedUuid()->toString(),
                'training_menu_id' => TrainingMenu::first()->id,
                'training_type' => TrainingType::Count,
                'set_count' => null,
                'reserve_time' => now(),
                'created_at' => now()->addDays(3),
                'updated_at' => now()->addDays(3),
            ],
        ];
    }

    public function createSchedule(array $params)
    {
        return [
            'id' => 1,
            'user_id' => Str::orderedUuid()->toString(),
            'training_menu_id' => TrainingMenu::first()->id,
            'set_count' => 30,
            'reserve_time' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function updateSchedule($scheduleId, array $params)
    {
        return [
            'id' => 1,
            'user_id' => Str::orderedUuid()->toString(),
            'training_menu_id' => TrainingMenu::first()->id,
            'set_count' => null,
            'reserve_time' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function deleteSchedule($scheduleId)
    {
        return;
    }
}
