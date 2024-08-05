<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?= base_url() ?>asset/img/favicon.png" type="image/png">
        <title>Cebastien</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
        <link rel="stylesheet" href="<?= base_url() ?>asset/css/responsive.css">
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    </head>
    <body>
        
        
        
       
        
        <?= view('pre/header') ?>
        <?= $this->renderSection('content') ?>
        <?= view('pre/toast_view') ?>
        <?= view('pre/footer') ?>
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url() ?>asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?= base_url() ?>asset/js/popper.js"></script>
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>asset/js/stellar.js"></script>
        <script src="<?= base_url() ?>asset/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/isotope/isotope-min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>asset/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url() ?>asset/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="<?= base_url() ?>asset/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?= base_url() ?>asset/js/gmaps.min.js"></script>
        <script src="<?= base_url() ?>asset/js/theme.js"></script>
    </body>
</html>