  <!-- ./wrapper -->
  <!--- MODAL LOGOUT --->
  <div class="modal fade" id="logoutModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ready to Leave?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Select "Logout" below if you are ready to end your current session.</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/Logout'); ?>">Logout</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!--  -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- OPTIONAL SCRIPTS -->
  <script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard3.js"></script>
  <!-- date-range-picker -->
  <script src="<?= base_url('assets/'); ?>plugins/select2/js/select2.full.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!---  crud nag --->
  <script src="<?php echo base_url('assets/build/js/crud/crud-nag.js') ?>"></script>
  <script src="<?php echo base_url('assets/build/js/crud/crud-nag-report.js') ?>"></script>
  <!-- apexchart -->
  <script src="<?= base_url('assets/'); ?>plugins/apexchart/apexcharts.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/apexchart/apexcharts.min.js"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->


  <!-- Toast Informasi -->
  <script>
    $(function() {
          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
  </script>

  <!-- script apex -->
  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl1 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall1 * $smvl1;
    $m_tersedia = $menpowerl1 * $min_;
    $percen_effil1 = $m_prod / $m_tersedia * 100;

    $per_effil1 = round($percen_effil1, 2);
    ?>
    var data = <?= $per_effil1; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line1"), options1).render();
  </script>

  <script type="text/javascript">
    <?php
    $showLogoCard = $setting[0]['logo_card'] ? $setting[0]['logo_card'] : 'show';
    $showLineTimeCard = $setting[0]['linetime_card'] ? $setting[0]['linetime_card'] : 'show';
    $showWsCard = $setting[0]['ws_card'] ? $setting[0]['ws_card'] : 'show';
    $showWorkHourCard = $setting[0]['workhour_card'] ? $setting[0]['workhour_card'] : 'show';
    $showHourTableCard = $setting[0]['hourtable1_card'] ? $setting[0]['hourtable1_card'] : 'show';
    $showHourTableSummaryCard = $setting[0]['hourtablesummary1_card'] ? $setting[0]['hourtablesummary1_card'] : 'show';
    $showActualTargetCard = $setting[0]['actualtarget2_card'] ? $setting[0]['actualtarget2_card'] : 'show';
    $showVarianceCard = $setting[0]['variance2_card'] ? $setting[0]['variance2_card'] : 'show';
    $showDefectReworkCard = $setting[0]['defectrework2_card'] ? $setting[0]['defectrework2_card'] : 'show';
    $showEfficiencyCard = $setting[0]['efficiency2_card'] ? $setting[0]['efficiency2_card'] : 'show';
    $showRftCard = $setting[0]['rft2_card'] ? $setting[0]['rft2_card'] : 'show';
    $showDefectCard = $setting[0]['defect2_card'] ? $setting[0]['defect2_card'] : 'show';
    $showProductImageCard = $setting[0]['productimage3_card'] ? $setting[0]['productimage3_card'] : 'show';
    $showListDefectCard = $setting[0]['listdefect3_card'] ? $setting[0]['listdefect3_card'] : 'show';
    ?>

    let showLogoCard = "<?= $showLogoCard ?>";
    let showLineTimeCard = "<?= $showLineTimeCard ?>";
    let showWsCard = "<?= $showWsCard ?>";
    let showWorkHourCard = "<?= $showWorkHourCard ?>";
    let showHourTableCard = "<?= $showHourTableCard ?>";
    let showHourTableSummaryCard = "<?= $showHourTableSummaryCard ?>";
    let showActualTargetCard = "<?= $showActualTargetCard ?>";
    let showVarianceCard = "<?= $showVarianceCard ?>";
    let showDefectReworkCard = "<?= $showDefectReworkCard ?>";
    let showEfficiencyCard = "<?= $showEfficiencyCard ?>";
    let showRftCard = "<?= $showRftCard ?>";
    let showDefectCard = "<?= $showDefectCard ?>";
    let showProductImageCard = "<?= $showProductImageCard ?>";
    let showListDefectCard = "<?= $showListDefectCard ?>";

    if (document.getElementById('logolinetime')) {
      if (showLogoCard == "hide" && showLineTimeCard == "hide") {
        document.getElementById('logolinetime').classList.add('d-none');
      } else {
        document.getElementById('logolinetime').classList.add('d-block');
      }
    }

    if (document.getElementById('logo')) {
      if (showLogoCard == "hide") {
        document.getElementById('logo').classList.add('d-none');
      } else {
        document.getElementById('logo').classList.add('d-block');
      }
    }

    if (document.getElementById('linetime')) {
      if (showLineTimeCard == "hide") {
        document.getElementById('linetime').classList.add('d-none');
      } else {
        document.getElementById('linetime').classList.add('d-block');
      }
    }

    if (document.getElementById('ws')) {
      if (showWsCard == "hide") {
        document.getElementById('ws').classList.add('d-none');
      } else {
        document.getElementById('ws').classList.add('d-block');
      }
    }

    if (document.getElementById('workhour')) {
      if (showWorkHourCard == "hide") {
        document.getElementById('workhour').classList.add('d-none');
      } else {
        document.getElementById('workhour').classList.add('d-block');
      }
    }

    if (document.getElementById('hourtable')) {
      if (showHourTableCard == "hide") {
        document.getElementById('hourtable').classList.add('d-none');
      } else {
        document.getElementById('hourtable').classList.add('d-block');
      }
    }

    if (document.getElementById('hourtablesummary')) {
      if (showHourTableSummaryCard == "hide") {
        document.getElementById('hourtablesummary').classList.add('d-none');
      } else {
        document.getElementById('hourtablesummary').classList.add('d-block');
      }
    }

    if (document.getElementById('actualtarget')) {
      if (showActualTargetCard == "hide") {
        document.getElementById('actualtarget').classList.add('d-none');
      } else {
        document.getElementById('actualtarget').classList.add('d-block');
      }
    }

    if (document.getElementById('defectrework')) {
      if (showDefectReworkCard == "hide") {
        document.getElementById('defectrework').classList.add('d-none');
      } else {
        document.getElementById('defectrework').classList.add('d-block');
      }
    }

    if (document.getElementById('efficiency')) {
      if (showEfficiencyCard == "hide") {
        document.getElementById('efficiency').classList.add('d-none');
      } else {
        document.getElementById('efficiency').classList.add('d-block');
      }
    }

    if (document.getElementById('rft')) {
      if (showRftCard == "hide") {
        document.getElementById('rft').classList.add('d-none');
      } else {
        document.getElementById('rft').classList.add('d-block');
      }
    }

    if (document.getElementById('defect')) {
      if (showDefectCard == "hide") {
        document.getElementById('defect').classList.add('d-none');
      } else {
        document.getElementById('defect').classList.add('d-block');
      }
    }

    if (document.getElementById('productimage')) {
      if (showProductImageCard == "hide") {
        document.getElementById('productimage').classList.add('d-none');
      } else {
        document.getElementById('productimage').classList.add('d-block');
      }
    }

    if (document.getElementById('listdefect')) {
      if (showListDefectCard == "hide") {
        document.getElementById('listdefect').classList.add('d-none');
      } else {
        document.getElementById('listdefect').classList.add('d-block');
      }
    }
  </script>

  <script>
    <?php if ($day_target1 == 0) {
      $day_target1 = 1;
    } else {
      $day_target1 = $day_target1;
    }
    $percen_deffectl1 = $deffectl1 / $day_target1 * 100;
    $per_deffectl1 = round($percen_deffectl1, 2);

    ?>

    var data = <?= $per_deffectl1; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line1"), options1).render();
  </script>

  <!-- ALL LINE -->

<script>
  <?php

  $datelog = date("Y-m-d 07:00:00");
  $datenow = date("Y-m-d H:i:s");
  $timenow = date("H:i:s");
  $awal  = strtotime($datelog);
  $akhir = strtotime($datenow); // waktu sekarang
  $diff  = $akhir - $awal;

  $jam   = floor($diff / (60 * 60));
  $minutes   = floor($diff / 60);
  $menit = $diff - $jam * (60 * 60);
  $menitkerja = $jamker * 60;
  if ($jam >= 6) {
    $min = $minutes - 60;
  } else {
    $min = $minutes;
  }

  if ($min > $menitkerja) {
    $min_ = $menitkerja;
  } else {
    $min_ = $min;
  }

  $m_prod = $actual * $smv;
  $m_tersedia = $menpower * $min_;
  $percen_effi = $m_prod / $m_tersedia * 100;

  $per_effi = round($percen_effi, 2);
  ?>

  var data = <?= $per_effi; ?>;
  var options1 = {
    chart: {
      height: 320,
      type: "radialBar",
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 3000,
        animateGradually: {
          enabled: true,
          delay: 3500
        },
        dynamicAnimation: {
          enabled: true,
          speed: 3000
        }
      }
    },
    series: [data],
    colors: ["#49FF00"],
    plotOptions: {
      radialBar: {
        startAngle: -135,
        endAngle: 135,
        track: {
          background: '#333',
          startAngle: -135,
          endAngle: 135,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            color: "#fff",
            fontSize: "42px",
            show: true
          }
        }
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: "horizontal",
        shadeIntensity: 0.5,
        gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100],
        colorStops: []
      }
    },
    stroke: {
      lineCap: "butt"
    },
    labels: ["Progress"]
  };

  new ApexCharts(document.querySelector("#chart_eff_line"), options1).render();
