<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BukuSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
            'id_buku' => '01',
            'judul' => 'Teknologi Informasi',
             'pengarang' => 'Irvan Gunawan',
            'penerbit' => 'Elazabet',
            'tahun' => '2011',
            'created_at' => Time::now()
            ],
            [
            'id_buku' => '02',
            'judul' => 'Sistem Operasi',
            'pengarang' => 'Sisy',
            'penerbit' => 'ajis',
            'tahun' => '2012',
            'created_at' => Time::now()
            ],
            [
            'id_buku' => '03',
            'judul' => 'Sistem Informasi',
            'pengarang' => 'Ahmad Baihaqi',
            'penerbit' => 'Bibil',
            'tahun' => '2015',
            'created_at' => Time::now()
            ]
            ];
            $this->db->table('buku')->insertBatch($data);
            
    }
}
