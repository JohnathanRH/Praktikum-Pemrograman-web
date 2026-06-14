<?php

namespace Database\Seeders;

use App\Models\Pengalaman;
use App\Models\User;
use Illuminate\Database\Seeder;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::count() === 0) {
            $this->command->error("Error: No users found in 'users' table. Run DatabaseSeeder first!");
            return;
        }

        Pengalaman::factory(50)->create();

        $this->command->info("Successfully seeded 50 experience records via Factory!");
    }
}