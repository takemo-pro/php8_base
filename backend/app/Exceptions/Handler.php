<?php

namespace App\Exceptions;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //API 例外処理共通化
        $this->renderable(function(Throwable $e,Request $request){
            if(!$request->is('api/*')){
                return;
            }

            if($e instanceof NotFoundHttpException){
                return;
            }

            if($e instanceof ValidationException){
                return response()->validationError($e);
            }

            if(env('app_env') !== 'production'){
                return response()->debug($e);
            }

            return response()->error($e);
        });
    }
}
