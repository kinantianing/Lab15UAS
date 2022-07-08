<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'pelayanan_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'keterangan_ply', 'kode'];
}
