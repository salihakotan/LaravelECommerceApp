<?php

namespace App\Http\Controllers;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Test", version="3.0.1")
 * @OA\SecurityScheme(
 *      securityScheme="X-Api-Key",
 *      in="header",
 *      name="X-Api-Key",
 *      type="apiKey",
 *  ),
 * @OA\OpenApi(
 *      security={
 *          {"apiKeyAuth": {}}
 *      }
 *  )
 *
 *
 */
abstract class Controller
{
    //
}
