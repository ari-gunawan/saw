<?php

namespace App\Controllers;

use App\Models\PekerjaModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->PekerjaModel = new PekerjaModel();
    }

    public function index()
    {
        $session = session();
        if ($session->get('logged_in')) {
            return redirect()->to('/home');
        }
        return view('login');
    }

    public function auth()
    {
        $session = session();
        // $model = new PekerjaModel();
        $PN = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->PekerjaModel->where('PN', $PN)->first();
        if ($data) {
            $pass = $data['password'];
            if ($password == $pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'PN'     => $data['PN'],
                    // 'jabatan_pekerja'   => $data['PositionText'],
                    // 'ALAMAT_EMAIL'    => $data['ALAMAT_EMAIL'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
