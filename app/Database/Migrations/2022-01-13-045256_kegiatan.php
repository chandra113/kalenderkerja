<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama_kegiatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'anggaran' => [
                'type' => 'INT',
                'constraint' => 100
            ],
            'tanggal_kegiatan' => [
                'type' => 'DATE',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);


        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('kegiatan', TRUE);
    }

    public function down()
    {
        // menghapus tabel kegiatan
        $this->forge->dropTable('kegiatan');
    }
}
