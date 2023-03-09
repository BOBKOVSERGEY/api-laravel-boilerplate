<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Ping;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MessageResource;
use App\Http\Responses\V1\MessageResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ShowController extends Controller
{
    public function __invoke(Request $request): Responsable
    {
        return new MessageResponse(
            data: [
                'message' => 'Service Online'
            ]
        );
    }
}
