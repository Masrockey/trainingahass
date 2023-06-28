<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AhassSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_ahass' => 'AHASS001',
                'nama_ahass' => 'Ahass 1',
            ],
            [
                'kode_ahass' => 'AHASS002',
                'nama_ahass' => 'Ahass 2',
            ],
            [
                'kode_ahass' => 'AHASS003',
                'nama_ahass' => 'Ahass 3',
            ],
        ];

        // Insert data ke tabel 'ahass'
        $this->db->table('ahass')->insertBatch($data);
    }
}
