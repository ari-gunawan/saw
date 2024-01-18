<?php

namespace App\Controllers;

use App\Models\perhitunganModel;

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class perhitungan extends BaseController
{
    function __construct()
    {
        $this->perhitunganModel = new perhitunganModel();
        $this->session = session();
    }
    public function index()
    {
        $session = session();
        $data = [
            'capaian' => $this->perhitunganModel->findAll()
        ];
        $data1 = [
            'datmantri' => $this->perhitunganModel->findAll()
        ];
        // var_dump($data, $);
        // die;
        return view('perhitungan', $data, $data1);
    }
    public function insert_perhitungan()
    {
        // Get JSON data from the POST request
        $json_data = json_decode(file_get_contents('php://input'), true);

        try {
            // Insert the perhitungan data into the database
            $this->perhitungan_model->insert_perhitungan($json_data);

            $response = array('message' => 'perhitungan inserted successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }

    public function update_perhitungan($id)
    {
        $json_data = json_decode(file_get_contents('php://input'), true);

        try {
            $this->perhitungan_model->update_perhitungan($id, $json_data);

            $response = array('message' => 'perhitungan updated successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }

    public function delete_perhitungan($id)
    {
        try {
            $this->perhitungan_model->delete_perhitungan($id);

            $response = array('message' => 'perhitungan deleted successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }
}
