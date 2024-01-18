<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="page-title mb-0 text-primary">Entry Data Kinerja Karyawan</h4>
            </div>
            <div class="card-body">
                <form method="post" action="/calculate-saw">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="searchDropdown">Unit Kerja</label>
                            <?php
                            if (session()->getFlashdata('message')) {
                            ?>
                                <div class="alert alert-info">
                                    <?= session()->getFlashdata('message') ?>
                                </div>
                            <?php
                            }
                            ?>
                            <form method="post" action="/capaian/simpanExcel" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>File Excel</label>
                                    <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Upload</button>
                                </div>
                            </form>
                            <div class="input-group">
                                <select name="uker" id="uker" class="uker js-states form-control select2">
                                    <option value="">--Pilih Uker--</option>
                                    <?php
                                    foreach ($uker as $data) {
                                    ?>
                                        <option value="<?= $data['id_branch'] ?>"><?= $data['uker'] ?></option>
                                    <?php

                                    } ?>
                                </select>
                                <!-- <input type="text" class="form-control" id="searchDropdown" placeholder="Search Unit Kerja">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="dropdown-menu" id="searchResults" aria-labelledby="searchDropdown">
                                        
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="searchDropdown">Nama</label>
                            <div class="input-group">
                                <select name="nama_pekerja" id="nama_pekerja" class="select2 form-control">

                                </select>

                                <!-- <input type="text" class="form-control" id="searchDropdown" placeholder="Type PN or Name..">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="dropdown-menu" id="searchResults" aria-labelledby="searchDropdown"> -->
                                <!-- Search results will be displayed here -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <input type="int" readonly class="form-control-plaintext" name="tahun" id="tahun" value="2023">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penyaluran KUR Mikro (%)</label>
                        <input type="float" class="form-control" name="c1" id="c1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penyaluran KUR Super Mikro (%)</label>
                        <input type="float" class="form-control" name="c2" id="c2" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penyaluran Pinjaman UMI (%)</label>
                        <input type="float" class="form-control" name="c3" id="c3" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Nasabah Umi (%)</label>
                        <input type="float" class="form-control" name="c4" id="c4" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">OS PL Kupedes (%)</label>
                        <input type="float" class="form-control" name="c5" id="c5" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">OS PL KUR (%)</label>
                        <input type="float" class="form-control" name="c6" id="c6" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">OS PL Briguna (%)</label>
                        <input type="float" class="form-control" name="c7" id="c7" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pecapaian DPK (%)</label>
                        <input type="float" class="form-control" name="c8" id="c8" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pecapaian NPL (%)</label>
                        <input type="float" class="form-control" name="c9" id="c9" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pecapaian Rp. Recovery DH (%)</label>
                        <input type="float" class="form-control" name="c10" id="c10" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daily Average Simpedes (%)</label>
                        <input type="float" class="form-control" name="c11" id="c11" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Nasabah Pinjaman (%)</label>
                        <input type="float" class="form-control" name="c12" id="c12" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Nasabah Rekening Simpedes (%)</label>
                        <input type="float" class="form-control" name="c13" id="c13" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">FBI Perusahaan Anak (%)</label>
                        <input type="float" class="form-control" name="c14" id="c14" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Merchant QRIS (%)</label>
                        <input type="float" class="form-control" name="c15" id="c15" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah User Stroberi Kasir (%)</label>
                        <input type="float" class="form-control" name="c16" id="c16" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Pengguna Stroberi Tagihan (%)</label>
                        <input type="float" class="form-control" name="c17" id="c17" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


        <!-- <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div> -->
    </div>

</div>
</div>
</div>


<!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="javascript:history.back()" class="btn btn-primary">Kembali</a>
    <a class="btn btn-warning">Edit</a>
    <a id="btn-show-sweetalert2" class="btn btn-danger">Batalkan</a>
</div> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet"> -->

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

<script>
    // alert(1)
    // Function to filter search results
    // function filterResults() {
    //     var input, filter, dropdown, items, text;
    //     input = document.getElementById('searchDropdown');
    //     filter = input.value.toUpperCase();
    //     dropdown = document.getElementById('searchResults');
    //     items = dropdown.getElementsByTagName('a');

    //     for (var i = 0; i < items.length; i++) {
    //         text = items[i].textContent || items[i].innerText;
    //         if (text.toUpperCase().indexOf(filter) > -1) {
    //             items[i].style.display = '';
    //         } else {
    //             items[i].style.display = 'none';
    //         }
    //     }
    // }
    $('#uker').on('change', function() {
        // alert(this.value)
        $.ajax({
            url: 'updata/get_nama_pekerja',
            method: 'GET',
            data: {
                "uker": this.value
            },
            success: function(data) {
                response = JSON.parse(data)

                if (response.status) {
                    $('#nama_pekerja').empty()
                    $('#nama_pekerja').append(new Option('--Pilih Pekerja--', '', false, false))
                    $.each(response.data, function(index, item) {
                        $('#nama_pekerja').append(new Option(item.nama, item.pn, false, false));
                    });
                }
            }

        })

    })



    // Fetch data from the server
    // $.ajax({
    //     url: "<?php echo base_url('dropdown/getUker'); ?>",
    //     method: "GET",
    //     dataType: "json",
    //     success: function(data) {
    //         // Populate dropdown with data from the server
    //         data.forEach(function(uker) {
    //             $('#searchResults').append('<a class="dropdown-item" href="#">' + uker.id_branch + '</a>');
    //         });
    //     }
    // });
    $(document).ready(function() {
        $('#uker').select2();
        $('#nama_pekerja').select2();
    });


    // Attach event listener to search input
    // $('#searchDropdown').on('input', function() {
    //     filterResults();
    // });



    // function test() {
    //     $.ajax({
    //         url: "<?php echo base_url('dropdown/get_uker'); ?>",
    //         method: "GET",
    //         dataType: "json",
    //         success: function(data) {
    //             console.log(data)
    //             // Populate dropdown with data from the server
    //             // data.forEach(function(uker) {
    //             //     $('#searchResults').append('<a class="dropdown-item" href="#">' + uker.id_branch + '</a>');
    //             // });
    //         }
    //     });
    // }
    // test();

    // Prevent dropdown from closing on search input click
    // $('#searchDropdown, #searchResults').on('click', function(e) {
    //     e.stopPropagation();
    // });
</script>


<?= $this->endSection() ?>