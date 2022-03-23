<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OpenApiController extends Controller
{
    public function __invoke()
    {
        return response(storage_path('api-docs/openapi.yaml'),200,[
            'Content-Type' => 'application/x-yaml'
        ]);
    }
}
