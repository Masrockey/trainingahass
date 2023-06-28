<?php

namespace App\Models;

use CodeIgniter\Model;

class AhassModel extends Model
{
    protected $table = 'ahass';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_ahass', 'nama_ahass'];
}
