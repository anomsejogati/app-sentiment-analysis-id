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

      <link type="text/css" 
            href="<?= base_url() ?>assets/public/fonts/batch-icons/style.css" 
            rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/app.css?v=<?= date('YmdHis') ?>"
              rel="stylesheet">

      <!-- Magnific Popup -->
      <link href="<?= base_url() ?>assets/public/css/magnific-popup.css" rel="stylesheet" type="text/css">
      
        <!-- Toastr -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/vendor/toastr.min.css"
              rel="stylesheet">
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/toastr.css"
              rel="stylesheet">


        <!-- Flatpickr -->
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/flatpickr.css"
              rel="stylesheet">
        <link type="text/css"
              href="<?= base_url() ?>assets/public/css/flatpickr-airbnb.css"
              rel="stylesheet">

      <!-- Quill Theme -->
      <link type="text/css"
              href="<?= base_url() ?>assets/public/css/quill.css"
              rel="stylesheet">

      <!-- DateRangePicker -->
      <link type="text/css"
            href="<?= base_url() ?>assets/public/vendor/daterangepicker.css"
            rel="stylesheet">

      <!-- Select2 -->
      <link type="text/css"
              href="<?= base_url() ?>assets/public/css/select2.css"
              rel="stylesheet">
      <link type="text/css"
              href="<?= base_url() ?>assets/public/vendor/select2/select2.min.css"
              rel="stylesheet">

      <!-- Touchspin -->
      <link type="text/css"
              href="<?= base_url() ?>assets/public/css/bootstrap-touchspin.css"
              rel="stylesheet">

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <?= "<script>var site_url = '".site_url()."'; var base_url = '".base_url()."';</script>" ?>

      <script src="<?= base_url() ?>assets/public/vendor/jquery.min.js"></script>

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
        </div>

        <!-- Drawer Layout -->

        <div class="mdk-drawer-layout js-mdk-drawer-layout"
             data-push
             data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page-content">

                <!-- Header -->

                <!-- Navbar -->

                <?php $this->load->view('teachers/header'); ?>

                <!-- // END Navbar -->

                <!-- // END Header -->

                <?php $this->load->view('teachers/'.$content); ?>                

                <!-- Footer -->

                <?php $this->load->view('teachers/footer'); ?>

                <!-- // END Footer -->

            </div>

            <!-- // END drawer-layout__content -->

            <!-- drawer -->
            <?php $this->load->view('teachers/menu-left'); ?>
            <!-- // END drawer -->

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

        <script type="text/javascript" src="<?= base_url() ?>assets/public/js/jquery.magnific-popup.js"></script>

        <!-- Preloader -->
        <script src="<?= base_url() ?>assets/public/js/preloader.js"></script>

        <!-- Flatpickr -->
        <script src="<?= base_url() ?>assets/public/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/flatpickr.js"></script>

        <!-- DateRangePicker -->
        <script src="<?= base_url() ?>assets/public/vendor/moment.min.js"></script>
        <script src="<?= base_url() ?>assets/public/vendor/daterangepicker.js"></script>
        <script src="<?= base_url() ?>assets/public/js/daterangepicker.js"></script>

        <!-- Global Settings -->
        <script src="<?= base_url() ?>assets/public/js/settings.js"></script>

        <!-- Chart.js -->
        <script src="<?= base_url() ?>assets/public/vendor/Chart.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/chartjs-rounded-bar.js"></script>
        <script src="<?= base_url() ?>assets/public/js/chartjs.js"></script>

        <!-- Chart.js Samples -->
        <script src="<?= base_url() ?>assets/public/js/page.staff.js"></script>

        <!-- List.js -->
        <script src="<?= base_url() ?>assets/public/vendor/list.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/list.js"></script>

        <!-- Tables -->
        <script src="<?= base_url() ?>assets/public/js/toggle-check-all.js"></script>
        <script src="<?= base_url() ?>assets/public/js/check-selected-row.js"></script>

        <!-- Quill -->
        <script src="<?= base_url() ?>assets/public/vendor/quill.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/quill.js"></script>

        <!-- Toastr -->
        <script src="<?= base_url() ?>assets/public/vendor/toastr.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/toastr.js"></script>

        <!-- Select2 -->
        <script src="<?= base_url() ?>assets/public/vendor/select2/select2.min.js"></script>
        <script src="<?= base_url() ?>assets/public/js/select2.js"></script>

        <!-- Touchspin -->
        <script src="<?= base_url() ?>assets/public/vendor/jquery.bootstrap-touchspin.js"></script>
        <script src="<?= base_url() ?>assets/public/js/touchspin.js"></script>

        <!-- Sidebar Mini JS -->
        <script src="<?= base_url() ?>assets/public/js/sidebar-mini.js"></script>
        <script>
            (function() {
                'use strict';
                // ENABLE sidebar menu tabs
                $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
                $('.js-sidebar-mini-tabs').on('show.bs.tab', function(e) {
                    $('.js-sidebar-mini-tabs > .active').removeClass('active')
                    $(e.target).parent().addClass('active')
                })
            })()
        </script>

    </body>

</html>