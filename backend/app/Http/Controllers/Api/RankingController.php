<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\IRankingService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RankingController extends Controller
{
    private IRankingService $rankingService;

    public function __construct(IRankingService $rankingService)
    {
        $this->rankingService = $rankingService;
    }

    /**
     * トレーニング一括取得
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $body = $this->rankingService->indexRanking($request->query());
        return response()->success($body);
    }

}
