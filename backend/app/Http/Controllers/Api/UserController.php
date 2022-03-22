<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Services\Api\IUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private IUserService $userService;

    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(StoreRequest $request)
    {
        return $this->userService->createUser($request->validated());
    }

    public function update($userId,UpdateRequest $request)
    {
        return $this->userService->updateUser($userId,$request->validated());
    }
}
