<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class Antrian extends BaseController
{
    function __construct()
    {
        $this->pelayanan = new PelayananModel();
        $this->antrian = new AntrianModel();
        $this->loket = new LoketModel();
    }

    public function index()
    {

        $title = 'Ambil Antrian';
        $model = new AntrianModel();
        return view('user/antrian/index', compact('title'));
    }

    public function add()
    {
        $title = 'Ambil Antrian';
        $pelayanan = $this->pelayanan->findAll();
        $loket = $this->loket->findAll();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['pelayanan_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $antrian = new AntrianModel();
            $antrian->insert([
                'no_antrian' => $this->request->getPost('antrian_id'),
                // 'tanggal' => $this->request->getPost('tanggal'),
                'waktu_panggil' => $this->request->getPost('waktu_panggil'),
                'waktu_selesai' => $this->request->getPost('waktu_selesai'),
                'pelayanan_id' => $this->request->getPost('pelayanan_id'),
                'loket_id' => $this->request->getPost('loket_id'),
            ]);
            return redirect('user/antrian/nomor');
        }
        return view('user/antrian/formadd', compact('title', 'pelayanan', 'loket'));
    }

    public function dashboard($antrian_id = null)
    {
        $title = 'Layar Antrian';
        $model = new AntrianModel();
        $antrian = $model->where('status', '1')->findAll();
        // $antrian = $this->model->where('status', '1')->findAll();
        // $this->$model->where('status', '1')->findAll();
        return view('dashboard/index', compact('title', 'antrian'));
    }

    public function dashboard_user($antrian_id = null)
    {
        $title = 'Layar Antrian';
        $model = new AntrianModel();
        $antrian = $model->where('status', '1')->findAll();
        // $antrian = $this->model->where('status', '1')->findAll();
        // $this->$model->where('status', '1')->findAll();
        return view('user/antrian/dashboard', compact('title', 'antrian'));
    }

    public function nomor($status = null)
    {
        $title = 'Layar Antrian';
        $model = new AntrianModel();
        $antrian = $model->where('status', '1')->findAll();
        // $antrian = $model->getNomor();
        // $antrian = $this->model->where('status', '1')->findAll();
        // $this->$model->where('status', '1')->findAll();
        return view('user/antrian/nomor', compact('title', 'antrian'));
    }
}
