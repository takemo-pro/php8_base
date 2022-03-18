<?php

namespace App\Models\Traits;

use App\Models\AppVersion;

trait AppVersionLogic
{
    /**
     * 最新バージョン取得
     *
     * @return AppVersion
     */
    public static function currentVersion() :AppVersion
    {
        return self::query()->latest('created_at')->first();
    }
}
