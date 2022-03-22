<?php

namespace App\Http\Services\Api;

interface IScheduleService
{
    public function indexSchedule(array $params);
    public function createSchedule(array $params);
    public function updateSchedule($scheduleId,array $params);
    public function deleteSchedule($scheduleId);
}
