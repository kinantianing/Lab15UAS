<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'antrian_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['tanggal', 'no_antrian', 'status', 'waktu_panggil', 'waktu_selesai', 'pelayanan_id', 'loket_id'];

    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'tanggal';
    protected $updatedField  = 'waktu_panggil';
    protected $deletedField  = 'waktu_selesai';


    public function getLoket()
    {
        $builder = $this->db->table('antrian');
        $builder->join('pelayanan', 'pelayanan.pelayanan_id=antrian.pelayanan_id');
        $builder->join('loket', 'loket.loket_id=antrian.loket_id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPelayanan()
    {
        return $this->db->table('antrian')
            ->join('pelayanan', 'pelayanan.pelayanan_id=antrian.pelayanan_id')
            ->get()->getResultArray();
    }

    public function getNomor()
    {
    }
}