</script>


<script>
  <?php if ($actual == 0) {
    $actual = 1;
  } else {
    $actual = $actual;
  }
  $percen_deffect = $rfts / $actual * 100;
  $per_deffect = round($percen_deffect, 2);
  ?>
  var data = <?= $per_deffect; ?>;
  var options1 = {
    chart: {
      height: 320,
      type: "radialBar",
      animations: {
        enabled: true,
        easing: 'easeinout',
        speed: 3000,
        animateGradually: {
          enabled: true,
          delay: 3500
        },
        dynamicAnimation: {
          enabled: true,
          speed: 3000
        }
      }
    },
    series: [data],
    colors: ["#49FF00"],
    plotOptions: {
      radialBar: {
        startAngle: -135,
        endAngle: 135,
        track: {
          background: '#333',
          startAngle: -135,
          endAngle: 135,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            color: "#fff",
            fontSize: "42px",
            show: true
          }
        }
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: "horizontal",
        shadeIntensity: 0.5,
        gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100],
        colorStops: []
      }
    },
    stroke: {
      lineCap: "butt"
    },
    labels: ["Progress"]
  };

  new ApexCharts(document.querySelector("#chart_rft_line"), options1).render();
</script>

<script>
  <?php if ($actual == 0) {
    $actual = 1;
  } else {
    $actual = $actual;
  }
  $percen_deffect = $deffect / $actual * 100;
  $per_deffect = round($percen_deffect, 2);
  ?>
  var data = <?= $per_deffect; ?>;
  var options1 = {
    chart: {
      height: 320,
      type: "radialBar",
    },
    series: [data],
    colors: ["#FD0101"],
    plotOptions: {
      radialBar: {
        startAngle: -135,
        endAngle: 135,
        track: {
          background: '#333',
          startAngle: -135,
          endAngle: 135,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            color: "#fff",
            fontSize: "42px",
            show: true
          }
        }
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "dark",
        type: "horizontal",
        gradientToColors: undefined,
        stops: [0, 100]
      }
    },
    stroke: {
      lineCap: "butt"
    },
    labels: ["Progress"]
  };

  new ApexCharts(document.querySelector("#chart_def_line"), options1).render();
