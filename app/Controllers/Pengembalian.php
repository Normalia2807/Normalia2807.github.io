<?php

namespace App\Controllers;

use App\Models\PengembalianModel;

class Pengembalian extends BaseController
{
    protected $pengembalian;
    function __construct()
    {
        $this->pengembalian = new PengembalianModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Pengembalian';
        $data['pengembalian'] = $this->pengembalian->findAll();
        return view('dashboard/pengembalian', $data);
    }
    public function create()
    {

        $data = [
            'pageTitle' => 'Input Data Pengembalian',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/pengembalian_create', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'kode_pinjam' => [
                'rules' => 'required|is_unique[pengembalian.kode_pinjam]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Kode_pinjam sudah terdaftar'
                ]
            ],
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                 ]
            ],
            'id_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
                'tanggal_peminjaman' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                ]
             ],
                    'jatuh_tempo' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus diisi'
                ]
            ],
                        'tanggal_kembali' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} Harus diisi'
                ]
            ],
                    'telat' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus diisi'
                ]
            ],
                        'denda' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} Harus diisi'
                ]
            ],
                        'bayar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} Harus diisi'
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->pengembalian->insert([
            'kode_pinjam' => $this->request->getVar('kode_pinjam'),
            'id_buku' => $this->request->getVar('id_buku'),
            'judul' => $this->request->getVar('judul'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'jatuh_tempo' => $this->request->getVar('jatuh_tempo'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'telat' => $this->request->getVar('telat'),

            ]);
            session()->setFlashdata('message', 'Tambah Data Pengembalian Berhasil');
            return redirect()->to('/pengembalian');
     }
     public function view($kode_pinjam)
     {
     $dataPengembalian = $this->pengembalian->find($kode_pinjam);
     if (empty($dataPengembalian)) {
     throw new 
     \CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
     Tidak ditemukan !');
     }
     $data['pageTitle'] = 'Data Pengembalian';
     $data['pengembalian'] = $dataPengembalian;
     return view('dashboard/pengembalian_view', $data);
     }
     function edit($kode_pinjam)
     {
     $dataPengembalian = $this->pengembalian->find($kode_pinjam);
     if (empty($dataPengembalian)) {
     throw new 
     \CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian 
     Tidak ditemukan !');
     }
     $data['pageTitle'] = 'Edit Data Pengembalian';
     $data['pengembalian'] = $dataPengembalian;
     return view('dashboard/pengembalian_edit', $data);
    }
    public function update($kode_pinjam)
    {
    if (!$this->validate([
    'kode_pinjam' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'id_buku' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'judul' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'tanggal_peminjaman' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'jatuh_tempo' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'tanggal_kembali' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'telat' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    ])) {
    session()->setFlashdata('error', $this->validator->listErrors());
    return redirect()->back();
    }
    $this->pengembalian->update($kode_pinjam, [
    'kode_pinjam' => $this->request->getVar('kode_pinjam'),
    'id_buku' => $this->request->getVar('id_buku'),
    'judul' => $this->request->getVar('judul'),
    'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
    'jatuh_tempo' => $this->request->getVar('jatuh_tempo'),
    'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
    'telat' => $this->request->getVar('telat'),
    
    ]);
    session()->setFlashdata('message', 'Update Data Pengembalian
    Berhasil');
    return redirect()->to('/pengembalian');
    }
    function delete($kode_pinjam)
    {
        $dataPengembalian = $this->pengembalian->find($kode_pinjam);
        if (empty($dataPengembalian)) {
        throw new 
        \CodeIgniter\Exceptions\PageNotFoundException('Data Pengembalian
        Tidak ditemukan !');
        }
        $this->pengembalian->delete($kode_pinjam);
        session()->setFlashdata('message', 'Delete Data Pengembalian
        Berhasil');
        return redirect()->to('/pengembalian');
    }
        

}