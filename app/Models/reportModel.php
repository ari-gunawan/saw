<?php

namespace App\Models;

use CodeIgniter\Model;

class reportModel extends Model
{
    protected $table = 'crips';
    protected $allowedFields = ['pn', 'tahun', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'a13', 'a14', 'a15', 'a16', 'a17'];
}