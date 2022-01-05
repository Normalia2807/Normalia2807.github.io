<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "kode_pinjam";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode_pinjam', 'tanggal_peminjaman', 'total_pinjam', 'nim_mahasiswa','nama_mahasiswa','alamat',
        'id_buku','judul','pengarang','penerbit','jatuh_tempo'
    ];
}