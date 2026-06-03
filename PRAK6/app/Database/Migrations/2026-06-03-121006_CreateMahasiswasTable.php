<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            "nama_lengkap" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "nim" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "profile_pic" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            "asal_prodi" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "hobi" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "skill" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswas');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswas');
    }
}
