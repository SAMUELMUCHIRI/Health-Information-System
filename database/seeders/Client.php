<?php

namespace Database\Seeders;

use App\Models\Client as ModelsClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Client extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsClient::factory()->count(10000)->create();
    }
}
