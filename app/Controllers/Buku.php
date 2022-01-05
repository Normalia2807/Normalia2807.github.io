<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $buku;
    function __construct()
    {
        $this->buku = new BukuModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Buku';
        $data['buku'] = $this->buku->findAll();
        return view('dashboard/buku', $data);
    }
    public function create()
    {

        $data = [
            'pageTitle' => 'Input Data Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/buku_create', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'id_buku' => [
                'rules' => 'required|is_unique[buku.id_buku]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'ID_Buku sudah terdaftar'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'pengarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'Yang Anda Pilih Bukan Gambar',
                    'mime_in' => 'Yang Anda Pilih Bukan Gambar'
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $filesampul = $this->request->getFile('sampul');

        //cek dulu
        if ($filesampul->getError() == 4) {
            $namasampul = 'otomatis.jpg';
        } else {
            //bikin nama sampul random
            $namasampul = $filesampul->getRandomName();
            //pindahkan file ke folder img
            $filesampul->move('sampul', $namasampul);

        }
        $this->buku->insert([
            'id_buku' => $this->request->getVar('id_buku'),
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun' => $this->request->getVar('tahun'),
            'sampul' => $namasampul,
            ]);
            session()->setFlashdata('message', 'Tambah Data Buku Berhasil');
            return redirect()->to('/buku');
     }       
     function edit($id_buku)
            {
            $dataBuku = $this->buku->find($id_buku);
            if (empty($dataBuku)) {
            throw new 
            \CodeIgniter\Exceptions\PageNotFoundException('Data Buku 
            Tidak ditemukan !');
            }
            $data['pageTitle'] = 'Daftar Peminjaman';
            $data['buku'] = $dataBuku;
            return view('dashboard/buku_edit', $data);
     }
     public function update($id_buku)
     {
     if (!$this->validate([
     'judul' => [
     'rules' => 'required',
     'errors' => [
     'required' => '{field} Harus diisi'
     ]
     ],
     'pengarang' => [
     'rules' => 'required',
     'errors' => [
     'required' => '{field} Harus diisi'
     ]
     ],
     'penerbit' => [
     'rules' => 'required',
     'errors' => [
     'required' => '{field} Harus diisi'
     ]
     ],
     'tahun' => [
     'rules' => 'required',
     'errors' => [
     'required' => '{field} Harus diisi'
     ]
     ],
     ])) {
     session()->setFlashdata('error', $this->validator->listErrors());
     return redirect()->back();
     }
     $this->buku->update($id_buku, [
     'judul' => $this->request->getVar('judul'),
     'pengarang' => $this->request->getVar('pengarang'),
     'penerbit' => $this->request->getVar('penerbit'),
     'tahun' => $this->request->getVar('tahun'),
     ]);
     session()->setFlashdata('message', 'Update Data Buku 
    Berhasil');
     return redirect()->to('/buku');
     }
     function delete($id_buku)
    {
        $dataBuku = $this->buku->find($id_buku);
        if (empty($dataBuku)) {
        throw new 
        \CodeIgniter\Exceptions\PageNotFoundException('Data Buku 
        Tidak ditemukan !');
        }
        $this->buku->delete($id_buku);
        session()->setFlashdata('message', 'Delete Data buku 
        Berhasil');
        return redirect()->to('/buku');
    }
    public function view($id_buku)
    {
    $dataBuku = $this->buku->find($id_buku);
    if (empty($dataBuku)) {
    throw new 
    \CodeIgniter\Exceptions\PageNotFoundException('Data Buku
    Tidak ditemukan !');
    }
    $data['pageTitle'] = 'Data Buku';
    $data['buku'] = $dataBuku;
    return view('dashboard/buku_view', $data);
    }

}
