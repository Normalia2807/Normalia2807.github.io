<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
            'kode_pinjam' => 'PJ003',
            'tanggal_peminjaman' => '28/12/2021',
            'total_pinjam' => '4',
            'nim_mahasiswa' => 'C2055201008',
            'nama_mahasiswa' => 'Normalia',
            'alamat' => 'Jalan Kalibata 2A',
            'id_buku' => '01',
            'judul' => 'Pemograman Web Dengan Menggunakan PHP dan Framework Codeigniter',
            'pengarang' => 'Supono dan Vidiandry Putratama',
            'penerbit' => '	Deepublish',
            'jatuh_tempo' => '03/01/2022',
            'created_at' => Time::now()
            ],
            [
            'kode_pinjam' => 'PJ002',
            'tanggal_peminjaman' => '29/12/2021',
            'total_pinjam' => '3',
            'nim_mahasiswa' => 'C2055201013',
            'nama_mahasiswa' => 'Crisnawati',
            'alamat' => 'Jalan Kalbiata 1',
            'id_buku' => '03',
            'judul' => 'Komputer Forensik',	
            'pengarang' => 'Feri Sulianta',
            'penerbit' => 'Elex Media Komputindo',
            'jatuh_tempo' => '02/01/2022',
            'created_at' => Time::now()
            ],
            [
            'kode_pinjam' => 'PJ001',
            'tanggal_peminjaman' => '31/12/2021',
            'total_pinjam' => '4',
            'nim_mahasiswa' => 'C2055201014',
            'nama_mahasiswa' => 'Rahmaniah',
            'alamat' => 'Jalan Kecipir',
            'id_buku' => '02',
            'judul' => 'Jaringan Komputer',
            'pengarang' => 'Edy Victor Haryanto',
            'penerbit' => 'Andi',
            'jatuh_tempo' => '03/01/2022',
            'created_at' => Time::now()
            ]
            ];
            $this->db->table('peminjaman')->insertBatch($data);
    }
}
