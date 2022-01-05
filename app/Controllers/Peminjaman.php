<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;

class Peminjaman extends BaseController
{
    protected $peminjaman;
    function __construct()
    {
        $this->peminjaman = new PeminjamanModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Peminjaman';
        $data['peminjaman'] = $this->peminjaman->findAll();
        return view('dashboard/peminjaman', $data);
    }
    public function create()
    {

        $data = [
            'pageTitle' => 'Input Data Peminjaman',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/peminjaman_create', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'kode_pinjam' => [
                'rules' => 'required|is_unique[peminjaman.kode_pinjam]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Kode_pinjam sudah terdaftar'
                ]
            ],
            'tanggal_peminjaman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'total_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nim_mahasiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                 ]
            ],
            'nama_mahasiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
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
                        'jatuh_tempo' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} Harus diisi'
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->peminjaman->insert([
            'kode_pinjam' => $this->request->getVar('kode_pinjam'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'total_pinjam' => $this->request->getVar('total_pinjam'),
            'id_buku' => $this->request->getVar('id_buku'),
            'judul' => $this->request->getVar('judul'),
            'jatuh_tempo' => $this->request->getVar('jatuh_tempo')
            ]);
            session()->setFlashdata('message', 'Tambah Data Peminjaman Berhasil');
            return redirect()->to('/peminjaman');
     }
     public function view($kode_pinjam)
     {
     $dataPeminjaman = $this->peminjaman->find($kode_pinjam);
     if (empty($dataPeminjaman)) {
     throw new 
     \CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman
     Tidak ditemukan !');
     }
     $data['pageTitle'] = 'Data Peminjaman';
     $data['peminjaman'] = $dataPeminjaman;
     return view('dashboard/peminjaman_view', $data);
     }
     function edit($kode_pinjam)
     {
     $dataPeminjaman = $this->peminjaman->find($kode_pinjam);
     if (empty($dataPeminjaman)) {
     throw new 
     \CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman 
     Tidak ditemukan !');
     }
     $data['pageTitle'] = 'Tambah Data Pengembalian';
     $data['peminjaman'] = $dataPeminjaman;
     return view('dashboard/peminjaman_edit', $data);
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
    'tanggal_peminjaman' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    'total_pinjam' => [
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
    'jatuh_tempo' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
    ],
    ])) {
    session()->setFlashdata('error', $this->validator->listErrors());
    return redirect()->back();
    }
    $this->peminjaman->update($kode_pinjam, [
    'kode_pinjam' => $this->request->getVar('kode_pinjam'),
    'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
    'total_pinjam' => $this->request->getVar('total_pinjam'),
    'id_buku' => $this->request->getVar('id_buku'),
    'judul' => $this->request->getVar('judul'),
    'jatuh_tempo' => $this->request->getVar('jatuh_tempo'),
    
    ]);
    session()->setFlashdata('message', 'Update Data Peminjaman
    Berhasil');
    return redirect()->to('/peminjaman');
    }
    function delete($kode_pinjam)
    {
        $dataPeminjaman = $this->peminjaman->find($kode_pinjam);
        if (empty($dataPeminjaman)) {
        throw new 
        \CodeIgniter\Exceptions\PageNotFoundException('Data Peminjaman 
        Tidak ditemukan !');
        }
        $this->peminjaman->delete($kode_pinjam);
        session()->setFlashdata('message', 'Delete Data peminjaman
        Berhasil');
        return redirect()->to('/peminjaman');
    }
        
}
