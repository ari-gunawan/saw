<?php

namespace App\Models;

use CodeIgniter\Model;

class UpDataModel extends Model
{
    protected $table = 'datatable';
    protected $allowedFields = ['PN', 'NAMA', 'KANCA', 'UNIT'];

    public function get_form($id)
    {
        $query = $this->db->table('mytable')
            ->select('mytable.*, hasil_proses.pn')
            ->join('hasil_proses', 'hasil_proses.pn = mytable.PN')
            ->where('mytable.PN', $id)->get()->getResultArray();
        return $query;
    }
}
   // public function create()
    // {
    //     // Jika formulir sudah disubmit
    //     if ($this->request->getMethod() === 'post') {
    //         $dataModel = new DataModel();

    //         // Validasi data yang disubmit
    //         $validationRules = [
    //             'uker' => 'required',
    //             'nama_pekerja' => 'required',
    //             'tahun' => 'required',
    //             'c1' => 'required',
    //             'c2' => 'required',
    //             'c3' => 'required',
    //             'c4' => 'required',
    //             'c5' => 'required',
    //             'c6' => 'required',
    //             'c7' => 'required',
    //             'c8' => 'required',
    //             'c9' => 'required',
    //             'c10' => 'required',
    //             'c11' => 'required',
    //             'c12' => 'required',
    //             'c13' => 'required',
    //             'c14' => 'required',
    //             'c15' => 'required',
    //             'c16' => 'required',
    //             'c17' => 'required'
    //         ];

    //         if ($this->validate($validationRules)) {
    //             // Jika validasi berhasil, simpan data ke database
    //             $dataModel->insert([
    //                 'uker' => $this->request->getPost('uker'),
    //                 'nama_pekerja' => $this->request->getPost('nama_pekerja'),
    //                 'tahun' => $this->request->getPost('tahun'),
    //                 'c1' => $this->request->getPost('c1'),
    //                 'c2' => $this->request->getPost('c2'),
    //                 'c3' => $this->request->getPost('c3'),
    //                 'c4' => $this->request->getPost('c4'),
    //                 'c5' => $this->request->getPost('c5'),
    //                 'c6' => $this->request->getPost('c6'),
    //                 'c7' => $this->request->getPost('c7'),
    //                 'c8' => $this->request->getPost('c8'),
    //                 'c9' => $this->request->getPost('c9'),
    //                 'c10' => $this->request->getPost('c10'),
    //                 'c11' => $this->request->getPost('c11'),
    //                 'c12' => $this->request->getPost('c12'),
    //                 'c13' => $this->request->getPost('c13'),
    //                 'c14' => $this->request->getPost('c14'),
    //                 'c15' => $this->request->getPost('c15'),
    //                 'c16' => $this->request->getPost('c16'),
    //                 'c17' => $this->request->getPost('c17'),
    //             ]);

    //             // Redirect atau tampilkan pesan sukses
    //             return redirect()->to('/success');
    //         } else {
    //             // Jika validasi gagal, tampilkan pesan error
    //             return view('data_form', ['validation' => $this->validator]);
    //         }
    //     }