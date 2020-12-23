<?php 
    date_default_timezone_set('Asia/Jakarta');    
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <meta name="description" content="<?= $description ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/public/images/logo/logo.png" type="image/x-icon">
        <link rel="icon" href="<?= base_url() ?>assets/public/images/logo/logo.png" type="image/x-icon">

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/app.css"
              rel="stylesheet">

        <?= "<script>var site_url = '".site_url()."'; var base_url = '".base_url()."';</script>" ?>

        <script src="<?= base_url() ?>assets/public/vendor/jquery.min.js"></script>
        <script src="<?= base_url() ?>dist/js/login.js"></script>

    </head>

    <body class="layout-compact layout-compact">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Drawer Layout -->

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->                
                <div class="navbar navbar-expand navbar-light border-bottom-2"
                     id="default-navbar"
                     data-primary>
                    
                    <a href=""
                       class="navbar-brand mr-16pt ">
                        <!-- <img class="navbar-brand-icon" src="<?= base_url() ?>assets/public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-md navbar-brand-icon mr-0 mr-lg-8pt">
                            <span class="avatar-title">
                                <img src="<?= base_url() ?>assets/public/images/025-webinar.png"
                                     alt="logo"
                                     class="img-fluid" />
                            </span>
                        </span>

                    </a>
                    <small class="flex d-flex flex-column">
                        <strong class="navbar-text-100">Login - ASID</strong>
                        <span class="navbar-text-50">Aplikasi Analisa Sentimen v.1.0</span>
                    </small>

                </div>
                <!-- // END Header -->

                <!-- BEFORE Page Content -->

                <!-- // END BEFORE Page Content -->

                <!-- Page Content -->

                <div class="pt-128pt pt-sm-64pt pb-32pt">
                    <div class="container page__container">
                        <form id="loginForm" class="col-md-5 p-0 mx-auto" autocomplete="off">
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email / No. HP:</label>
                                <input id="email_no_hp"
                                       type="text"
                                       class="form-control"
                                       placeholder="Masukkan Email atau No. HP ...">                                
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <input id="password"
                                       type="password"
                                       class="form-control"
                                       placeholder="Masukkan Password ...">                                
                            </div>      
                            <p class="text-left text-danger validation-message" style="display: none">
                                    <span class="small">Password belum diisi</span></p>
                            <p class="text-right"><a href=""
                                    class="small">Lupa password?</a></p>                      
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-block btn-rounded" id="loginBtn">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>                

                <!-- // END Page Content -->

                <!-- Footer -->

                <div class="bg-white border-top-2 mt-auto">
                    <div class="container page__container page-section d-flex flex-column">
                        <p class="text-70 brand mb-24pt">
                            <img class="brand-icon"
                                 src="<?= base_url() ?>assets/public/images/smart-lms.png"
                                 width="50"
                                 alt=""> Sentimen Analysis ID
                        </p>
                        <p class="measure-lead-max text-50 small mr-8pt"></p>
                        <p class="mb-8pt d-flex">
                            <a href=""
                               class="text-70 text-underline mr-8pt small">Tutorial</a>
                            <a href=""
                               class="text-70 text-underline mr-8pt small">FAQ</a>
                            <a href=""
                               class="text-70 text-underline mr-8pt small">Syarat dan ketentuan</a>
                            <a href=""
                               class="text-70 text-underline small">Berlangganan ke premium</a>
                        </p>
                        <p class="text-50 small mt-n1 mb-0">Copyright <?= date('Y') ?> &copy; sentimenanalysis.id</p>
                    </div>
                </div>

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            

        </div>

        <!-- // END Drawer Layout -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/public/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?= base_url() ?>assets/public/vendor/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/public/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?= base_url() ?>assets/public/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="<?= base_url() ?>assets/public/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="<?= base_url() ?>assets/public/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?= base_url() ?>assets/public/js/app.js"></script>

        <!-- Preloader -->
        <script src="<?= base_url() ?>assets/public/js/preloader.js"></script>

        <!-- Sidebar Mini JS -->
        <script src="<?= base_url() ?>assets/public/js/sidebar-mini.js"></script>

    </body>

</html>