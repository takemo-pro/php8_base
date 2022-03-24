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
        return response()->success([
            //ボイスファイルのバージョン, 新しいものがあれば更新?
            'voice_version' => Config::first()->body['voice_version'],
            //キャラ画像のバージョン, 新しいものがあれば更新?
            'character_image_version' => Config::first()->body['character_image_version'],
            //アプリバージョン。高ければ更新させる
            'app_version' => Config::first()->body['app_version'],
            //カロリー係数 (トレーニングの種別ごとにも係数ありそうだけど。。)
            'calorie_coefficient' => Config::first()->body['calorie_coefficient'],
            //同意した利用規約ID
            'terms_of_service_id' => TermsOfService::query()->latest()->first()->id,
            //同意したプライバシーポリシーID
            'privacy_policy_id' => PrivacyPolicy::query()->latest()->first()->id,
        ]);
    }
}
