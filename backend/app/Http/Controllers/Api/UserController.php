<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiMode;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Services\Api\IUserService;

class UserController extends Controller
{
    private IUserService $userService;

    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth:api')->only('update');
    }

    public function store(StoreRequest $request)
    {
        $body = $this->userService->createUser($request->validated());
        return response()->success($body);
    }

    public function update(UpdateRequest $request,$userId)
    {
        $body = $this->userService->updateUser($request->validated());
        return response()->success($body);
    }
}
