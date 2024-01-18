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
    <link href="<?= base_url() ?>/assets/plugins/bootstrap5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style css -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/dark.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="<?= base_url() ?>/assets/css/animated.css" rel="stylesheet" />

    <!---Icons css-->
    <link rel="stylesheet" href="<?= base_url("") ?>/assets/plugins/fontawesome6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Color Skin css -->
    <link id="theme" href="<?= base_url() ?>/assets/colors/color1.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="<?= base_url() ?>/assets/images/svgs/my-loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <div class="register1">
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="row p-0 m-0">
                                        <div class="col-lg-6 p-0">
                                            <div class="text-justified text-white overflow-hidden">
                                                <div class="custom-content text-center">
                                                    <img src="<?= base_url() ?>/assets/images/brand/BRI.png" class="" style="width: 200px; margin-top: 100px">
                                                    <div class="mb-5 br-7">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                            <div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                                                <div class="card-body">
                                                    <div class="text-center mb-3">
                                                        <h1 class="mb-2">Log In</h1>
                                                        <a href="javascript:void(0);" class="">Hello There !</a>
                                                    </div>
                                                    <?php if (session()->getFlashdata('msg')) : ?>
                                                        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                                    <?php endif; ?>
                                                    <form class="mt-5" method="POST" action="<?= base_url('login/auth') ?>">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-user"></i>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group" id="Password-toggle">
                                                                <a href="" class="input-group-text">
                                                                    <i class="fa-solid fa-lock" aria-hidden="true"></i>
                                                                </a>
                                                                <input class="form-control" type="password" placeholder="Password" name="password" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" />
                                                                <span class="custom-control-label">Remember Me</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group text-center mb-3">
                                                            <input type="submit" class="btn btn-lg w-100 br-7 text-white" style="background-color: #005197;" value="Login">
                                                        </div>
                                                        <div class="form-group fs-13 text-center">
                                                            <a href="forgot-password-1.php">Forget Password ?</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Page -->
    <!-- Jquery js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap5 js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url("") ?>/assets/plugins/bootstrap5/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--Othercharts js-->
    <script src="<?= base_url() ?>/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!-- Circle-progress js-->
    <script src="<?= base_url() ?>/assets/js/circle-progress.min.js"></script>

    <!-- Jquery-rating js-->
    <script src="<?= base_url() ?>/assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- Show Password -->
    <script src="<?= base_url() ?>/assets/js/bootstrap-show-password.min.js"></script>

    <!-- Custom js-->
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>


</body>

</html>