<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Schedule\StoreRequest;
use App\Http\Requests\Api\Schedule\UpdateRequest;
use App\Http\Services\Api\IScheduleService;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ScheduleController extends Controller
{
    private IScheduleService $scheduleService;

    public function __construct(IScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
    }

    /**
     * スケジュール一括取得
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->scheduleService->indexSchedule($request->query());
    }

    /**
     * スケジュール登録
     *
     * @param StoreRequest $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        return $this->scheduleService->createSchedule($request->validated());
    }

    /**
     * スケジュール更新
     *
     * @param UpdateRequest $request
     * @param $scheduleId
     * @return Response
     */
    public function update(UpdateRequest $request,$scheduleId)
    {
        return $this->scheduleService->updateSchedule($scheduleId,$request->validated());
    }

    /**
     * スケジュール削除
     *
     * @param $scheduleId
     * @return Response
     */
    public function destroy($scheduleId)
    {
        return $this->scheduleService->deleteSchedule($scheduleId);
    }
}
