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

  var data = <?= $sum_effi; ?>;
  var data_effi = <?= strval($data_effi); ?>;
   var options = {
  chart: {
    height: 320,
    type: "radialBar",
  },

  series: [data],
  colors: ["#20E647"],
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "70%",
        background: "#293450"
      },
      track: {
        dropShadow: {
          enabled: true,
          top: 2,
          left: 0,
          blur: 4,
          opacity: 0.15
        }
      },
      dataLabels: {
        name: {
          offsetY: 60,
          color: "#fff",
          fontSize: "16px"
        },
        value: {
          offsetY: -10,
          color: "#fff",
          fontSize: "30px",
          show: true
        }
      }
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "vertical",
      gradientToColors: ["#9966ff"],
      stops: [0, 100]
    }
  },
  stroke: {
    lineCap: "round"
  },
  labels: [data_effi],
  fontSize: "35px",
};

var chart = new ApexCharts(document.querySelector("#chart_eff"), options);

chart.render();
  </script>



  <script>
   var data = <?= $sum_rft; ?>;
   var data_rft = <?= strval($data_rft); ?>;
   var options = {
  chart: {
    height: 320,
    type: "radialBar",
  },

  series: [data],
  colors: ["#20E647"],
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "70%",
        background: "#293450"
      },
      track: {
        dropShadow: {
          enabled: true,
          top: 2,
          left: 0,
          blur: 4,
          opacity: 0.15
        }
      },
      dataLabels: {
        name: {
          offsetY: 60,
          color: "#fff",
          fontSize: "16px"
        },
        value: {
          color: "#fff",
          offsetY: -10,
          fontSize: "30px",
          show: true
        }
      }
    }
  },
  fill: {
    type: "gradient",
    gradient: {
      shade: "dark",
      type: "vertical",
      gradientToColors: ["#0099ff"],
      stops: [0, 100]
    }
  },
  stroke: {
    lineCap: "round"
  },
  labels: ["RFT"],
  fontSize: "30px",
};

var chart = new ApexCharts(document.querySelector("#chart_rft"), options);

chart.render();
  </script>

  <script>
   var options = {
          series: [{
          name: '<?= $defectno1; ?>',
          data: [<?= $val_defectno1; ?>, 0, 0, 0, 0]
        }, {
          name: '<?= $defectno2; ?>',
          data: [0, <?= $val_defectno2; ?>, 0, 0, 0]
        }, {
          name: '<?= $defectno3; ?>',
          data: [0, 0, <?= $val_defectno3; ?>, 0, 0]
        }, {
          name: '<?= $defectno4; ?>',
          data: [0, 0, 0, <?= $val_defectno4; ?>, 0]
        }, {
          name: '<?= $defectno5; ?>',
          data: [0, 0, 0, 0, <?= $val_defectno5; ?>]
        }],
          chart: {
          type: 'bar',
          height: 270,
          stacked: true,
          toolbar: {
            show: false
          },
          color : '#ffffff',
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 200,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 0,
            dataLabels: {
              total: {
                enabled: true,
                style: {
                  fontSize: '50px',
                  color: '#F0FFFF',
                  fontWeight: 900
                }
              }
            }
          },
        },
        yaxis: {
          title: {
          style: {
              color: '#F0FFFF',
              fontSize: '12px',
              fontFamily: 'Helvetica, Arial, sans-serif',
          },
      },
        },
        xaxis: {
          categories: ['', '', '', '', ''
          ],
        },
        legend: {
          position: 'right',
          offsetY: 40,
          labels: {
          colors: '#F0FFFF',
          useSeriesColors: false
      },
        },
        fill: {
          opacity: 10,

        }
        };

        var chart = new ApexCharts(document.querySelector("#chart123"), options);
        chart.render();
      
      
  </script>

  </body>

  </html>