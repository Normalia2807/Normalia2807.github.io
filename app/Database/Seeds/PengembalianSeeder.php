<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
            'kode_pinjam' => 'PJ001',
            'nim' => 'C2055201014',
             'nama' => 'Rahmaniah',
            'id_buku' => '02',
            'judul' => 'Jaringan Komputer',
            'tanggal_peminjaman' => '31-12-2021',
            'jatuh_tempo' => '06-01-2022',
            'tanggal_kembali' => '08-01-2022',
            'telat' => '2 hari',
            'denda' => '2000',
            'bayar' => '2000',
            'created_at' => Time::now()
            ],
            [
            'kode_pinjam' => 'PJ002',
            'nim' => 'C2055201013',
             'nama' => 'Crisnawati',
            'id_buku' => '03',
            'judul' => 'Komputer Forensik',
            'tanggal_peminjaman' => '31-12-2021',
            'jatuh_tempo' => '06-01-2022',
            'tanggal_kembali' => '08-01-2022',
            'telat' => '2 hari',
            'denda' => '2000',
            'bayar' => '2000',
            'created_at' => Time::now()
            ],
            [
            'kode_pinjam' => 'PJ003',
            'nim' => 'C2055201008',
             'nama' => 'Normalia',
            'id_buku' => '01',
            'judul' => 'Pemograman Web Dengan Menggunakan PHP dan Framework Codeigniter',
            'tanggal_peminjaman' => '31-12-2021',
            'jatuh_tempo' => '06-01-2022',
            'tanggal_kembali' => '08-01-2022',
            'telat' => '2 hari',
            'denda' => '2000',
            'bayar' => '2000',
            'created_at' => Time::now()
            ]
            ];
            $this->db->table('pengembalian')->insertBatch($data);
            
    }
}
