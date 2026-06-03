<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengalamansTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_mahasiswa' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'waktu' => [
                'type' => 'TIME'
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey(
            'id_mahasiswa',
            'mahasiswas',
            'id',
            'RESTRICT',
            'CASCADE',
            'fk_mahasiswas_id'
        );
        $this->forge->createTable('pengalamans');
    }

    public function down()
    {
        $this->forge->dropTable('pengalamans');
    }
}
