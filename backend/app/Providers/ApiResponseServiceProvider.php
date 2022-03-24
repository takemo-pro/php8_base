<?php

namespace App\Providers;

use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ResponseFactory::macro('success',function ($data,int $code = Response::HTTP_OK) {
            return response()->json([
                'success'	 => true,
                'code'		 => $code,
                'status'	 => Response::$statusTexts[$code],
                'data'	 => $data,
            ],$code);
        });

        //入力地の何かしらが期待値と異なった場合。
        ResponseFactory::macro('validationError',function (ValidationException $e) {
            return response()->json([
                'success'	 => false,
                'code'		 => Response::HTTP_UNPROCESSABLE_ENTITY,
                'status'	 => Response::$statusTexts[Response::HTTP_UNPROCESSABLE_ENTITY],
                'data'	     => [
                    'errors' => $e->errors()
                ],
            ],Response::HTTP_UNPROCESSABLE_ENTITY);

        });

        ResponseFactory::macro('error',function (Throwable $e) {
            $code = $e instanceof HttpExceptionInterface ?
                $e->getCode() : 500;
            $message = $e instanceof HttpExceptionInterface ?
                $e->getMessage() : "an error occurred.";
            return response()->json([
                'success'	 => false,
                'code'		 => $code,
                'status'	 => Response::$statusTexts[$code],
                'data'	     => [
                    'errors' => [
                        'global' => [$message],
                    ]
                ],
            ],$code);
        });

        ResponseFactory::macro('debug',function (Throwable $e) {
            $code = $e instanceof HttpExceptionInterface ?
                $e->getCode() : 500;
            return response()->json([
                'success'	 => false,
                'code'		 => $e->getCode(),
                'status'	 => Response::$statusTexts[$code],
                'data'	     => [
                    'errors' => [
                        'global' => $e->getMessage()
                    ],
                    'trace' => $e->getTraceAsString(),
                ],
            ],$code);
        });
    }
}
