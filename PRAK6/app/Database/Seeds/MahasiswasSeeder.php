<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lengkap' => 'Rian Hidayat',
                'nim'          => '210101234',
                'profile_pic'  => 'rian.jpg',
                'asal_prodi'   => 'Teknik Informatika',
                'hobi'         => 'Coding, Membaca',
                'skill'        => 'PHP, JavaScript, Laravel'
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'nim'          => '210101235',
                'profile_pic'  => null,
                'asal_prodi'   => 'Sistem Informasi',
                'hobi'         => 'Desain Grafis, Gaming',
                'skill'        => 'UI/UX, Figma, Adobe Illustrator'
            ],
            [
                'nama_lengkap' => 'Budi Santoso',
                'nim'          => '210101236',
                'profile_pic'  => 'budi.png',
                'asal_prodi'   => 'Teknik Komputer',
                'hobi'         => 'Fotografi',
                'skill'        => 'Networking, Cisco, IoT'
            ]
        ];

        $this->db->table('mahasiswas')->insertBatch($data);
    }
}
