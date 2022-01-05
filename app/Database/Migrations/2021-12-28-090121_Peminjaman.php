<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'kode_pinjam' => [
            'type' => 'VARCHAR',
            'constraint' => 11,
           
            ],
            'tanggal_peminjaman' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'total_pinjam' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'nim_mahasiswa' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'nama_mahasiswa' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
             ],
            'alamat' => [
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
            'pengarang' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'penerbit' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'jatuh_tempo' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
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
            $this->forge->addPrimaryKey('kode_pinjam');
            $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        //
        $this->forge->dropTable('peminjaman');
    }
}
