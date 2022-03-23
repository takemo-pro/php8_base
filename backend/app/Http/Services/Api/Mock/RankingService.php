<?php

namespace App\Http\Services\Api\Mock;

use App\Enums\Period;
use App\Enums\TrainingType;
use App\Http\Services\Api\IRankingService;
use App\Models\TrainingMenu;
use Illuminate\Support\Str;

class RankingService implements IRankingService
{
    public function indexRanking(array $params)
    {
        return [
            [
                'name' => "5分間のスクワット回数",
                'period' => Period::DAILY,
                'reference_date' => now()->format('Y-m-d H:i:s'),
                'data' => [
                    'top' => [
                        [
                            'rank' => 1,
                            'name' => 'username',
                            'value' => 50,
                        ],
                        [
                            'rank' => 2,
                            'name' => 'username',
                            'value' => 40,
                        ],
                        [
                            'rank' => 3,
                            'name' => 'username',
                            'value' => 30,
                        ],
                    ],
                    'me' => [
                        [
                            'rank' => 10,
                            'name' => 'username',
                            'value' => 10,
                        ],
                    ],
                    'higher' => [
                        [
                            'rank' => 8,
                            'name' => 'username',
                            'value' => 20,
                        ],
                        [
                            'rank' => 9,
                            'name' => 'username',
                            'value' => 15,
                        ],
                    ],
                    'lower' => [
                        [
                            'rank' => 11,
                            'name' => 'username',
                            'value' => 9,
                        ],
                        [
                            'rank' => 12,
                            'name' => 'username',
                            'value' => 8,
                        ],
                    ]
                ],
            ],
            [
                'name' => "5分間の腹筋の回数",
                'period' => Period::DAILY,
                'reference_date' => now()->format('Y-m-d H:i:s'),
                'data' => [
                    'top' => [
                        [
                            'rank' => 1,
                            'name' => 'username',
                            'value' => 50,
                        ],
                        [
                            'rank' => 2,
                            'name' => 'username',
                            'value' => 40,
                        ],
                        [
                            'rank' => 3,
                            'name' => 'username',
                            'value' => 30,
                        ],
                    ],
                    'me' => [
                        [
                            'rank' => 10,
                            'name' => 'username',
                            'value' => 10,
                        ],
                    ],
                    'higher' => [
                        [
                            'rank' => 8,
                            'name' => 'username',
                            'value' => 20,
                        ],
                        [
                            'rank' => 9,
                            'name' => 'username',
                            'value' => 15,
                        ],
                    ],
                    'lower' => [
                        [
                            'rank' => 11,
                            'name' => 'username',
                            'value' => 9,
                        ],
                        [
                            'rank' => 12,
                            'name' => 'username',
                            'value' => 8,
                        ],
                    ]
                ],
            ],
        ];
    }
}
