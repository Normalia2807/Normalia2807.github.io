<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Buku extends BaseController
{
    protected $buku;
    function __construct()
    {
        $this->buku = new MahasiswaModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Buku';
        $data['buku'] = $this->buku->findAll();
        return view('dashboard/buku', $data);
    }
}