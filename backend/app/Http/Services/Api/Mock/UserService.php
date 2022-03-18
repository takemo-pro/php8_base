<?php

namespace App\Http\Services\Api\Mock;

use App\Enums\Gender;
use App\Enums\IconType;
use App\Http\Services\Api\IUserService;
use Illuminate\Support\Str;

class UserService implements IUserService
{
    public function createUser(array $params)
    {
        return [
            'id' => (string) Str::orderedUuid(),
            'name' => "キン肉マン",
            'gender' => Gender::Man,
            'icon_type' => IconType::Man,
            'data_transfer_token' => "",
            'last_synced_at' => now()->format('Y-m-d H:i:s'),
        ];
    }

    public function updateUser($userId,array $params)
    {
        return [
            'id' => (string) Str::orderedUuid(),
            'name' => "キン肉マン",
            'gender' => Gender::Man,
            'icon_type' => IconType::Man,
            'data_transfer_token' => "",
            'last_synced_at' => now()->format('Y-m-d H:i:s'),
        ];
    }
}

