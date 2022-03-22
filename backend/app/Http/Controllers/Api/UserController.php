<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiMode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Services\Api\IUserService;

class UserController extends Controller
{
    private IUserService $userService;

    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
        if(config('app.api_mode') === ApiMode::Concrete){
            $this->middleware('auth:api')->only('update');
        }
    }

    public function create(CreateUserRequest $request)
    {
        $body = $this->userService->createUser($request->validated());
        return response()->json($body);
    }

    public function update(UpdateUserRequest $request)
    {
        $body = $this->userService->updateUser($request->validated());
        return response()->json($body);
    }
}
