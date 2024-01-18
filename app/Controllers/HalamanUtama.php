<?php

namespace App\Controllers;

use App\Models\TopsisModel;

class HalamanUtama extends BaseController
{
    function __construct()
    {
        $this->TopsisModel = new TopsisModel();
        $this->session = session();
    }

    public function index()
    {

        $session = session();
        $data = [
            'capaian' => $this->TopsisModel->orderBy('hasil_saw', 'ASC')->limit(10)
        ];
        // var_dump($data);
        // die;
        return view('welcome_message', $data);
    }
}
