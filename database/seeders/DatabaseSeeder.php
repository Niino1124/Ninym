<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        for ($i = 1; $i <= 20; $i++) {
        Seat::create([
            'name' => 'A' . $i,
            'status' => 'available'
        ]);
        }
    }
}
