<?php

namespace App\Controllers;

class Pengajuan extends BaseController
{
    public function requestform()
    {
        return view('request_form');
    }

    public function insert_pengajuan() {
        // Get JSON data from the POST request
        $json_data = json_decode(file_get_contents('php://input'), true);

        try {
            // Insert the Pengajuan data into the database
            $this->Pengajuan_model->insert_Pengajuan($json_data);

            $response = array('message' => 'Pengajuan inserted successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }

    public function update_Pengajuan($id) {
        $json_data = json_decode(file_get_contents('php://input'), true);

        try {
            $this->Pengajuan_model->update_Pengajuan($id, $json_data);

            $response = array('message' => 'Pengajuan updated successfully');
            $this->output->set_output(json_encode($response));
        } catch (Exception $e) {
            $this->output->set_status_header(400);
            $response = array('error' => $e->getMessage());
            $this->output->set_output(json_encode($response));
        }
    }
    
    public function delete_Pengajuan($id) {
        $this->db->where('id', $id);
        $this->db->delete('Pengajuan_table');
    }


    public function updateform($id)
    {
        return view('update_form');
    }
}
