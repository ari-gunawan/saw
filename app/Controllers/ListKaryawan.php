<?php

namespace App\Controllers;

use App\Models\CapaianModel;
use App\Models\ListKaryawanModel;
use App\Models\DetailKaryawanModel;
use App\Models\filterKancaModel;

class ListKaryawan extends BaseController
{
    public function __construct()
    {
        $this->ListKaryawanModel = new ListKaryawanModel();
        $this->DetailKaryawanModel = new DetailKaryawanModel();
        $this->CapaianModel = new CapaianModel();
        $this->session = session();
    }

    // public function index()
    // {
    //     $kanca = $ListKaryawanModel->findAll(); // Ambil semua data dari tabel
    //     $data = [
    //         'datatable' => $this->UpDataModel->findAll(),
    //         'KANCA' => $kanca
    //     ];
    //     return view('tabelKaryawan', $data);
    // }

    public function getNamaUnit()
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

    public function index()
    {
        $session = session();
        $data = [
            'datatable' => $this->ListKaryawanModel->findAll()
        ];
        return view('tabelKaryawan', $data);
    }
    public function getKanca()
    {
        $filterKancaModel = new filterKancaModel();
        $uker = $filterKancaModel->findAll(); // Ambil semua data dari tabel

        echo json_encode($uker);
    }

    public function insert_karyawan()
    {
        // Get JSON data from the POST request
        $json_data = json_decode(file_get_contents('php://input'), true);

        try {
            // Insert the Karyawan data into the database
            $this->Karyawan_model->insert_karyawan($json_data);

            $response = array('message' => 'Karyawan inserted successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }

    // public function update_karyawan($id) {
    //     $json_data = json_decode(file_get_contents('php://input'), true);

    //     try {
    //         $this->ListKaryawanModel->update_karyawan($id, $json_data);

    //         $response = array('message' => 'Karyawan updated successfully');
    //         $this->output->set_output(json_encode($response));
    //     } catch (Exception $e) {
    //         $this->output->set_status_header(400);
    //         $response = array('error' => $e->getMessage());
    //         $this->output->set_output(json_encode($response));
    //     }
    // }

    public function editView($id)
    {
        $karyawan = $this->DetailKaryawanModel->get_form($id);
        $data = [
            'karyawan' => $karyawan

        ];

        return view('updateDataKaryawan', $data);
    }

    public function saveEdit()
    {
        $capaianModel = new CapaianModel();

        // Ambil data dari request Ajax
        $id = $this->request->getPost('id');
        $tahun = $this->request->getPost('tahun');
        $c1 = $this->request->getPost('c1');
        $c2 = $this->request->getPost('c2');

        // Lakukan operasi penyuntingan data hanya jika data yang sesuai ditemukan
        $existingData = $capaianModel->find($id);

        if ($existingData) {
            // Data yang sesuai ditemukan, jalankan operasi update
            $data = [
                'tahun' => $tahun,
                'c1' => $c1,
                'c2' => $c2,
            ];

            // Sesuaikan dengan nama kolom primary key yang digunakan
            $capaianModel->update($id, $data);

            // Beri respons kepada klien
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil disunting.'
            ];
        } else {
            // Tidak ada data yang sesuai
            $response = [
                'status' => 'error',
                'message' => 'Tidak ada data yang sesuai untuk disunting.'
            ];
        }

        return $this->response->setJSON($response);
    }

    // public function saveEdit()
    // {
    //     $capaianModel = new CapaianModel();

    //     // Ambil data dari request Ajax
    //     $id = $this->request->getPost('id');
    //     $tahun = $this->request->getPost('tahun');
    //     $c1 = $this->request->getPost('c1');
    //     $c2 = $this->request->getPost('c2');

    //     // Lakukan operasi penyuntingan data di sini
    //     $data = [
    //         'tahun' => $tahun,
    //         'c1' => $c1,
    //         'c2' => $c2,
    //     ];

    //     // Sesuaikan dengan nama kolom primary key yang digunakan
    //     $capaianModel->where('pn', $id)->update($data);

    //     // Beri respons kepada klien
    //     $response = [
    //         'status' => 'success',
    //         'message' => 'Data berhasil disunting.'
    //     ];

    //     return $this->response->setJSON($response);
    // }



    public function update()
    {

        helper(['form', 'url']);

        $model = new ListKaryawanModel();

        $id = $this->request->getVar('hdnKaryawanPn');

        $data = [
            'pn' => $this->request->getVar('txtKaryawanPn'),
            // 'last_name'  => $this->request->getVar('txtLastName'),
            // 'address'  => $this->request->getVar('txtAddress'),
        ];

        $update = $model->update($id, $data);
        if ($update != false) {
            $data = $model->where('PN', $id)->first();
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false, 'data' => $data));
        }
    }
    public function delete_karyawan($id)
    {
        try {
            $this->Karyawan_model->delete_karyawan($id);

            $response = array('message' => 'Karyawan deleted successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }
    public function create()
    {
        $session = session();
        return view('addkaryawan');
    }

    public function detail($id)
    {
        $karyawan = $this->DetailKaryawanModel->get_form($id);
        $data = [
            'karyawan' => $karyawan

        ];
        return view('DataKaryawan', $data);
    }
    public function calculate_saw()
    {
        // Get all Karyawan data from the model
        $karyawan_list = $this->Karyawan_model->get_all_karyawan();

        // Define criteria weights (you can adjust these according to your needs)
        $weights = array(
            'salary' => 0.4,
            'experience' => 0.3,
            'performance' => 0.3,
        );

        // Normalize and calculate the weighted sum for each Karyawan
        $normalized_data = $this->normalize_data($karyawan_list, array_keys($weights));
        $saw_results = $this->calculate_weighted_sum($normalized_data, $weights);

        // Sort the results in descending order based on the calculated SAW value
        arsort($saw_results);

        // Prepare the response
        $response = array(
            'message' => 'SAW calculation successful',
            'saw_results' => $saw_results,
        );

        $this->output->set_output(json_encode($response));
    }

    // Helper function to normalize the data
    private function normalize_data($data, $criteria)
    {
        $normalized_data = array();

        foreach ($criteria as $criterion) {
            $values = array_column($data, $criterion);
            $min = min($values);
            $max = max($values);

            foreach ($data as $key => $item) {
                $normalized_data[$key][$criterion] = ($item[$criterion] - $min) / ($max - $min);
            }
        }

        return $normalized_data;
    }

    // Helper function to calculate the weighted sum
    private function calculate_weighted_sum($normalized_data, $weights)
    {
        $saw_results = array();

        foreach ($normalized_data as $key => $item) {
            $weighted_sum = 0;

            foreach ($weights as $criterion => $weight) {
                $weighted_sum += $item[$criterion] * $weight;
            }

            $saw_results[$key] = $weighted_sum;
        }

        return $saw_results;
    }
}
