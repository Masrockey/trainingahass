<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'John Doe',
                'jabatan' => 'Manager',
                'kode_dealer' => 'KD001',
                'nama_dealer' => 'Dealer A',
                'history_training' => 'Training A, Training B',
            ],
            [
                'nama' => 'Jane Smith',
                'jabatan' => 'Supervisor',
                'kode_dealer' => 'KD002',
                'nama_dealer' => 'Dealer B',
                'history_training' => 'Training C, Training D',
            ],
            // Tambahkan data karyawan lainnya jika diperlukan
        ];

        $this->db->table('karyawan')->insertBatch($data);
    }
}
