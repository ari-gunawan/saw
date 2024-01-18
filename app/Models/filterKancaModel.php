<?php

namespace App\Models;

use CodeIgniter\Model;

class filterKancaModel extends Model
{
    protected $table = 'datatable';
    protected $allowedFields = ['KANCA', 'UKER'];

    public function getKanca()
    {
        return $this->db->table('datatable')->select('KANCA')->get()->getResultArray();
    }

    public function getUnitByKancaName($kancaName)
    {
        return $this->db->table('datatable')->select('UNIT')->where('KANCA', $kancaName)->get()->getResultArray();
    }
}
