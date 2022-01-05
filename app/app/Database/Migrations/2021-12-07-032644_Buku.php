<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_buku' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
           
            ],
            'sampul_buku' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
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
            'qty' => [
            'type' => 'INTEGER',
            'constraint' => '11',
            ],
            'keluar' => [
            'type' => 'INTEGER',
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

