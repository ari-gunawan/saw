<?= $this->extend('template/main') ?>
<?= $this->section('content') ?>


<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <select name="kanca1" id="kanca1" class="uker1 js-states form-control select2">
                    <option value="">Pilih Kanca</option>
                    <?php foreach ($datatable as $data) : ?>
                        <option value="<?= $data['KANCA']; ?>"><?= $data['KANCA']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-head">
                            <tr>
                                <th>NO</th>
                                <th>PN</th>
                                <th>NAMA</th>
                                <th>KANCA</th>
                                <th>UNIT</th>
                                <th>VIEW</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($datatable as $value) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['PN'] ?></td>
                                    <td><?= $value['NAMA'] ?></td>
                                    <td><?= $value['KANCA'] ?></td>
                                    <td><?= $value['UNIT'] ?></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="<?= base_url('ListKaryawan/detail/' . $value['PN']) ?>" type="button" class="btn view_data btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="100%">
                                                <path fill="#FF7900" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                            </svg>
                                        </a>
                                        <a href="<?= base_url('ListKaryawan/editView/' . $value['PN']) ?>" data-id="<?php echo $value['PN']; ?>" type="button" data-toggle="model" data-target="modalUbah" class="btn  btn-edit btn-primary btn-sm" id="btn-edit">
                                        </a>
                                    </td>

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
    $('#kanca').on('change', function() {
        // alert(this.value)
        $.ajax({
            url: 'updata/unit',
            method: 'GET',
            data: {
                "KANCA": this.value
            },
            success: function(data) {
                response = JSON.parse(data)

                if (response.status) {
                    $('#unit').empty()
                    $('#unit').append(new Option('--Pilih Unit--', '', false))
                    $.each(response.data, function(index, item) {
                        $('#unit').append(new Option(item.unit, false));
                    });
                }
            }

        })

    })


    $(document).ready(function() {
        $('#kanca').select2();
        $('#unit').select2();
    });
</script>

<?= $this->endSection() ?>