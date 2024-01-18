<?php

namespace App\Controllers;

use App\Models\CapaianModel;
// use App\models\NormalisasiModel;
// use app\models\CripsModel;


class CapaianKaryawan extends BaseController
{
    protected $CapaianModel;
    protected $NormalisasiModel;
    // protected $CripsModel;

    public function __construct()
    {
        $this->CapaianModel = new CapaianModel();
        // $this->NormalisasiModel = new NormalisasiModel();
        // $this->CripsModel = new CripsModel();
    }

    // public function simpanExcel()
    // {
    //     $file_excel = $this->request->getFile('fileexcel');
    //     $ext = $file_excel->getClientExtension();
    //     if ($ext == 'xls') {
    //         $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    //     } else {
    //         $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    //     }
    //     $spreadsheet = $render->load($file_excel);

    //     $data = $spreadsheet->getActiveSheet()->toArray();
    //     foreach ($data as $x => $row) {
    //         if ($x == 0) {
    //             continue;
    //         }

    //         // $uker = $row[0];
    //         $pn = $row[0];
    //         $tahun = $row[1];
    //         $C1 = $row[2];
    //         $C2 = $row[3];
    //         $C3 = $row[4];
    //         $C4 = $row[5];
    //         $C5 = $row[6];
    //         $C6 = $row[7];
    //         $C7 = $row[8];
    //         $C8 = $row[9];
    //         $C9 = $row[10];
    //         $C10 = $row[11];
    //         $C11 = $row[12];
    //         $C12 = $row[13];
    //         $C13 = $row[14];
    //         $C14 = $row[15];
    //         $C15 = $row[16];
    //         $C16 = $row[17];
    //         $C17 = $row[18];

    //         $db = \Config\Database::connect();

    //         $cekPn = $db->table('capaian')->getWhere(['pn' => $pn])->getResult();

    //         if (count($cekPn) > 0) {
    //             session()->setFlashdata('message', '<b style="color:red">Data Gagal di Import PN ada yang sama</b>');
    //         } else {

    //             $simpandata = [
    //                 'pn' => $pn, 'pn' => $pn
    //             ];

    //             $db->table('capaian')->insert($simpandata);
    //             session()->setFlashdata('message', 'Berhasil import excel');
    //         }
    //     }

    //     return redirect()->to('/capaian');
    // }
    

    public function simpanExcel()
    {
        $file_excel = $this->request->getFile('fileexcel');
        $ext = $file_excel->getClientExtension();

        // Choose the appropriate reader based on the file extension
        $render = ($ext == 'xls') ? new \PhpOffice\PhpSpreadsheet\Reader\Xls() : new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadsheet = $render->load($file_excel);

        $dataSpreadsheet = $spreadsheet->getActiveSheet()->toArray();

        foreach ($dataSpreadsheet as $index => $row) {
            if ($index == 0) {
                continue; // Skip the header row
            }

            $pn = $this->request->getPost('PN');
            $tahun = $this->request->getPost('tahun');

            // Adjust the index according to your data structure in the spreadsheet
            $C1 = $row[2];
            $C2 = $row[3];
            // ... (continue with other variables)

            $data = [
                'pn' => $pn,
                'tahun' => $tahun,
                'c1' => $C1,
                'c2' => $C2,
                // ... (continue with other variables)
            ];

            // Calculate SAW result
            $weights = [
                'c1' => 0.07,
                'c2' => 0.04,
                // ... (continue with other weights)
            ];

            $normalized_data = $this->normalize_data([$data], array_keys($weights));
            $saw_results = $this->calculate_weighted_sum($normalized_data, $weights);

            // Add SAW score to data array
            $data['hasil_saw'] = $saw_results[0];

            // Save data to database
            $CapaianModel = new CapaianModel();
            $CapaianModel->insert($data);

            $session = session();
            $session->setFlashdata('success', 'Data and SAW calculation saved successfully');
            return redirect()->to('/updata', 200);
        }
    }

