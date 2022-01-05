<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengembalian extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'kode_pinjam' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
           
            ],
            'nim' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'nama' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'id_buku' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'judul' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'tanggal_peminjaman' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'jatuh_tempo' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'tanggal_kembali' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'telat' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'denda' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'bayar' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
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
            $this->forge->addPrimaryKey('kode_pinjam');
            $this->forge->createTable('pengembalian');
            
    }

    public function down()
    {
        //
        $this->forge->dropTable('pengembalian');
    }
}
