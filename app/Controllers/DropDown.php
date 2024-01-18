<?php

namespace App\Controllers;

use App\Models\dropdownUkerModel;

class updata extends BaseController
{
    public function __construct()
    {
        $this->dropdownUkerModel = new dropdownUkerModel();
        $this->session = session();
    }

    public function index()
    {
        $session = session();
        $data = [
            'unit_kerja' => $this->UpDataModel->findAll()
        ];
        return view('uploadata', $data);
    }
    public function getUker()
    {
        $dropdownUkerModel = new dropdownUkerModel();
        $uker = $dropdownUkerModel->findAll(); // Ambil semua data dari tabel

        echo json_encode($uker);
    }
}
