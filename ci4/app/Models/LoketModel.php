<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
    protected $table = 'loket';
    protected $primaryKey = 'loket_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_loket', 'keterangan', 'pelayanan_id'];

    public function getPelayanan()
    {
        return $this->db->table('loket')
            ->join('pelayanan', 'pelayanan.pelayanan_id=loket.pelayanan_id')
            ->get()->getResultArray();
    }

    public function getAll()
    {
        $builder = $this->db->table('loket');
        $builder->join('pelayanan', 'pelayanan.pelayanan_id=loket.pelayanan_id');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
