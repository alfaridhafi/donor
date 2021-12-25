<?php

namespace App\Controllers;

use App\Models\PendonorModel;

class Pendonor extends BaseController
{
    protected $PendonorModel;
    public function __construct()
    {
        $this->PendonorModel = new \App\Models\PendonorModel();
    }
    public function index()
    {
        $kecamatan = $this->request->getVar('kecamatan');
        if ($kecamatan) {
            $pendonor = $this->PendonorModel->search($kecamatan);
        } else {
            $pendonor = $this->PendonorModel;
        }
        $currentPage = $this->request->getVar('page_calonpendonor') ? $this->request->getVar('page_calonpendonor') : 1;

        $data = [
            'title' => 'Pendonor',
            'pendonor' => $pendonor->paginate(5, 'calonpendonor'),
            'pager' => $this->PendonorModel->pager,
            'currentPage' => $currentPage
        ];


        return view('pendonor/donor', $data);
    }
    public function formulir()
    {
        $data = [
            'title' => 'formulir',
            'validation' => \Config\Services::validation()
        ];
        return view('pendonor/formulir', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama_pendonor' => [
                'rules' => 'required[calonpendonor.nama_pendonor]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'golongan_darah' => [
                'rules' => 'required[calonpendonor.golongan_darah]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'berat_badan' => [
                'rules' => 'required[calonpendonor.berat_badan]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required[calonpendonor.jenis_kelamin]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'usia' => [
                'rules' => 'required[calonpendonor.usia]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required[calonpendonor.alamat]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'nomor_telepon' => [
                'rules' => 'required[calonpendonor.nomor_telepon]',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/jadwal/create')->withInput()->with('validation', $validation);
            return redirect()->to('/Pendonor/formulir')->withInput();
        }

        $slug = url_title($this->request->getVar('nama_pendonor'), '-', true);
        $this->PendonorModel->save([

            'nama_pendonor' => $this->request->getVar('nama_pendonor'),
            'slug' => $slug,
            'golongan_darah' => $this->request->getVar('golongan_darah'),
            'usia' => $this->request->getVar('usia'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'terakhir_donor' => $this->request->getVar('terakhir_donor'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon')
        ]);

        session()->setFlashdata('pesan', 'Calon Pendonor baru telah terdaftar.');

        return redirect()->to('/Pendonor');
    }

    public function admin()
    {
        $data = [
            'title' => 'Pendonor',
            'pendonor' => $this->PendonorModel->getPendonor(),
            'pager' => $this->PendonorModel->pager
        ];


        return view('pendonor/admin', $data);
    }

    public function detail($slug)
    {
        // $jadwal = $this->JadwalModel->query("SELECT movie.poster, movie.movie, movie.sinopsis FROM jadwal INNER JOIN movie ON jadwal.id_movie=movie.id ");


        // $jadwal = $this->JadwalModel->query("SELECT movie.poster, movie.movie, movie.sinopsis FROM jadwal INNER JOIN movie ON jadwal.id_movie=movie.id ");

        $data = [
            'title' => 'detail',
            'pendonor' => $this->PendonorModel->getPendonor($slug)
        ];

        if (empty($data['calonpendonor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama_pendonor' . $slug . 'tidak ditemukan.');
        }
        return view('admin/edit', $data);
    }
}
