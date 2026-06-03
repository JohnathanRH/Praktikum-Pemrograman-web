<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PengalamanSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        $mahasiswaIds = $this->db->table('mahasiswas')->select('id')->get()->getResultArray();

        if (empty($mahasiswaIds)) {
            echo "Error: No students found in 'mahasiswas' table. Run MahasiswaSeeder first!\n";
            return;
        }
        $idList = array_column($mahasiswaIds, 'id');

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

        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'id_mahasiswa' => $faker->randomElement($idList),
                'judul'        => $faker->randomElement($judulOptions),
                'deskripsi'    => $faker->sentence(10),
                'waktu'        => $faker->time('H:i:s'), // exact as TIME type format
                'gambar'       => $faker->randomElement($gambars),
            ];
        }

        $this->db->table('pengalamans')->insertBatch($data);
    }
}
