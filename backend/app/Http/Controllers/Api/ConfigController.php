<?php

namespace App\Http\Controllers\Api;

use App\Models\Config;
use App\Models\PrivacyPolicy;
use App\Models\TermsOfService;

class ConfigController
{
    /**
     * 環境変数の取得
     */
    public function __invoke()
    {
        return response()->success(array_merge([
            //同意した利用規約ID
            'terms_of_service_id' => TermsOfService::query()->latest()->first()->id,
            //同意したプライバシーポリシーID
            'privacy_policy_id' => PrivacyPolicy::query()->latest()->first()->id,
        ],Config::first()->body));
    }
}
