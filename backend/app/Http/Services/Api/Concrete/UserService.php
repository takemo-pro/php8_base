<?php

namespace App\Http\Services\Api\Concrete;

use App\Enums\Gender;
use App\Http\Services\Api\IUserService;
use App\Models\User;
use Illuminate\Support\Str;

class UserService implements IUserService
{
    public function createUser(array $params)
    {
        /** @var User $newUser */
        $newUser = User::query()->create([
            "id" => (string) Str::orderedUuid(),
            "name" => $params["name"],
            "icon_type" => $params["icon_type"],
            "gender" => $params["gender"] ?? Gender::Other,
            "last_synced_at" => now(),
        ]);
        return array_merge($newUser->toArray(),[
            'token' => $newUser->createToken('user')->plainTextToken
        ]);
    }

    public function updateUser(array $params)
    {
        return auth('api')->user()->update([
            "name" => $params["name"],
            "gender" => $params["gender"] ?? Gender::Other,
            "last_synced_at" => now(),
        ]);
    }
}

