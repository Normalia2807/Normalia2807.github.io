<?php

namespace App\Models;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
    protected $table = "pengembalian";
    protected $primaryKey = "kode_pinjam";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kode_pinjam', 'nim', 'nama', 'id_buku','judul','tanggal_peminjaman',
        'jatuh_tempo','tanggal_kembali','telat','denda','bayar'
    ];
}