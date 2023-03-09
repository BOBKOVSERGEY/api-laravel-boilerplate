<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(
            [
                'name' => 'Sergey Bobkov',
                'email' => 'sergey_bobkov@inbox.ru'
            ]
        );
    }
}
