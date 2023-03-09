<?php

declare(strict_types=1);

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;

use Illuminate\Http\Resources\Json\JsonResource;

final class MessageResource extends JsonResource
{
    /**
     * @property-read array{message: string} $resource;
     */
    public function toArray(Request $request): array
    {
        return [
          'message' => $this->resource['message'],
        ];
    }
}
