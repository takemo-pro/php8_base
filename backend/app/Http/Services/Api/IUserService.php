<?php

namespace App\Http\Services\Api;

interface IUserService
{
    public function createUser(array $params);
    public function updateUser($userId,array $params);
}
