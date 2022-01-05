<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;
    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }
    public function index()

    {
        $data['pageTitle'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        return view('dashboard/mahasiswa', $data);
    }

    public function create()
    {

        $data = [
            'pageTitle' => 'Input Data Mahasiswa',
            'validation' => \Config\Services::validation()
        ];

        return view('dashboard/mahasiswa_create', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'nim' => [
                'rules' => 'required|is_unique[mahasiswa.nim]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'NIM sudah terdaftar'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [

                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'photo' => [
                'rules' => 'max_size[photo,2024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
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

        $filePhoto = $this->request->getFile('photo');

        //cek dulu
        if ($filePhoto->getError() == 4) {
            $namaPhoto = 'otomatis.jpg';
        } else {
            //bikin nama sampul random
            $namaPhoto = $filePhoto->getRandomName();
            //pindahkan file ke folder img
            $filePhoto->move('photo', $namaPhoto);
        }
        $this->mahasiswa->insert([
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'photo' => $namaPhoto,
        ]);
        session()->setFlashdata('message', 'Tambah Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
    public  function edit($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data = [
            'pageTitle' => 'Edit Data Mahasiswa',
            'validation' => \Config\Services::validation(),
            'mahasiswa' => $dataMahasiswa
        ];
        return view('dashboard/mahasiswa_edit', $data);
    }
    public function update($nim)
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
    
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

       

        $this->mahasiswa->update($nim, [
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),

        ]);
        session()->setFlashdata('message', 'Update Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa')->withInput();
    }
    function delete($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if ($dataMahasiswa->photo != 'otomatis.jpg') {

            unlink('photo/' . $dataMahasiswa->photo);
        }

        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $this->mahasiswa->delete($nim);
        session()->setFlashdata('message', 'Delete Data Mahasiswa Berhasil');
        return redirect()->to('/mahasiswa');
    }
    public function view($nim)
    {
        $dataMahasiswa = $this->mahasiswa->find($nim);
        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Mahasiswa Tidak ditemukan !');
        }
        $data['pageTitle'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $dataMahasiswa;
        return view('dashboard/mahasiswa_view', $data);
    }
}
