<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
	protected $AdminModel;
	public function __construct()
	{
		$this->AdminModel = new \App\Models\AdminModel();
	}
	public function index()
	{
		$currentPage = $this->request->getVar('page_calonpendonor') ? $this->request->getVar('page_calonpendonor') : 1;
		$data = [
			'title' => 'admin',
			'pendonor' => $this->AdminModel->getPendonor(),
			'pager' => $this->AdminModel->pager,
			'currentPage' => $currentPage
		];
		return view('/admin/admin', $data);
	}

	public function edit($slug)
	{
		$data = [
			'title' => 'Halaman Edit Jadwal',
			'validation' => \Config\Services::validation(),
			'pendonor' => $this->AdminModel->getPendonor($slug)
		];

		return view('admin/edit', $data);
	}

	public function update($id)
	{
		$pendonorLama = $this->AdminModel->getPendonor($this->request->getVar('slug'));
		if ($pendonorLama['nama_pendonor'] == $this->request->getVar('nama_pendonor')) {
			$rule_nama_pendonor = 'required';
		} else {
			$rule_nama_pendonor = 'required|is_unique[calonpendonor.nama_pendonor]';
		}

		if (!$this->validate([
			'nama_pendonor' => [
				'rules' => $rule_nama_pendonor,
				'errors' => [
					'required' => '{field} harus diisi.',
					'is_unique' => '{field} sudah tersedia'
				]
			]
		])) {
			return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput();
		}


		$slug = url_title($this->request->getVar('nama_pendonor'), '-', true);
		$this->AdminModel->save([
			'id' => $id,
			'nama_pendonor' => $this->request->getVar('nama_pendonor'),
			'berat_badan' => $this->request->getVar('berat_badan'),
			'usia' => $this->request->getVar('usia'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'golongan_darah' => $this->request->getVar('golongan_darah'),
			'slug' => $slug,
			'terakhir_donor' => $this->request->getVar('terakhir_donor'),
			'nomor_telepon' => $this->request->getVar('nomor_telepon'),
			'alamat' => $this->request->getVar('alamat')
		]);

		session()->setFlashdata('pesan', 'Calon Pendonor berhasil di Edit.');

		return redirect()->to('/Admin');
	}

	public function delete($id)
	{


		$this->AdminModel->delete($id);
		session()->setFlashdata('pesan', 'Calon Pendonor telah Dihapus');
		return redirect()->to('/Admin');
	}
}
