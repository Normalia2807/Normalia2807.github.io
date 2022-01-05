<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Profile';
        return view('dashboard/profile', $data);
    }
    public function buku()
    {
        $data['pageTitle'] = 'Daftar Buku';
        return view('dashboard/buku', $data);
    }
    public function mahasiswa()
    {
        $data['pageTitle'] = 'Anggota';
        return view('dashboard/mahasiswa', $data);
    }
    public function peminjaman()
    {
        $data['pageTitle'] = 'Peminjaman';
        return view('dashboard/peminjaman', $data);
    }
}
