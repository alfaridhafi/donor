<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'calonpendonor';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_pendonor', 'golongan_darah', 'slug', 'berat_badan', 'usia', 'jenis_kelamin', 'terakhir_donor', 'alamat', 'nomor_telepon'];

    // public function getPendonor($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll();
    //     }
    //     return $this->where(['id' => $id])->first();
    // }
    public function getPendonor($slug = false)
    {
        if ($slug == false) {
            return $this->paginate(5, 'calonpendonor');
        }

        return $this->where(['slug' => $slug])->first();
    }
}
