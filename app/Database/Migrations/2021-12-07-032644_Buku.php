<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_buku' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
           
            ],
            'judul' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'pengarang' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'penerbit' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'tahun' => [
            'type' => 'CHAR',
            'constraint' => '4',
            ],
            'sampul' => [
            'type' => 'VARCHAR',
            'constraint' => '500',
            ],
            'qty' => [
            'type' => 'INT',
            'constraint' => '11',
            ],
            'keluar' => [
            'type' => 'INT',
            'constraint' => '11',
            ],
            'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
            ],
            'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
            ]
            ]);
            $this->forge->addPrimaryKey('id_buku');
            $this->forge->createTable('buku');
            
    }

    public function down()
    {
        //
        $this->forge->dropTable('buku');
    }
}
