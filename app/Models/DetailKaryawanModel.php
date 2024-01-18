<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailKaryawanModel extends Model
{
    protected $table = 'mytable';
    //protected $allowedFields = ['PN_mytable', 'NAME', 'PN_md', 'pn_proses'];

    public function get_form($id)
    {
        $query = $this->db->table('mytable')
        
        ->select('masterdata.*, capaian.* , mytable.PN_mytable')
        ->join('masterdata', 'mytable.PN_mytable = masterdata.PN_md')
        ->join('capaian', 'mytable.PN_mytable = capaian.pn')
        ->where('mytable.PN_mytable', $id)->get()->getResultArray();
        
        
        return $query;
    }
}

// ->select('masterdata.*, hasil_proses.* , mytable.PN_mytable')
// ->join('masterdata', 'masterdata.Nama_PN_md = mytable.PN_mytable')
// ->join('hasil_proses', 'masterdata.PN_md = hasil_proses.pn')

// ->select('masterdata.*, hasil_proses.* , mytable.PN_mytable')
// ->join('masterdata', 'mytable.PN_mytable = masterdata.PN_md')
// ->join('hasil_proses', 'mytable.PN_mytable = hasil_proses.pn_proses')
// ->where('mytable.PN_mytable', $id)->get()->getResultArray();