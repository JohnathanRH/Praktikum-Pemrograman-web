<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buku; // Imported the Buku model
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
        // Creates your default user
        User::factory()->create([
            'name' => 'M. Rizki Dinar',
            'email' => 'a@a.com',
        ]);

        Buku::factory(15)->create();
    }
}