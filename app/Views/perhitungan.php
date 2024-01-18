<?= $this->extend('template/main') ?>
<?= $this->section('content') ?>



<div class="container">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h1>Data Capaian Karyawan Pertahun</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered ">
                            <thead class="table-head">
                                <tr>
                                    <td>NO</td>
                                    <td>NAMA</td>
                                    <td>Peny. KUR Mikro</td>
                                    <td>Peny. KUR Sumi</td>
                                    <td>Peny Pinj. UMI</td>
                                    <td>Jumlah Nasabah Umi</td>
                                    <td>OS PL Kupedes</td>
                                    <td>OS PL KUR</td>
                                    <td>OS PL Briguna</td>
                                    <td>% DPK</td>
                                    <td>% NPL</td>
                                    <td>Rec DH</td>
                                    <td>AVG Dly Simp</td>
                                    <td>Nsb Pinjaman</td>
                                    <td>Rek Simpedes</td>
                                    <td>FBI PA</td>
                                    <td>Merchant</td>
                                    <td>Stroberi Kasir</td>
                                    <td>StroberiTagihan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($capaian as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['pn'] ?></td>
                                        <td><?= $data['c1'] ?></td>
                                        <td><?= $data['c2'] ?></td>
                                        <td><?= $data['c3'] ?></td>
                                        <td><?= $data['c4'] ?></td>
                                        <td><?= $data['c5'] ?></td>
                                        <td><?= $data['c6'] ?></td>
                                        <td><?= $data['c7'] ?></td>
                                        <td><?= $data['c8'] ?></td>
                                        <td><?= $data['c9'] ?></td>
                                        <td><?= $data['c10'] ?></td>
                                        <td><?= $data['c11'] ?></td>
                                        <td><?= $data['c12'] ?></td>
                                        <td><?= $data['c13'] ?></td>
                                        <td><?= $data['c14'] ?></td>
                                        <td><?= $data['c15'] ?></td>
                                        <td><?= $data['c16'] ?></td>
                                        <td><?= $data['c17'] ?></td>
                                    </tr>
                                <?php

                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <div>
                                <h1>Data Kriteria Perhitungan Bobot</h1>
                            </div>
                            <thead class="table-head">
                                <tr>
                                    <th>Kriteria</th>
                                    <th>Peny. KUR Mikro</th>
                                    <th>Peny. KUR Sumi</th>
                                    <th>Peny Pinj. UMI</th>
                                    <th>Jumlah Nasabah Umi</th>
                                    <th>OS PL Kupedes</th>
                                    <th>OS PL KUR</th>
                                    <th>OS PL Briguna</th>
                                    <th>% DPK</th>
                                    <th>% NPL</th>
                                    <th>Rec DH</th>
                                    <th>AVG Dly Simp</th>
                                    <th>Nsb Pinjaman</th>
                                    <th>Rek Simpedes</th>
                                    <th>FBI PA</th>
                                    <th>Merchant</th>
                                    <th>Stroberi Kasir</th>
                                    <th>StroberiTagihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cost/Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                    <td>Benefit</td>
                                </tr>
                                <tr>
                                    <td>weight</td>
                                    <td>7%</td>
                                    <td>4%</td>
                                    <td>7%</td>
                                    <td>2%</td>
                                    <td>10%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>5%</td>
                                    <td>7%</td>
                                    <td>7%</td>
                                    <td>8%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                    <td>6%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="table-reponsive">
                        <table id="example" class="table table-striped table-bordered">
                            <div>
                                <h1>Nilai Minimal - Maksimal Data Alternatif</h1>
                            </div>
                            <thead class="table-head">
                                <tr>
                                    <th>Kriteria</th>
                                    <th>Peny. KUR Mikro</th>
                                    <th>Peny. KUR Sumi</th>
                                    <th>Peny Pinj. UMI</th>
                                    <th>Jumlah Nasabah Umi</th>
                                    <th>OS PL Kupedes</th>
                                    <th>OS PL KUR</th>
                                    <th>OS PL Briguna</th>
                                    <th>% DPK</th>
                                    <th>% NPL</th>
                                    <th>Rec DH</th>
                                    <th>AVG Dly Simp</th>
                                    <th>Nsb Pinjaman</th>
                                    <th>Rek Simpedes</th>
                                    <th>FBI PA</th>
                                    <th>Merchant</th>
                                    <th>Stroberi Kasir</th>
                                    <th>StroberiTagihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nilai Max</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-header">
                    <h1>Data Crips</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <td>NO</td>
                                    <td>PN</td>
                                    <td>Peny. KUR Mikro</td>
                                    <td>Peny. KUR Sumi</td>
                                    <td>Peny Pinj. UMI</td>
                                    <td>Jumlah Nasabah Umi</td>
                                    <td>OS PL Kupedes</td>
                                    <td>OS PL KUR</td>
                                    <td>OS PL Briguna</td>
                                    <td>% DPK</td>
                                    <td>% NPL</td>
                                    <td>Rec DH</td>
                                    <td>AVG Dly Simp</td>
                                    <td>Nsb Pinjaman</td>
                                    <td>Rek Simpedes</td>
                                    <td>FBI PA</td>
                                    <td>Merchant</td>
                                    <td>Stroberi Kasir</td>
                                    <td>StroberiTagihan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($capaian as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['pn'] ?></td>
                                        <?php
                                        $row_normalization_data = []; // Array untuk menyimpan hasil normalisasi per baris
                                        for ($i = 1; $i <= 17; $i++) {
                                            $column_name = 'c' . $i;
                                            $value = $data[$column_name];
                                            $result = 0; // Default value

                                            if ($value !== null && $value !== 0) {
                                                if ($value >= 110) {
                                                    $result = 4;
                                                } elseif ($value >= 100 && $value < 110) {
                                                    $result = 3;
                                                } elseif ($value >= 85 && $value < 100) {
                                                    $result = 2;
                                                } elseif ($value > 0 && $value < 85) {
                                                    $result = 1;
                                                }
                                            } else {
                                                $result = 0;
                                            }

                                            echo "<td>$result</td>";
                                            $row_normalization_data[$column_name] = $result; // Simpan hasil normalisasi per baris
                                        }
                                        ?>
                                    </tr>
                                <?php
                                    $no += 1;
                                    $normalization_data[''] = $row_normalization_data; // Simpan hasil normalisasi per baris dalam array
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered">
                        <div>
                            <h1>Data Ternomalisasi</h1>
                        </div>
                        <thead class="table-head">
                            <tr>
                                <th>NO</th>
                                <th>PN</th>
                                <th>Peny. KUR Mikro</th>
                                <th>Peny. KUR Sumi</th>
                                <th>Peny Pinj. UMI</th>
                                <th>Jumlah Nasabah Umi</th>
                                <th>OS PL Kupedes</th>
                                <th>OS PL KUR</th>
                                <th>OS PL Briguna</th>
                                <th>% DPK</th>
                                <th>% NPL</th>
                                <th>Rec DH</th>
                                <th>AVG Dly Simp</th>
                                <th>Nsb Pinjaman</th>
                                <th>Rek Simpedes</th>
                                <th>FBI PA</th>
                                <th>Merchant</th>
                                <th>Stroberi Kasir</th>
                                <th>StroberiTagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($normalization_data as $norm_data) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['pn'] ?></td>
                                    <td><?= number_format($norm_data['c1'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c2'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c3'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c4'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c5'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c6'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c7'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c8'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c9'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c10'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c11'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c12'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c13'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c14'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c15'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c16'] / 4, 2) ?></td>
                                    <td><?= number_format($norm_data['c17'] / 4, 2) ?></td>
                                </tr>
                            <?php
                                $no += 1;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered">
                        <div>
                            <h1>Hasil Akhir</h1>
                        </div>
                        <thead class="table-head">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama</th>
                                <th class="align-middle" scope="col">Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                $i = 0;
                                foreach ($capaian as $data) {
                                    if (++$i == 848) break;
                                ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['pn'] ?></td>
                                <td><?= $data['hasil_saw'] ?></td>
                            </tr>
                        <?php
                                } ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Inter", sans-serif;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        padding: 20px;
        max-width: 550px;
        width: 100%;
        background: white;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }

    .formbold-input-flex>div {
        width: 50%;
    }

    .formbold-form-input {
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #DDE3EC;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #FFA500;
        outline: none;
        resize: none;
    }

    .formbold-form-input::placeholder {
        color: #536387;
    }

    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
        color: #FFA500;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
    }

    .formbold-btn {
        text-align: center;
        width: 100%;
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #005197;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .table-head {
        background-color: #005197;
    }

    .twrap {
        width: 100%;
        overflow-x: auto;
    }
</style>

<?= $this->endSection() ?>