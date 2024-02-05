<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cama;
use Illuminate\Database\Seeder;

class CamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Cama::factory(25)->create();
    }
}
