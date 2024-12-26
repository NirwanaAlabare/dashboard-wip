<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <link rel="icon" href="<?= base_url('tabicon.png'); ?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/bootstrap/bootstrap-datetimepicker.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- apexchart -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/apexchart/apexcharts.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/animate/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

  <style type="text/css">
    .card {
      background: linear-gradient(to right, #000046, #1cb5e0);
    }

    .wrapper {
      background-color: #121847;
    }

    .show-defect-area {
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
    }

    .show-defect-area .defect-area-img-container {
      position: relative;
      display: inline-block;
      justify-content: center;
      align-items: center;
    }

    .show-defect-area .defect-area-img-container .defect-area-img {
      width: auto;
      height: 500px;
    }

    .show-defect-area .defect-area-img-container .defect-area-img-point {
      position: absolute;
      width: 5px;
      height: 5px;
      background-color: #FFA07A;
      border-radius: 50%;
      opacity: 70%;
      z-index: 99999;
    }

    #defno1text::after {
      content: '';
      display: inline-block;
      width:25px;
      height:25px;
      border-radius: 50%;
      background: #ec3032;
      top: 10px;
      margin: 0 10px;
      transform: translateY(4px);
    }

    #defno2text::after {
      content: '';
      display: inline-block;
      width:25px;
      height:25px;
      border-radius: 50%;
      background: #fd8024;
      top: 10px;
      margin: 0 10px;
      transform: translateY(4px);
    }

    #defno3text::after {
      content: '';
      display: inline-block;
      width:25px;
      height:25px;
      border-radius: 50%;
      background: #fffb45;
      top: 10px;
      margin: 0 10px;
      transform: translateY(4px);
    }

    #defno4text::after {
      content: '';
      display: inline-block;
      width:25px;
      height:25px;
      border-radius: 50%;
      background: #2bff6b;
      top: 10px;
      margin: 0 10px;
      transform: translateY(4px);
    }

    #defno5text::after {
      content: '';
      display: inline-block;
      width:25px;
      height:25px;
      border-radius: 50%;
      background: whitesmoke;
      top: 10px;
      margin: 0 10px;
      transform: translateY(4px);
    }

    
  </style>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini bg-dark">
  <?php log_message('info', 'Berhasil mengakses menu di AR'); ?>
  <div class="wrapper">