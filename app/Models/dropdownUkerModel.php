<?php

namespace App\Models;

use CodeIgniter\Model;

class dropdownUkerModel extends Model
{
    protected $table = 'branch';
    protected $allowedFields = ['id_branch','kanca','uker'];
    protected $primaryKey = 'id_branch'; // Ganti 'id' dengan nama primary key Anda
}
