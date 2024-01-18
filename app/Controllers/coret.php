public function simpanExcel()
    {
        $file_excel = $this->request->getFile('fileexcel');
        $ext = $file_excel->getClientExtension();

        // Choose the appropriate reader based on the file extension
        $render = ($ext == 'xls') ? new \PhpOffice\PhpSpreadsheet\Reader\Xls() : new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadsheet = $render->load($file_excel);

        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach ($data as $x => $row) {
            if ($x == 0) {
                continue;
            }

            $pn = $this->request->getPost('PN');
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
            //     // ... (continue with other variables)

            //     $db = \Config\Database::connect();

            //     // Use the Query Builder for more flexibility
            //     $cekPn = $db->table('capaian')->getWhere(['pn' => $pn])->getResult();

            //     if (count($cekPn) > 0) {
            //         session()->setFlashdata('message', '<b style="color:red">Data Gagal di Import PN ada yang sama</b>');
            //     } else {
            //         // Use a single array for simplicity
            //         $simpandata = [
            //             'pn' => $pn,
            //             'tahun' => $tahun,
            //             'C1'  => $C1,
            //             'C2'  => $C2,
            //             'C3'  => $C3,
            //             'C4'  => $C4,
            //             'C5'  => $C5,
            //             'C6'  => $C6,
            //             'C7'  => $C7,
            //             'C8'  => $C8,
            //             'C9'  => $C9,
            //             'C10' => $C10,
            //             'C11' => $C11,
            //             'C12' => $C12,
            //             'C13' => $C13,
            //             'C14' => $C14,
            //             'C15' => $C15,
            //             'C16' => $C16,
            //             'C17' => $C17,
            //             // ... (continue with other variables)
            //         ];

            //         $db->table('capaian')->insert($simpandata);
            //         session()->setFlashdata('message', 'Berhasil import excel');
            //     }
            // }

            // return redirect()->to('/capaian');
        }
    }