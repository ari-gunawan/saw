<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>

<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Data Pribadi</h4>
    </div>
</div>
<!--End Page header-->

<!-- Row-1 -->
<!-- Row -->
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-12">
        <div class="card box-widget widget-user">
            <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="../../assets/images/users/2.jpg"></div>
            <div class="card-body text-center">
                <div class="pro-user">
                    <h4 class="pro-user-username mb-1 font-weight-bold">Patrenna</h4>
                    <h6 class="pro-user-desc text-muted">UI UX Designer</h6>
                    <a href="javascript:void(0);" class="btn btn-success mt-3"><i class="fa fa-user-pen me-2"></i>Edit Profile</a>
                    <a href="javascript:void(0);" class="btn btn-primary mt-3"><i class="fa fa-key me-2"></i> Edit Password</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact Details</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <td class=""> <span class="font-weight-semibold w-50">No Telepon </span> </td>
                                <td class="">0215678452</td>
                            </tr>
                            <tr>
                                <td class=""> <span class="font-weight-semibold w-50">No Handphone </span> </td>
                                <td class="">082290753674</td>
                            </tr>
                            <tr>
                                <td class=""> <span class="font-weight-semibold w-50">Emergency Number </span> </td>
                                <td class="">08956829832</td>
                            </tr>
                            <tr>
                                <td class=""> <span class="font-weight-semibold w-50">Email </span> </td>
                                <td class="">georgemestayer@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12">
        <div class="main-content-body main-content-body-profile card">
            <div class="card-header">
                <h3 class="card-title">Personal Details</h3>
            </div>
            <div class="main-profile-body">
                <div class="card-body">
                    <div class="main-profile-bio mb-5">
                        <table style="width:100%">
                            <tr>
                                <th>Personal Number</th>
                                <td>: 90149988</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>: Ananda Arya</td>
                            </tr>
                            <tr>
                                <th>No KTP</th>
                                <td>: 36749087677566</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <td>: Jakarta, 10-02-2010</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>: Laki - Laki</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: Jl. Utama Jakarta No 270</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>: Islam</td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>: O</td>
                            </tr>
                            <tr>
                                <th>Status Pernikahan</th>
                                <td>: Kawin</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Education</h3>
            </div>
            <div class="card-body">
                <div class="main-profile-contact-list d-lg-flex">
                    <table style="width:100%">
                        <thead>
                            <th>Tingkat Pendidikan</th>
                            <th>Nama Sekolah</th>
                            <th>Fakultas</th>
                            <th>Nilai/IPK</th>
                            <th>Tahun Lulus</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kuliah</td>
                                <td>Universitas XXX XXX </td>
                                <td>IT</td>
                                <td>3.44</td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>SMA</td>
                                <td>SMA Negeri </td>
                                <td>Multimedia</td>
                                <td>32.25</td>
                                <td>2018</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Family</h3>
            </div>
            <div class="card-body">
                <table style="width:100%">
                    <thead>
                        <th>Anggota Keluarga</th>
                        <th>Nama</th>
                        <th>Pendidikan</th>
                        <th>Pekerjaan</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ayah</td>
                            <td>Arya</td>
                            <td>SMA</td>
                            <td>Pekerja</td>
                        </tr>
                        <tr>
                            <td>Ayah</td>
                            <td>Arya</td>
                            <td>SMA</td>
                            <td>Pekerja</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<?= $this->endSection() ?>