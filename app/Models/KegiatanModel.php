<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $useTimestamps = true;

    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kegiatan', 'anggaran', 'tanggal_kegiatan'];
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