    public function calculate_saw_from_input()
    {
        $uker = $this->request->getPost('uker');
        $pn = $this->request->getPost('nama_pekerja');
        $tahun = $this->request->getPost('tahun');
        $C1 = $this->request->getPost('c1');
        $C2 = $this->request->getPost('c2');
        $C3 = $this->request->getPost('c3');
        $C4 = $this->request->getPost('c4');
        $C5 = $this->request->getPost('c5');
        $C6 = $this->request->getPost('c6');
        $C7 = $this->request->getPost('c7');
        $C8 = $this->request->getPost('c8');
        $C9 = $this->request->getPost('c9');
        $C10 = $this->request->getPost('c10');
        $C11 = $this->request->getPost('c11');
        $C12 = $this->request->getPost('c12');
        $C13 = $this->request->getPost('c13');
        $C14 = $this->request->getPost('c14');
        $C15 = $this->request->getPost('c15');
        $C16 = $this->request->getPost('c16');
        $C17 = $this->request->getPost('c17');


        $data['c1'] = $this->convertToCrispValue($C1);
        $data['c2'] = $this->convertToCrispValue($C2);
        $data['c3'] = $this->convertToCrispValue($C3);
        $data['c4'] = $this->convertToCrispValue($C4);
        $data['c5'] = $this->convertToCrispValue($C5);
        $data['c6'] = $this->convertToCrispValue($C6);
        $data['c7'] = $this->convertToCrispValue($C7);
        $data['c8'] = $this->convertToCrispValue($C8);
        $data['c9'] = $this->convertToCrispValue($C9);
        $data['c10'] = $this->convertToCrispValue($C10);
        $data['c11'] = $this->convertToCrispValue($C11);
        $data['c12'] = $this->convertToCrispValue($C12);
        $data['c13'] = $this->convertToCrispValue($C13);
        $data['c14'] = $this->convertToCrispValue($C14);
        $data['c15'] = $this->convertToCrispValue($C15);
        $data['c16'] = $this->convertToCrispValue($C16);
        $data['c17'] = $this->convertToCrispValue($C17);


        // Define criteria weights
        $weights = array(
            'c1' => 0.07,
            'c2' => 0.04,
            'c3' => 0.07,
            'c4' => 0.02,
            'c5' => 0.1,
            'c6' => 0.05,
            'c7' => 0.05,
            'c8' => 0.05,
            'c9' => 0.05,
            'c10' => 0.05,
            'c11' => 0.05,
            'c12' => 0.07,
            'c13' => 0.07,
            'c14' => 0.08,
            'c15' => 0.06,
            'c16' => 0.06,
            'c17' => 0.06
        );

        // Normalize and calculate the weighted sum
        $normalized_data = $this->normalize_data([$data], array_keys($weights));
        $saw_results = $this->calculate_weighted_sum($normalized_data, $weights);

        // Add SAW score to data array
        // $normalized_data['hasil_saw'] = $saw_results[0];
        $fill = [
            'uker' => $uker,
            'pn' => $pn,
            'tahun' => $tahun,
            'c1' => $C1,
            'c2' => $C2,
            'c3' => $C3,
            'c4' => $C4,
            'c5' => $C5,
            'c6' => $C6,
            'c7' => $C7,
            'c8' => $C8,
            'c9' => $C9,
            'c10' => $C10,
            'c11' => $C11,
            'c12' => $C12,
            'c13' => $C13,
            'c14' => $C14,
            'c15' => $C15,
            'c16' => $C16,
            'c17' => $C17,
            'hasil_saw' => $saw_results[0]
        ];
        $fill = array_merge($fill);

        $CapaianModel = new CapaianModel();
        $CapaianModel->insert($fill);

        $session = session();
        $session->setFlashdata('success', 'Data and SAW calculation saved successfully');
        return redirect()->to('/updata', 200);
    }



    private function convertToCrispValue($data)
    {
        $value = 0;

        if (empty($data) || $data == '') {
            return $value;
        }

        if ($data > 110) {
            $value = 4;
        }
        if ($data >= 100 && $data < 110) {
            $value = 3;
        }
        if ($data >= 85 && $data < 100) {
            $value = 2;
        }
        if ($data < 85) {
            $value = 1;
        }
        return $value;
    }

    // $fill2 = [
    //     'pn' => $pn,
    //     'tahun'=> $tahun
    // ];
    // // $fill = array_merge($fill);
    // $fill2 = array_merge($fill2, $data[0]);

    // $CripsModel = new CripsModel();
    // $CripsModel->insert($fill2);

    private function normalize_data($data, $criteria)
    {
        $normalized_data = array();
        // dd($data);

        foreach ($criteria as $criterion) {
            // $values = array_column($data, $criterion);
            // $min = 0;
            $max = 4;

            foreach ($data as $key => $item) {
                $normalized_data[$key][$criterion] = ($item[$criterion]) / ($max);
            }
        }

        return $normalized_data;
    }

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

    // ... (Keep the normalize_data and calculate_weighted_sum methods as before)
}
