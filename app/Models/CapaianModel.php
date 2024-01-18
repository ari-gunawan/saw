<?php

namespace App\Models;

use CodeIgniter\Model;

class CapaianModel extends Model
{
    protected $table = 'capaian';
    protected $allowedFields = ['id', 'pn', 'tahun', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15', 'c16', 'c17', 'hasil_saw'];

    public function saveData($data)
    {
        return $this->insert($data);
    }
    public function store($data)
    {
        return $this->db('capaian', $data);
    }
    public function get_form()
    {
        $query = $this->db->table('hasil_saw');
        return $query;
    }
}
