<?php

namespace App\Controllers;

use App\Models\PelayananModel;

class Pelayanan extends BaseController
{
    public function index()
    {
        $title = 'Daftar Pelayanan';
        $model = new PelayananModel();
        $pelayanan = $model->findAll();
        return view('admin/pelayanan/index', compact('pelayanan', 'title'));
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $pelayanan = new PelayananModel();
            $pelayanan->insert([
                'nama' => $this->request->getPost('nama'),
                'keterangan_ply' => $this->request->getPost('keterangan_ply'),
                'kode' => $this->request->getPost('kode'),
            ]);
            return redirect('admin/pelayanan');
        }
        $title = "Tambah Pelayanan";
        return view('admin/pelayanan/formadd', compact('title'));
    }

    public function edit($pelayanan_id)
    {
        $pelayanan = new PelayananModel();

        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $pelayanan->update($pelayanan_id, [
                'nama' => $this->request->getPost('nama'),
                'keterangan_ply' => $this->request->getPost('keterangan_ply'),
                'kode' => $this->request->getPost('kode')
            ]);
            return redirect('admin/pelayanan');
        }

        // ambil data lama
        $data = $pelayanan->where('pelayanan_id', $pelayanan_id)->first();
        $title = "Edit Pelayanan";
        return view('admin/pelayanan/formedit', compact('title', 'data'));
    }

    public function delete($pelayanan_id)
    {
        $pelayanan = new PelayananModel();
        $pelayanan->delete($pelayanan_id);
        return redirect('admin/pelayanan');
    }
}
