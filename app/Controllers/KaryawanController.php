<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use CodeIgniter\Controller;
use App\Models\AhassModel;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawanModel = new KaryawanModel();

        $data['karyawan'] = $karyawanModel->findAll();

        return view('karyawan/index', $data);
    }

    public function add()
    {
    $ahassModel = new AhassModel();
    $data['ahass'] = $ahassModel->findAll();

    return view('karyawan/add', $data);
    }

    public function save()
    {
    $karyawanModel = new KaryawanModel();

    $data = [
        'id' => $this->request->getPost('id'),
        'nama' => $this->request->getPost('nama'),
        'jabatan' => $this->request->getPost('jabatan'),
        'kode_dealer' => $this->request->getPost('kode_dealer'),
        'nama_dealer' => $this->request->getPost('nama_dealer'),
        'history_training' => $this->request->getPost('history_training')
    ];

    $karyawanModel->insert($data);
    

    return redirect()->to('/karyawan');
    }

    public function detail($id)
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->find($id);

        return view('karyawan/detail', $data);
    }

    public function delete($id)
    {
        $karyawanModel = new KaryawanModel();
        $karyawanModel->delete($id);

        return redirect()->to('/karyawan');
    }
    


}
