<?php

namespace Database\Factories;

use App\Models\Pengalaman;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pengalaman>
 */
class PengalamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judulOptions = [
            'Magang Web Developer di Telkom',
            'Juara 1 Hackathon Nasional',
            'Ketua Himpunan Mahasiswa',
            'Freelance UI/UX Designer',
            'Volunteer Social Project',
            'Asisten Laboratorium Komputer'
        ];

        $gambars = [
            'thispersondoesnotexist1.jpg',
            'thispersondoesnotexist2.jpg',
            'thispersondoesnotexist3.jpg',
            'thispersondoesnotexist4.jpg',
            'thispersondoesnotexist5.jpg',
            'thispersondoesnotexist6.jpg',
            'thispersondoesnotexist7.jpg',
            'thispersondoesnotexist8.jpg',
            'thispersondoesnotexist9.jpg',
            'thispersondoesnotexist10.jpg'
        ];

        return [
            'id_user' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'judul'        => fake()->randomElement($judulOptions),
            'deskripsi'    => fake()->sentence(10),
            'waktu'        => fake()->time('H:i:s'), 
            'gambar'       => fake()->randomElement($gambars),
        ];
    }
}