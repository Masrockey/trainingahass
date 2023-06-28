<?php

namespace App\Controllers;

use App\Models\AhassModel;
use CodeIgniter\Controller;

class AhassController extends Controller
{
        public function index()
    {
        $ahassModel = new AhassModel();
        $data['ahass'] = $ahassModel->findAll();

        return view('ahass/index', $data);
    }

        public function add()
    {
        return view('ahass/add');
    }

        public function save()
    {
        $ahassModel = new AhassModel();

        $data = [
            'kode_ahass' => $this->request->getPost('kode_ahass'),
            'nama_ahass' => $this->request->getPost('nama_ahass')
        ];

        $ahassModel->insert($data);

        return redirect()->to('/ahass');
    }

    public function edit($id)
    {
        $ahassModel = new AhassModel();
        $data['ahass'] = $ahassModel->find($id);

        return view('ahass/edit', $data);
    }

    public function update($id)
    {
        $ahassModel = new AhassModel();

        $data = [
            'kode_ahass' => $this->request->getPost('kode_ahass'),
            'nama_ahass' => $this->request->getPost('nama_ahass')
        ];

        $ahassModel->update($id, $data);

        return redirect()->to('/ahass');
    }
    public function delete($id)
    {
        $ahassModel = new AhassModel();

        $ahassModel->delete($id);

        return redirect()->to('/ahass');
    }




}
