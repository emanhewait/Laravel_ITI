<?php

namespace Database\Seeders;

use App\Models\Postlab3;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Postlab3::factory()->count(50)->create();
    }
}
