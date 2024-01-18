<?php

namespace App\Models;

use CodeIgniter\Model;

class SawModel  extends Model
{
    protected $table = 'capaian';
    protected $allowedFields = ['pn', 'hasil_saw'];

    public function get_form()
    {
        $query = $this->db->table('hasil_saw');
        return $query;
    }

    // public function getUsers()
    // {
    //     return $this->findAll();
    // }
}
