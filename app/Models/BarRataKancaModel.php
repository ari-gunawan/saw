<?php

namespace App\Models;

use CodeIgniter\Model;

class BarRataKancaModel extends Model
{
    protected $table = 'mytable';
    protected $allowedFields = ['PN', 'NAME', 'JG', 'JOBDESCK', 'PADESC', 'PSADESC', 'MCTEXT', 'GENDER'];
}
