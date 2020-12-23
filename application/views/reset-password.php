<?php 
    $api_reset = base_url('api/server/login.php');
    $base_url = base_url();
?>

<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <link rel="icon" href="<?= base_url() ?>../assets-sys/assan/images/maulogo1.png">
        <!-- Bootstrap-->
        <link href="<?= base_url() ?>../assets-sys/assan/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="<?= base_url() ?>../assets-sys/assan/css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="<?= base_url() ?>../assets-sys/assan/lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="<?= base_url() ?>../assets-sys/assan/lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>../assets-sys/assan/lib/sweet-alerts2/sweetalert2.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>../assets-sys/assan/css/sweet-alert-custom.css" rel="stylesheet">
        <link href="<?= base_url() ?>../assets-sys/assan/css/style.css" rel="stylesheet">
        <script src="<?= base_url() ?>../assets-sys/assan/lib/jquery/dist/jquery.min.js"></script>
        <?= "<script>
            var url_api = '$api_reset';
            var base_url = '$base_url';
            </script>" 
        ?>
	    <script src="<?= base_url() ?>dist/js/login.js?<?= date('Ymdhis') ?>"></script>
    </head>
    <body class='bg-dark'>

        <div class="page-wrapper" id="page-wrapper">

            <main class="content">

                <div class="container-fluid flex d-flex">
                    <div class='row d-flex flex align-items-center'>
                        <div class='col-6  full-height d-flex flex h-lg-down bg-pattern bg-fHeight' style='background-image: url(../assets-sys/assan/images/reset-password.jpg); background-repeat: no-repeat; background-size: 100% 60%;'>

                        </div>
                        <div class='col-lg-3 col-md-4 col-sm-6 ml-auto mr-auto d-flex flex align-items-center full-height pt-20 pb-20 align-items-center'>
                            <div class="w100 d-block">
                                 <a href="<?= site_url('login') ?>"><span class="avatar avatar100 ml-auto mr-auto text-white bg-primary rounded-circle">  
                                     <i class="icon-Key-2"></i></span></a>
                                <div class="title-sep text-center sep-dark mt-20 mb-30">
                                    <span class='font600 fs16'>Recover Password</span>
                                </div>
                                    <form role="form">
                                        <div class="input-icon-group input-icon-lg input-icon-dark">
                                            <div class="d-flex flex flex-row">
                                                <div class="flex d-flex ml-auto">
                                                    <b class="text-danger fs12 msg-validation"></b>
                                                </div>
                                           </div>
                                            <div class='input-icon-append'>
                                                <i class="icon-Email"></i>
                                                <input id="email" placeholder="Email" type="email" class="form-control form-control-light">
                                            </div>
                                        </div>
                                        <div class="row input-loading">
                                            <div class="col-sm-12 text-center mb-3">
                                              <img src="<?= base_url() ?>../assets-sys/assan/images/preload-101.gif" />
                                            </div>
                                        </div>
                                        <button id="btnReset" type="button" class="btn btn-gradient-danger btn-lg d-flex ml-auto mr-auto btn-icon">
                                            <i class="icon-Link"></i>
                                            Reset Password</button>
                                        <div class="pt-20 fs12 text-muted text-center">
                                           We'll send you an email with new password.
                                        </div>                                        
                                    </form>
                            </div>
                        </div>
                    </div>
                </div><!-- main end-->

            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="<?= base_url() ?>../assets-sys/assan/js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="<?= base_url() ?>../assets-sys/assan/js/appUi-custom.js"></script> 
        <!-- Sweetalerts2 js -->
        <script type="text/javascript" src="<?= base_url() ?>../assets-sys/assan/lib/sweet-alerts2/sweetalert2.min.js"></script>
        <script src="<?= base_url() ?>../assets-sys/assan/js/plugins-custom/sweetalert2-custom.js"></script> 
    </body>
</html>
