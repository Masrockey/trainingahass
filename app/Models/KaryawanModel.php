<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'jabatan',
        'kode_dealer',
        'nama_dealer',
        'history_training'
    ];
}