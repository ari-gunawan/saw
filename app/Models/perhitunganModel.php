<?php

namespace App\Models;

use CodeIgniter\Model;

class perhitunganModel extends Model
{
    protected $table = 'capaian';
    // protected $allowedFields = ['PN', 'NAMA', 'KANCA', 'UNIT'];

    public function get_form()
    {
        $query = $this->db->table('datamantri')
            ->select('datamantri.pn, capaian.pn')
            ->join('datamantri', 'capaian.pn = datamantri.pn')
            ->where('datamantri.pn')->get();
        return $query;
    }

    // public function getUsers()
    // {
    //     return $this->findAll();
    // }
}
