<?php

namespace App\Controllers;

use App\Models\PekerjaModel;
use App\Models\PresensiModel;
use App\Models\RequestFormModel;
use CodeIgniter\I18n\Time;

class Presensi extends BaseController
{
    public function __construct()
    {
        $this->RequestFormModel = new RequestFormModel();
    }

    public function index()
    {
        $session = session();

        $data = [
            'request_form' => $this->RequestFormModel->where('id_pekerja', $session->get('id'))->findAll()
        ];
        return view('request-form', $data);
    }

    public function simpanRequest()
    {
        $session = session();

        $periksa = $this->validate([
            'lampiran' => [
                'uploaded[lampiran]',
                'mime_in[lampiran,application/pdf,application/zip,application/msword]',
                'max_size[lampiran,5000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('lampiran');
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/', $newName);
        } else {
            $newName = '';
        }

        $data = [
            'id_pekerja' => $session->get('id'),
            'jenis_permintaan' => $this->request->getVar('jenis_permintaan'),
            'judul' => $this->request->getVar('judul'),
            'sampai_tanggal' => $this->request->getVar('sampai_tanggal'),
            'lampiran' => $newName,
            'keterangan' => $this->request->getVar('keterangan'),
            'approval' => $this->request->getVar('approval'),
            'tanggal_pengajuan' => date('Y-m-d H:i:s'),
            'status' => 0,
        ];

        $this->RequestFormModel->insert($data);

        return redirect()->to('presensi');
    }

    public function detail($id)
    {

        $data = [
            // 'detail' => $this->RequestFormModel->where('id', $id)->first(),
            'detail' => $this->RequestFormModel->get_form($id)[0]
        ];
        $newName = 'nama_file.pdf';
        $id = base_url("presensi/detail/$newName");

        return view('detail', $data);
    }

    public function updateform($id)
    {
        $data = [
            // 'detail' => $this->RequestFormModel->where('id', $id)->first(),
            'detail' => $this->RequestFormModel->get_form($id)[0]
        ];

        return view('update_form', $data);
    }

    public function update()
    {
        $session = session();

        $periksa = $this->validate([
            'lampiran' => [
                'uploaded[lampiran]',
                'mime_in[lampiran,application/pdf,application/zip,application/msword]',
                'max_size[lampiran,5000]',
            ],
        ]);
        if ($periksa) {
            $file = $this->request->getFile('lampiran');
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/', $newName);
        } else {
            $newName = '';
        }

        $id = $this->request->getVar('id');
        $data = [
            'id_pekerja' => $session->get('id'),
            'jenis_permintaan' => $this->request->getVar('jenis_permintaan'),
            'judul' => $this->request->getVar('judul'),
            'sampai_tanggal' => $this->request->getVar('sampai_tanggal'),
            'lampiran' => $newName,
            'keterangan' => $this->request->getVar('keterangan'),
            'approval' => $this->request->getVar('approval'),
            'tanggal_pengajuan' => date('Y-m-d H:i:s'),
            'status' => 0,
        ];
    
        $this->RequestFormModel->update($id, $data);
        return redirect()->to('presensi');
    }

    public function updateStatus()
    {
        $id = $this->request->getVar('id');
        $status = $this->request->getVar('status');
        $model = new RequestFormModel();
        $data = [
            'status' => $status
        ];
        $model->update($id, $data);

        return redirect()->to('presensi');
    }

    // public function update_status()
    // {
    //     $model = new RequestFormModel()

    //     $id = $this->request->getVar('id');
    //     $data = [
    //         'status' => ''
    //     ];
    
    //     $model->update($id, $data); 
    //     return redirect()->to('presensi');
    // }
}

// var_dump($data);
    // die;

    // var_dump(session()->get());
    //     die;

    // $session = session();
    // if ($this->request->getVar('presensi') == "masuk") {
    //     $totalPresensi = $this->PresensiModel->where('id_pekerja', $session->get('id'))->where('startDate >=', date('Y-m-d 00:00:00'))->countAllResults();
    //     if ($totalPresensi == 0) {
    //         $data = [
    //             'id_pekerja' => $session->get('id'),
    //             'startDate' => $this->request->getVar('tanggal'),
    //             'startLatitude' => $this->request->getVar('latitude'),
    //             'startLongitude' => $this->request->getVar('longitude'),
    //             'jenis_presensi' => $this->request->getVar('presensi'),
    //         ];
    //         $this->PresensiModel->insert($data);
    //         echo "Simpan Presensi Datang Berhasil";
    //     } else {
    //         echo "Anda sudah Presensi Datang Hari ini";
    //     }
    // } else {
    //     $totalPresensi = $this->PresensiModel->where('id_pekerja', $session->get('id'))->where('startDate >=', date('Y-m-d 00:00:00'))->where('startDate <=', date('Y-m-d 23:59:59'))->countAllResults();
    //     if ($totalPresensi != 0) {
    //         $data = [
    //             'id_pekerja' => $session->get('id'),
    //             'endDate' => $this->request->getVar('tanggal'),
    //             'endLatitude' => $this->request->getVar('latitude'),
    //             'endLongitude' => $this->request->getVar('longitude'),
    //             'jenis_presensi' => $this->request->getVar('presensi'),
    //         ];
    //         $dataPresensi = $this->PresensiModel->where('id_pekerja', $session->get('id'))->where('startDate >=', date('Y-m-d 00:00:00'))->first();
    //         // var_dump($dataPresensi);
    //         // die();
    //         $this->PresensiModel->update($dataPresensi['id'], $data);
    //         echo "Simpan Presensi Pulang Berhasil";
    //     } else {
    //         $dataPresensi = $this->PresensiModel->where('id_pekerja', $session->get('id'))->where('startDate >=', date('Y-m-d 00:00:00'))->first();
    //         echo "Anda sudah Presensi Pulang Hari ini";
    //     }
    // }    