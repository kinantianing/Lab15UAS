<?php

namespace App\Controllers;

use App\Models\LoketModel;
use App\Models\PelayananModel;

class Loket extends BaseController
{
    function __construct()
    {
        $this->pelayanan = new PelayananModel();
        $this->loket = new LoketModel();
    }

    public function index()
    {
        $title = 'Daftar Loket';
        $model = new LoketModel();
        // $data['loket'] = $model->getPelayanan();
        $loket = $model->getPelayanan();

        return view('admin/loket/index', compact('loket', 'title'));
    }

    public function add()
    {
        $pelayanan = $this->pelayanan->findAll();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nama_loket' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $loket = new LoketModel();
            $loket->insert([
                'nama_loket' => $this->request->getPost('nama_loket'),
                'keterangan' => $this->request->getPost('keterangan'),
                'pelayanan_id' => $this->request->getPost('pelayanan_id'),
            ]);
            return redirect('admin/loket');
        }
        $title = "Tambah Loket";
        return view('admin/loket/formadd', compact('title', 'pelayanan'));
    }

    public function edit($loket_id)
    {
        $loket = new LoketModel();
        $pelayanan = $this->pelayanan->findAll();

        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['nama_loket' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $loket->update($loket_id, [
                'nama_loket' => $this->request->getPost('nama_loket'),
                'keterangan' => $this->request->getPost('keterangan'),
                'pelayanan_id' => $this->request->getPost('pelayanan_id'),
            ]);
            return redirect('admin/loket');
        }

        // ambil data lama
        $data = $loket->where('loket_id', $loket_id)->first();
        $title = "Edit Loket";
        return view('admin/loket/formedit', compact('title', 'data', 'pelayanan'));
    }

    public function delete($loket_id)
    {
        $loket = new LoketModel();
        $loket->delete($loket_id);
        return redirect('admin/loket');
    }
}
