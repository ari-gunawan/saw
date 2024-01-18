<?php

namespace App\Controllers;

use App\Models\SawModel;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Home extends BaseController
{
    function __construct()
    {
        $this->SawModel = new SawModel();
        $this->session = session();
    }
    public function index()
    {
        $session = session();
        $data = [
            'capaian_desc' => $this->SawModel->orderBy('hasil_saw', 'DESC')->findAll(), // Data terurut dari yang terbesar
            'capaian_asc' => $this->SawModel->orderBy('hasil_saw', 'ASC')->findAll(),   // Data terurut dari yang terkecil
        ];
    
        return view('welcome_message', $data);
    }

    public function datapribadi()
    {
        return view('datapribadi');
    }

    public function cuti()
    {
        return view('cuti');
    }

    public function approval()
    {
        return view('approval');
    }
    public function datakaryawan()
    {
        return view('datakaryawan');
    }
}
