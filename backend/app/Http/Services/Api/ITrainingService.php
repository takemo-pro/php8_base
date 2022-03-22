<?php

namespace App\Http\Services\Api;

interface ITrainingService
{
    public function indexTraining(array $params);
    public function createTraining(array $params);
}