</script>

  <!-- LINE 07 -->

  <script>
    <?php

    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl7 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall7 * $smvl7;
    $m_tersedia = $menpowerl7 * $min_;
    $percen_effil7 = $m_prod / $m_tersedia * 100;

    $per_effil7 = round($percen_effil7, 2);
    ?>

    var data = <?= $per_effil7; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line7"), options1).render();
  </script>


  <script>
    <?php if ($actuall7 == 0) {
      $actuall7 = 1;
    } else {
      $actuall7 = $actuall7;
    }
    $percen_deffectl7 = $rftsl7 / $actuall7 * 100;
    $per_deffectl7 = round($percen_deffectl7, 2);
    ?>
    var data = <?= $per_deffectl7; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line7"), options1).render();
  </script>

  <script>
    <?php if ($actuall7 == 0) {
      $actuall7 = 1;
    } else {
      $actuall7 = $actuall7;
    }
    $percen_deffectl7 = $deffectl7 / $actuall7 * 100;
    $per_deffectl7 = round($percen_deffectl7, 2);
    ?>
    var data = <?= $per_deffectl7; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line7"), options1).render();
  </script>

  <!-- LINE 8 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl8 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall8 * $smvl8;
    $m_tersedia = $menpowerl8 * $min_;
    $percen_effil8 = $m_prod / $m_tersedia * 100;

    $per_effil8 = round($percen_effil8, 2);
    ?>
    var data = <?= $per_effil8; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line8"), options1).render();
  </script>


  <script>
    <?php if ($actuall8 == 0) {
      $actuall8 = 1;
    } else {
      $actuall8 = $actuall8;
    }
    $percen_deffectl8 = $rftsl8 / $actuall8 * 100;
    $per_deffectl8 = round($percen_deffectl8, 2);
    ?>
    var data = <?= $per_deffectl8; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line8"), options1).render();
  </script>

  <script>
    <?php if ($actuall8 == 0) {
      $actuall8 = 1;
    } else {
      $actuall8 = $actuall8;
    }
    $percen_deffectl8 = $deffectl8 / $actuall8 * 100;
    $per_deffectl8 = round($percen_deffectl8, 2);
    ?>
    var data = <?= $per_deffectl8; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line8"), options1).render();
  </script>


  <!-- LINE 9 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl9 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall9 * $smvl9;
    $m_tersedia = $menpowerl9 * $min_;
    $percen_effil9 = $m_prod / $m_tersedia * 100;

    $per_effil9 = round($percen_effil9, 2);
    ?>
    var data = <?= $per_effil9; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line9"), options1).render();
  </script>


  <script>
    <?php if ($actuall9 == 0) {
      $actuall9 = 1;
    } else {
      $actuall9 = $actuall9;
    }
    $percen_deffectl9 = $rftsl9 / $actuall9 * 100;
    $per_deffectl9 = round($percen_deffectl9, 2);
    ?>
    var data = <?= $per_deffectl9; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line9"), options1).render();
  </script>

  <script>
    <?php if ($actuall9 == 0) {
      $actuall9 = 1;
    } else {
      $actuall9 = $actuall9;
    }
    $percen_deffectl9 = $deffectl9 / $actuall9 * 100;
    $per_deffectl9 = round($percen_deffectl9, 2);
    ?>
    var data = <?= $per_deffectl9; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line9"), options1).render();
  </script>



  <!-- LINE 10 -->
  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl10 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall10 * $smvl10;
    $m_tersedia = $menpowerl10 * $min_;
    $percen_effil10 = $m_prod / $m_tersedia * 100;

    $per_effil10 = round($percen_effil10, 2);
    ?>
    var data = <?= $per_effil10; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line10"), options1).render();
  </script>


  <script>
    <?php if ($actuall10 == 0) {
      $actuall10 = 1;
    } else {
      $actuall10 = $actuall10;
    }
    $percen_deffectl10 = $rftsl10 / $actuall10 * 100;
    $per_deffectl10 = round($percen_deffectl10, 2);
    ?>
    var data = <?= $per_deffectl10; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line10"), options1).render();
  </script>

  <script>
    <?php if ($actuall10 == 0) {
      $actuall10 = 1;
    } else {
      $actuall10 = $actuall10;
    }
    $percen_deffectl10 = $deffectl10 / $actuall10 * 100;
    $per_deffectl10 = round($percen_deffectl10, 2);
    ?>
    var data = <?= $per_deffectl10; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line10"), options1).render();
  </script>




  <!-- LINE 11 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl11 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall11 * $smvl11;
    $m_tersedia = $menpowerl11 * $min_;
    $percen_effil11 = $m_prod / $m_tersedia * 100;

    $per_effil11 = round($percen_effil11, 2);
    ?>
    var data = <?= $per_effil11; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line11"), options1).render();
  </script>


  <script>
    <?php if ($actuall11 == 0) {
      $actuall11 = 1;
    } else {
      $actuall11 = $actuall11;
    }
    $percen_deffectl11 = $rftsl11 / $actuall11 * 100;
    $per_deffectl11 = round($percen_deffectl11, 2);
    ?>
    var data = <?= $per_deffectl11; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line11"), options1).render();
  </script>

  <script>
    <?php if ($actuall11 == 0) {
      $actuall11 = 1;
    } else {
      $actuall11 = $actuall11;
    }
    $percen_deffectl11 = $deffectl11 / $actuall11 * 100;
    $per_deffectl11 = round($percen_deffectl11, 2);
    ?>
    var data = <?= $per_deffectl11; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line11"), options1).render();
  </script>




  <!-- LINE 12 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl12 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall12 * $smvl12;
    $m_tersedia = $menpowerl12 * $min_;
    $percen_effil12 = $m_prod / $m_tersedia * 100;

    $per_effil12 = round($percen_effil12, 2);
    ?>
    var data = <?= $per_effil12; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line12"), options1).render();
  </script>


  <script>
    <?php if ($actuall12 == 0) {
      $actuall12 = 1;
    } else {
      $actuall12 = $actuall12;
    }
    $percen_deffectl12 = $rftsl12 / $actuall12 * 100;
    $per_deffectl12 = round($percen_deffectl12, 2);
    ?>
    var data = <?= $per_deffectl12; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line12"), options1).render();
  </script>

  <script>
    <?php if ($actuall12 == 0) {
      $actuall12 = 1;
    } else {
      $actuall12 = $actuall12;
    }
    $percen_deffectl12 = $deffectl12 / $actuall12 * 100;
    $per_deffectl12 = round($percen_deffectl12, 2);
    ?>
    var data = <?= $per_deffectl12; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line12"), options1).render();
  </script>




  <!-- LINE 13 -->

  <script>
    <?php

    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl13 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall13 * $smvl13;
    $m_tersedia = $menpowerl13 * $min_;
    $percen_effil13 = $m_prod / $m_tersedia * 100;

    $per_effil13 = round($percen_effil13, 2);
    ?>

    var data = <?= $per_effil13; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line13"), options1).render();
  </script>


  <script>
    <?php if ($actuall13 == 0) {
      $actuall13 = 1;
    } else {
      $actuall13 = $actuall13;
    }
    $percen_deffectl13 = $rftsl13 / $actuall13 * 100;
    $per_deffectl13 = round($percen_deffectl13, 2);
    ?>
    var data = <?= $per_deffectl13; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line13"), options1).render();
  </script>

  <script>
    <?php if ($actuall13 == 0) {
      $actuall13 = 1;
    } else {
      $actuall13 = $actuall13;
    }
    $percen_deffectl13 = $deffectl13 / $actuall13 * 100;
    $per_deffectl13 = round($percen_deffectl13, 2);
    ?>
    var data = <?= $per_deffectl13; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line13"), options1).render();
  </script>

  <!-- LINE 14 -->

  <script>
    <?php

    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl14 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall14 * $smvl14;
    $m_tersedia = $menpowerl14 * $min_;
    $percen_effil14 = $m_prod / $m_tersedia * 100;

    $per_effil14 = round($percen_effil14, 2);
    ?>

    var data = <?= $per_effil14; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line14"), options1).render();
  </script>


  <script>
    <?php if ($actuall14 == 0) {
      $actuall14 = 1;
    } else {
      $actuall14 = $actuall14;
    }
    $percen_deffectl14 = $rftsl14 / $actuall14 * 100;
    $per_deffectl14 = round($percen_deffectl14, 2);
    ?>
    var data = <?= $per_deffectl14; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line14"), options1).render();
  </script>

  <script>
    <?php if ($actuall14 == 0) {
      $actuall14 = 1;
    } else {
      $actuall14 = $actuall14;
    }
    $percen_deffectl14 = $deffectl14 / $actuall14 * 100;
    $per_deffectl14 = round($percen_deffectl14, 2);
    ?>
    var data = <?= $per_deffectl14; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line14"), options1).render();
  </script>

  <!-- LINE 15 -->

  <script>
    <?php

    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl15 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall15 * $smvl15;
    $m_tersedia = $menpowerl15 * $min_;
    $percen_effil15 = $m_prod / $m_tersedia * 100;

    $per_effil15 = round($percen_effil15, 2);
    ?>

    var data = <?= $per_effil15; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line15"), options1).render();
  </script>


  <script>
    <?php if ($actuall15 == 0) {
      $actuall15 = 1;
    } else {
      $actuall15 = $actuall15;
    }
    $percen_deffectl15 = $rftsl15 / $actuall15 * 100;
    $per_deffectl15 = round($percen_deffectl15, 2);
    ?>
    var data = <?= $per_deffectl15; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line15"), options1).render();
  </script>

  <script>
    <?php if ($actuall15 == 0) {
      $actuall15 = 1;
    } else {
      $actuall15 = $actuall15;
    }
    $percen_deffectl15 = $deffectl15 / $actuall15 * 100;
    $per_deffectl15 = round($percen_deffectl15, 2);
    ?>
    var data = <?= $per_deffectl15; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line15"), options1).render();
  </script>

  <!-- LINE 16 -->

  <script>
    <?php

    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl16 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall16 * $smvl16;
    $m_tersedia = $menpowerl16 * $min_;
    $percen_effil16 = $m_prod / $m_tersedia * 100;

    $per_effil16 = round($percen_effil16, 2);
    ?>

    var data = <?= $per_effil16; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line16"), options1).render();
  </script>


  <script>
    <?php if ($actuall16 == 0) {
      $actuall16 = 1;
    } else {
      $actuall16 = $actuall16;
    }
    $percen_deffectl16 = $rftsl16 / $actuall16 * 100;
    $per_deffectl16 = round($percen_deffectl16, 2);
    ?>
    var data = <?= $per_deffectl16; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line16"), options1).render();
  </script>

  <script>
    <?php if ($actuall16 == 0) {
      $actuall16 = 1;
    } else {
      $actuall16 = $actuall16;
    }
    $percen_deffectl16 = $deffectl16 / $actuall16 * 100;
    $per_deffectl16 = round($percen_deffectl16, 2);
    ?>
    var data = <?= $per_deffectl16; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line16"), options1).render();
  </script>


  <!-- LINE 17 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl17 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall17 * $smvl17;
    $m_tersedia = $menpowerl17 * $min_;
    $percen_effil17 = $m_prod / $m_tersedia * 100;

    $per_effil17 = round($percen_effil17, 2);
    ?>
    var data = <?= $per_effil17; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line17"), options1).render();
  </script>


  <script>
    <?php if ($actuall17 == 0) {
      $actuall17 = 1;
    } else {
      $actuall17 = $actuall17;
    }
    $percen_deffectl17 = $rftsl17 / $actuall17 * 100;
    $per_deffectl17 = round($percen_deffectl17, 2);
    ?>
    var data = <?= $per_deffectl17; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line17"), options1).render();
  </script>

  <script>
    <?php if ($actuall17 == 0) {
      $actuall17 = 1;
    } else {
      $actuall17 = $actuall17;
    }
    $percen_deffectl17 = $deffectl17 / $actuall17 * 100;
    $per_deffectl17 = round($percen_deffectl17, 2);
    ?>
    var data = <?= $per_deffectl17; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line17"), options1).render();
  </script>
  <!-- LINE 18 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl18 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall18 * $smvl18;
    $m_tersedia = $menpowerl18 * $min_;
    $percen_effil18 = $m_prod / $m_tersedia * 100;

    $per_effil18 = round($percen_effil18, 2);
    ?>
    var data = <?= $per_effil18; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line18"), options1).render();
  </script>


  <script>
    <?php if ($actuall18 == 0) {
      $actuall18 = 1;
    } else {
      $actuall18 = $actuall18;
    }
    $percen_deffectl18 = $rftsl18 / $actuall18 * 100;
    $per_deffectl18 = round($percen_deffectl18, 2);
    ?>
    var data = <?= $per_deffectl18; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line18"), options1).render();
  </script>

  <script>
    <?php if ($actuall18 == 0) {
      $actuall18 = 1;
    } else {
      $actuall18 = $actuall18;
    }
    $percen_deffectl18 = $deffectl18 / $actuall18 * 100;
    $per_deffectl18 = round($percen_deffectl18, 2);
    ?>
    var data = <?= $per_deffectl18; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line18"), options1).render();
  </script>


  <!-- LINE 27 -->
  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl27 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall27 * $smvl27;
    $m_tersedia = $menpowerl27 * $min_;
    $percen_effil27 = $m_prod / $m_tersedia * 100;

    $per_effil27 = round($percen_effil27, 2);
    ?>
    var data = <?= $per_effil27; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line27"), options1).render();
  </script>


  <script>
    <?php if ($actuall27 == 0) {
      $actuall27 = 1;
    } else {
      $actuall27 = $actuall27;
    }
    $percen_deffectl27 = $rftsl27 / $actuall27 * 100;
    $per_deffectl27 = round($percen_deffectl27, 2);
    ?>
    var data = <?= $per_deffectl27; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line27"), options1).render();
  </script>

  <script>
    <?php if ($actuall27 == 0) {
      $actuall27 = 1;
    } else {
      $actuall27 = $actuall27;
    }
    $percen_deffectl27 = $deffectl27 / $actuall27 * 100;
    $per_deffectl27 = round($percen_deffectl27, 2);
    ?>
    var data = <?= $per_deffectl27; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line27"), options1).render();
  </script>



  <!-- LINE 28 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl28 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $m_prod = $actuall28 * $smvl28;
    $m_tersedia = $menpowerl28 * $min_;
    $percen_effil28 = $m_prod / $m_tersedia * 100;

    $per_effil28 = round($percen_effil28, 2);
    ?>
    var data = <?= $per_effil28; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line28"), options1).render();
  </script>


  <script>
    <?php if ($actuall28 == 0) {
      $actuall28 = 1;
    } else {
      $actuall28 = $actuall28;
    }
    $percen_deffectl28 = $rftsl28 / $actuall28 * 100;
    $per_deffectl28 = round($percen_deffectl28, 2);
    ?>
    var data = <?= $per_deffectl28; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_rft_line28"), options1).render();
  </script>

  <script>
    <?php if ($actuall28 == 0) {
      $actuall28 = 1;
    } else {
      $actuall28 = $actuall28;
    }
    $percen_deffectl28 = $deffectl28 / $actuall28 * 100;
    $per_deffectl28 = round($percen_deffectl28, 2);
    ?>
    var data = <?= $per_deffectl28; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line28"), options1).render();
  </script>



  <!-- LINE 29 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl29 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $cumulative = round($min_ * $target_menit, 0) - 250;

    $m_prod = $actuall29 * $smvl29;
    // $m_prod = $cumulative * $smvl13;
    $m_tersedia = $menpowerl29 * $min_;
    $percen_effil29 = $m_prod / $m_tersedia * 100;

    $per_effil29 = round($percen_effil29, 2);
    ?>
    var data = <?= $per_effil29; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line29"), options1).render();
  </script>

  <script>
    <?php if ($day_target29 == 0) {
      $day_target29 = 1;
    } else {
      $day_target29 = $day_target29;
    }
    $percen_deffectl29 = $deffectl29 / $day_target29 * 100;
    $per_deffectl29 = round($percen_deffectl29, 2);
    ?>
    var data = <?= $per_deffectl29; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line29"), options1).render();
  </script>


  <!-- LINE 30 -->

  <script>
    <?php
    $datelog = date("Y-m-d 07:00:00");
    $datenow = date("Y-m-d H:i:s");
    $timenow = date("H:i:s");
    $awal  = strtotime($datelog);
    $akhir = strtotime($datenow); // waktu sekarang
    $diff  = $akhir - $awal;

    $jam   = floor($diff / (60 * 60));
    $minutes   = floor($diff / 60);
    $menit = $diff - $jam * (60 * 60);
    $menitkerja = $jamkerl30 * 60;
    if ($jam >= 6) {
      $min = $minutes - 60;
    } else {
      $min = $minutes;
    }

    if ($min > $menitkerja) {
      $min_ = $menitkerja;
    } else {
      $min_ = $min;
    }

    $cumulative = round($min_ * $target_menit, 0) - 250;

    $m_prod = $actuall30 * $smvl30;
    // $m_prod = $cumulative * $smvl13;
    $m_tersedia = $menpowerl30 * $min_;
    $percen_effil30 = $m_prod / $m_tersedia * 100;

    $per_effil30 = round($percen_effil30, 2);
    ?>
    var data = <?= $per_effil30; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
        animations: {
          enabled: true,
          easing: 'easeinout',
          speed: 3000,
          animateGradually: {
            enabled: true,
            delay: 3500
          },
          dynamicAnimation: {
            enabled: true,
            speed: 3000
          }
        }
      },
      series: [data],
      colors: ["#49FF00"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: "horizontal",
          shadeIntensity: 0.5,
          gradientToColors: undefined, // optional, if not defined - uses the shades of same color in series
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100],
          colorStops: []
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_eff_line30"), options1).render();
  </script>

  <script>
    <?php if ($day_target30 == 0) {
      $day_target30 = 1;
    } else {
      $day_target30 = $day_target30;
    }
    $percen_deffectl30 = $deffectl30 / $day_target30 * 100;
    $per_deffectl30 = round($percen_deffectl30, 2);
    ?>
    var data = <?= $per_deffectl30; ?>;
    var options1 = {
      chart: {
        height: 320,
        type: "radialBar",
      },
      series: [data],
      colors: ["#FD0101"],
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 135,
          track: {
            background: '#333',
            startAngle: -135,
            endAngle: 135,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              color: "#fff",
              fontSize: "42px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: undefined,
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart_def_line30"), options1).render();
  </script>

  <script type="text/javascript">

  </script>

  </body>

  </html>