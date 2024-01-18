<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="mb-4 mt-4">
        <a href="<?= base_url('ListKaryawan') ?>" class="btn btn-warning">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title mb-0 text-primary">Detail Karyawan</h4>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <?php
                    $displayedData = []; // Array sementara untuk melacak data yang telah ditampilkan

                    foreach ($karyawan as $data) {
                        // Buat kunci unik untuk data yang akan dicek
                        $uniqueKey = $data['Nama_PN_md'] . $data['PN_md'] . $data['psadesc'] . $data['MCTEXT'] . $data['eselon'] . $data['jobdesc'];

                        // Periksa apakah data sudah ditampilkan sebelumnya
                        if (!in_array($uniqueKey, $displayedData)) {
                            // Tampilkan data
                    ?>
                            <tr>
                                <td class="text-primary">Nama</td>
                                <td class="col-10 ">: <?= $data['Nama_PN_md'] ?> </td>
                            </tr>
                            <tr>
                                <td class="text-primary">Personal Number</td>
                                <td>: <?= $data['PN_md'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Kantor Cabang</td>
                                <td>: <?= $data['psadesc'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Kantor Unit</td>
                                <td>: <?= $data['MCTEXT'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Job Grade</td>
                                <td>: <?= $data['eselon'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-primary">Posisi Job</td>
                                <td>: <?= $data['jobdesc'] ?></td>
                            </tr>
                            </tbody>
                    <?php
                            // Tambahkan kunci unik ke array sementara
                            $displayedData[] = $uniqueKey;
                        }
                    } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title mb-0 text-primary">Nilai Karyawan</h4>
            </div>
            <div class="card-body">
                <div class="table-reponsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td class="text-primary">Tahun</td>
                                <td class="text-primary">Peny. KUR Mikro</td>
                                <td class="text-primary">Peny. KUR Sumi</td>
                                <td class="text-primary">Peny Pinj. UMI</td>
                                <td class="text-primary">Jumlah Nasabah Umi</td>
                                <td class="text-primary">OS PL Kupedes</td>
                                <td class="text-primary">OS PL KUR</td>
                                <td class="text-primary">OS PL Briguna</td>
                                <td class="text-primary">% DPK</td>
                                <td class="text-primary">% NPL</td>
                                <td class="text-primary">Rec DH</td>
                                <td class="text-primary">AVG Dly Simp</td>
                                <td class="text-primary">Nsb Pinjaman</td>
                                <td class="text-primary">Rek Simpedes</td>
                                <td class="text-primary">FBI PA</td>
                                <td class="text-primary">Merchant</td>
                                <td class="text-primary">Stroberi Kasir</td>
                                <td class="text-primary">StroberiTagihan</td>
                                <td class="text-primary">Hasil</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            foreach ($karyawan as $data) {
                            ?>
                                <tr>
                                    <td><?= $data['tahun'] ?></td>
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
                                    <td><?= $data['hasil_saw'] ?></td>
                                </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td class="text-primary">Tahun</td>
                                <td class="text-primary">Jenis KPI</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            foreach ($karyawan as $data) {
                            ?>
                                <tr>
                                    <td><?= $data['tahun'] ?></td>
                                    <td><?php
                                    $hasil = $data['hasil_saw'];
                                    if ($hasil <= 0.25) {
                                        echo "1";
                                    } elseif ($hasil >= 0.25 && $hasil <= 0.5) {
                                        echo "2";
                                    } elseif ($hasil >= 0.75 && $hasil <= 0.9) {
                                        echo "3";
                                    } else {
                                        echo "4";
                                    }
                                    ?>
                                </td>
                                </tr>
                        </tbody>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title mb-0 text-primary">Nabasah Terkiat</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td class="text-primary">Nama Debitur</td>
                            <td class="text-primary">Plafond</td>
                            <td class="text-primary">Kolektibilitas</td>
                            <td class="text-primary">Tunggakan</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>xxxxx</td>
                            <td>Cxxx4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title mb-0 text-primary">Rekomendasi Keputusan</h4>
            </div>
            <div class="table-reponsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td class="text-primary">Tahun</td>
                            <td class="text-primary">Jenis rekomendasi</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        foreach ($karyawan as $data) {
                        ?>
                            <tr>
                                <td><?= $data['tahun'] ?></td>
                                <td><?php
                                    $hasil = $data['hasil_saw'];
                                    if ($hasil <= 0.25) {
                                        echo "Surat Peringatan";
                                    } elseif ($hasil >= 0.25 && $hasil <= 0.5) {
                                        echo "Bonus 2 kali gaji pokok";
                                    } elseif ($hasil >= 0.75 && $hasil <= 0.9) {
                                        echo "Bonus 3 kali gaji pokok";
                                    } else {
                                        echo "Bonus 4 kali gaji pokok";
                                    }
                                    ?>
                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
    <a class="btn btn-warning">Edit</a>
    <a id="btn-show-sweetalert2" class="btn btn-danger">Batalkan</a>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
    }

    hr {
        border: none;
        border-top: 1px solid #ccc;
        color: #fff;
        background-color: #fff;
        height: 1px;
        width: 50%;
        margin: 0 auto;
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

    body {
        font-family: "Open Sans",
            -apple-system, BlinkMacSystemFont,
            "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell,
            "Helvetica Neue", Helvetica, Arial, sans-serif;
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
        color: #07074D;
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
        color: #07074D;
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
</style>

<?= $this->endSection() ?>