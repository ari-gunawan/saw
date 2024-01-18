<?php

namespace App\Models;

use CodeIgniter\Model;

class ListKaryawanModel extends Model
{
    protected $table = 'datatable';
    protected $allowedFields = ['PN', 'NAMA', 'KANCA', 'UNIT'];

    public function get_form($id)
    {
        $query = $this->db->table('mytable')
            ->select('mytable.*, capaian.pn')
            ->join('capaian', 'capaian.pn = mytable.PN')
            ->where('mytable.PN', $id)->get()->getResultArray();
        return $query;
    }
    
    public function getKaryawanByUker($uker)
    {
        $query = $this->db->table('datatable')
            ->select('datatable.PN as pn, datatable.NAMA as nama, masterdata.PN_md,masterdata.MCTEXT,branch.uker,branch.id_branch')->join('masterdata', 'masterdata.PN_md = datatable.PN', 'left')
            ->join('branch', 'masterdata.MCTEXT = branch.uker', 'left')
            ->where('branch.id_branch', $uker)->get()->getResult();
        return $query;
    }

}
