<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class LoketPanggil extends BaseController
{
    function __construct()
    {
        $this->pelayanan = new PelayananModel();
        $this->loket = new LoketModel();
        $this->antrian = new AntrianModel();
    }

    public function index()
    {
        $title = 'Daftar Antrian';
        $model = new AntrianModel();
        // $antrian = $model->getPelayanan();
        $antrian = $model->getLoket();
        return view('admin/loketpanggil/index', compact('title', 'antrian'));
    }

    public function panggil()
    {
        $title = 'Loket Panggil';
        $model = new AntrianModel();
        $antrian = $model->findAll();
        // $data['antrian'] = $this->antrian->findAll();

        return view('admin/loketpanggil/formpanggil', compact('title', 'antrian'));
    }

    public function edit($antrian_id)
    {
        $model = new AntrianModel();
        $antrian = $model->where(['antrian_id' => $antrian_id])->first();

        // validasi data
        $validation = \Config\Services::validation();
        $validation->setRules(['status' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $model->update($antrian_id, [
                'status' => $this->request->getPost('status'),
                'waktu_selesai' => $this->request->getPost('waktu_selesai')
            ]);
            return redirect('admin/loketpanggil/panggil');
        }

        // ambil data lama
        $data = $model->where('antrian_id', $antrian_id)->first();
        $title = "Panggil Antrian";
        return view('admin/loketpanggil/formedit', compact('title', 'data', 'antrian'));
    }

    public function delete($antrian_id = null)
    {
        // $this->antrian->where('antrian_id', $antrian_id)->delete();
        $this->antrian->delete($antrian_id);
        return redirect()->to(site_url('admin/loketpanggil/panggil'))->with('succes', 'Antrian Selesai.');
    }
}
