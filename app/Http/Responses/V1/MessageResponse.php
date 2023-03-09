<?php

declare(strict_types=1);

namespace App\Http\Responses\V1;

use App\Http\Responses\Concerns\ReturnsJsonResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use Symfony\Component\HttpFoundation\Response;

final class MessageResponse implements Responsable
{

    use ReturnsJsonResponse;


}
