<?php

declare(strict_types=1);

namespace App\Http\Responses\Concerns;

use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use Symfony\Component\HttpFoundation\Response;

trait ReturnsJsonResponse
{
    public function __construct(
        private readonly array $data,
        private readonly Http $status = Http::OK,
    )
    {
    }
    public function toResponse($request): Response
    {
        return new JsonResponse(
            data: $this->data,
            status: $this->status->value,
            headers: [
                'Content-Type' => 'application/vnd+api.json'
            ]
        );
    }
}
