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
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_factory; ?>]
          },
          {
            name: "Target Efficiency",
            color: '#FF8C00',
            data: [<?= $target_effi_factory; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_factory; ?>]
          }
        ],
          chart: {
          height: '600px',
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '10px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
    if (val >= 1) {

      if (val >= 1) {

      return val
    } + " %"
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left'
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          title: {
            text: 'Percentage'
          },
          min: 0,
          max: 100,
          tickAmount: 10,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily"), options);
        chart.render();
      
      
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line__; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line__; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      if (val >= 1) {

      return val
    }
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line___"), options);
        chart.render();
      
      
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line01; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line01; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      if (val >= 1) {

      return val
    }
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line1"), options);
        chart.render();
      
      
  </script>


    <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line02; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line02; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line2"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line03; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line03; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line3"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line04; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line04; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line4"), options);
        chart.render();
  </script>


  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line05; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line05; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line5"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line06; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line06; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line6"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line07; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line07; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line7"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line08; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line08; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line8"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line09; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line09; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line9"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line10; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line10; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line10"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line11; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line11; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line11"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line12; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line12; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line12"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line13; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line13; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line13"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line14; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line14; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line14"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line15; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line15; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line15"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line16; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line16; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line16"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line17; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line17; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line17"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line18; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line18; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line18"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line19; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line19; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line19"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line20; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line20; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line20"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line21; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line21; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line21"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line22; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line22; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line22"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line23; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line23; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line23"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line24; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line24; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line24"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line25; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line25; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line25"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line26; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line26; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line26"), options);
        chart.render();
  </script>

   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line27; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line27; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line27"), options);
        chart.render();
  </script>

   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line28; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line28; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line28"), options);
        chart.render();
  </script>

   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_line29; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_line29; ?>]
          }
        ],
          chart: {
          height: 265,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '6px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 3
        },
        title: {
          text: 'Factory Daily Efficiency',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 6,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_daily_line29"), options);
        chart.render();
  </script>



<!-- all chief -->
  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_rudy; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_rudy; ?>]
          }
        ],
          chart: {
          height: 180,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      color: 'black'
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief1"), options);
        chart.render();
  </script>

   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_dadang; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_dadang; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief2"), options);
        chart.render();
  </script>


   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_usup; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_usup; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief3"), options);
        chart.render();
  </script>


  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_linda; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_linda; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief4"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_feri; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_feri; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief5"), options);
        chart.render();
  </script>

  <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_rudy; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_rudy; ?>]
          }
        ],
          chart: {
          height: 180,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      color: 'black'
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief_1"), options);
        chart.render();
  </script>

   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_dadang; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_dadang; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief_2"), options);
        chart.render();
  </script>


   <script>
    var options = {
          series: [
          {
            name: "Efficiency",
            color: '#8B0000',
            data: [<?= $effi_usup; ?>]
          },
          {
            name: "RFT",
            color: '#0000CD',
            data: [<?= $rft_usup; ?>]
          }
        ],
          chart: {
          height: 178,
          type: 'line',
          dropShadow: {
            enabled: true,
            color: 'black',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        colors: ['#77B6EA', '#545454'],
        dataLabels: {
          enabled: true,
          style: {
      fontSize: '7px',
      fontFamily: 'Helvetica, Arial, sans-serif',
      colors: undefined
  },
  formatter: function (val, opts) {
      if (val >= 1) {

      return val
    }
  },
        },
        stroke: {
          curve: 'smooth',
          colors: undefined,
          width: 2
        },
        title: {
          text: '-',
          align: 'left',
          style: {
      fontSize:  '12px'
    },
        },
        grid: {
          borderColor: '#2F4F4F',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.3
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: [<?= $harikerja; ?>],
          // title: {
          //   text: 'Date'
          // }
        },
        
        yaxis: {
          labels: {
              formatter: function (value) {
                  return Math.round(value) + "%";
              }
          },
          min: 0,
          max: 120,
          tickAmount: 4,
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_chief_3"), options);
        chart.render();
  </script>

  
  </body>

  </html>