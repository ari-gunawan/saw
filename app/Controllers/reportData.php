<?php

namespace App\Controllers;

use App\Models\reportModel;

class reportData extends BaseController
{
    public function __construct()
    {
        $this->reportModel = new reportModel();
        $this->session = session();
    }

    public function index()
    {
        $session = session();
        $data = [
            'crips' => $this->reportModel->findAll()
        ];
        return view('report', $data);
    }
}
