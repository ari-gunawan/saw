<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiModel extends Model
{
    protected $table = 'normalisasi';
    protected $allowedFields = ['pn', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17'];

    public function saveData($data)
    {
        return $this->insert($data);
    }

    public function store($data)
    {
        return $this->db('normalisasi', $data);
    }
}