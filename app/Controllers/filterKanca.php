<?php

namespace App\Controllers;

use App\Models\filterKancaModel;

class filterKancaModel extends BaseController
{
    public function index()
    {
        $model = new filterKancaModel();
        $data['datatable'] = $model->getKanca();
        return view('tabelKaryawan', $data);
    }

    public function getUnits($kancaName)
    {
        $model = new filterKancaModel();
        $units = $model->getUnitByKancaName(urldecode($kancaName));
        return $this->response->setJSON($units);
    }
}
