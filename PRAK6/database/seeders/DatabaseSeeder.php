<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'M. Rizki Dinar',
            'email' => 'a@a.com',
            'nim' => '2410817310020',
            'profile_pic' => 'thispersondoesnotexist1.jpg',
            'asal_prodi' => 'Teknologi Informasi',
            'hobi' => 'Coding sampai pagi',
            'skill' => 'Laravel, Livewire, Tailwind',
        ]);
    }
}