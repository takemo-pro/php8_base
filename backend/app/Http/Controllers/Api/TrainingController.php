<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Training\StoreRequest;
use App\Http\Services\Api\ITrainingService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TrainingController extends Controller
{
    private ITrainingService $trainingService;

    public function __construct(ITrainingService $trainingService)
    {
        $this->trainingService = $trainingService;
    }

    /**
     * トレーニング一括取得
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $body = $this->trainingService->indexTraining($request->query());
        return response()->success($body);
    }

    /**
     * トレーニング登録
     *
     * @param StoreRequest $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $body = $this->trainingService->createTraining($request->validated());
        return response()->success($body);
    }
}
