<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Azea - Admin Panel HTML template" name="description">
    <meta content="Spruko Private Limited" name="author">
    <meta name="keywords" content="admin, admin dashboard template in php, admin panel bootstrap php theme, admin panel in php, admin panel template, admin template, best php admin panel, bootstrap 5 admin dashboard templates, dashboard, dashboard template, php admin panel, php admin panel template, php, admin template, php dashboard template, php framework">

    <!-- Title -->
    <title>Eagleye</title>

    <!--Favicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/images/brand/BRI-1.png" type="image/x-icon" />

    <!--Bootstrap css -->
    <link href="<?= base_url("") ?>/assets/plugins/bootstrap5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style css -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/dark.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="<?= base_url() ?>/assets/css/animated.css" rel="stylesheet" />


    <!-- P-scroll bar css-->
    <link href="<?= base_url() ?>/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

    <!---Icons css-->
    <link rel="stylesheet" href="<?= base_url("") ?>/assets/plugins/fontawesome6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Color Skin css -->
    <link id="theme" href="<?= base_url() ?>/assets/colors/color1.css" rel="stylesheet" type="text/css" />

    <!-- INTERNAL Switcher css -->
    <link href="<?= base_url() ?>/assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/switcher/demo.css" rel="stylesheet" />
    <!-- Data table css -->
    <link href="<?= base_url() ?>/assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css" rel="stylesheet" />

    <!-- Slect2 css -->
    <link href="<?= base_url() ?>/assets/plugins/select2/select2.min.css" rel="stylesheet" />
    <!-- Jquery js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->

</head>

<body class="app sidebar-mini">

    <?= $this->include('template/switcher') ?>

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?= base_url() ?>/assets/images/svgs/my-loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            <?= $this->include('template/sidebar') ?>

            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">

                    <?= $this->include('template/header') ?>

                    <?= $this->renderSection('content') ?>

                </div>
            </div>

        </div>
        <?= $this->include('template/footer') ?>
    </div>

    <!-- End Page -->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa-solid fa-chevron-up"></i></a>

    <!-- Bootstrap5 js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url("") ?>/assets/plugins/bootstrap5/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--Othercharts js-->
    <script src="<?= base_url("") ?>/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="<?= base_url("") ?>/assets/js/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="<?= base_url("") ?>/assets/plugins/rating/jquery.rating-stars.js"></script>

    <!--Sidemenu js-->
    <script src="<?= base_url() ?>/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- P-scroll js-->
    <script src="<?= base_url() ?>/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/p-scrollbar/p-scroll1.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/p-scrollbar/p-scroll.js"></script>

    <!-- Custom js-->
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="<?= base_url() ?>/assets/switcher/js/switcher.js"></script>
    <!-- INTERNAL Data tables -->
    <script src="<?= base_url() ?>/assets/plugins/datatables/DataTables/js/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/JSZip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/datatables.js"></script>

    <!-- INTERNAL Select2 js -->
    <script src="<?= base_url() ?>/assets/plugins/select2/select2.full.min.js"></script>
    <!-- <script src="<?= base_url() ?>/assets/js/select2.js"></script> -->

</body>

</html>