<?php

namespace App\Controllers;

use App\Models\dropdownUkerModel;
use App\Models\ListKaryawanModel;
use App\Models\UpDataModel;
use CodeIgniter\HTTP\Request;

class updata extends BaseController
{
    public function __construct()
    {
        $this->UpDataModel = new UpDataModel();
        $this->session = session();
        $this->karyawanModel = new ListKaryawanModel();
    }

    public function index()
    {
        $session = session();
        $dropdownUkerModel = new dropdownUkerModel();
        $uker = $dropdownUkerModel->findAll(); // Ambil semua data dari tabel
        $data = [
            'datatable' => $this->UpDataModel->findAll(),
            'uker' => $uker
        ];

        return view('uploadata', $data);
    }

    public function getNamaUnit()
    {
        try {

            $request = service('request');

            $uker = $request->getGet('unit');
            $karyawanModel = new ListKaryawanModel();
            $data = $karyawanModel->getUnitByKanca($uker);

            echo json_encode([
                'status' => true,
                'data' => $data
            ]);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    public function getNamaPekerja()
    {
        try {

            $request = service('request');

            $uker = $request->getGet('uker');
            $karyawanModel = new ListKaryawanModel();
            $data = $karyawanModel->getKaryawanByUker($uker);

            echo json_encode([
                'status' => true,
                'data' => $data
            ]);
        } catch (\Exception $e) {
            exit($e->getMessage());
        }
    }

    
}
