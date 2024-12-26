
    <!-- Content Header (Page header) -->
<!--     <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div> -->


    <!-- Main content -->
    <div class="content animate__animated animate__fadeInLeft animate__slow" style="max-width: 1366px;">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                    <span class="text-bold " style="font-size: 26px;"><?php echo date("Y-m-d"); ?> <span id="jam" style="font-size:24"></span></span>
                                    <span class="text-bold " style="font-size: 26px;">LINE 01 | End Line</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                    <span class="text-bold " style="font-size: 26px;">KANMAX</span>
                                    <span class="text-bold " style="font-size: 26px;">WS01</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-left: 1rem;margin-top: -0.5rem;">
                                    <span class="text-bold" style="font-size: 48px; text-align: center;"><?php
                                    $datelog = date("Y-m-d 07:00:00");
                                    $datenow = date("Y-m-d H:i:s");
                                    $awal  = date_create($datelog);
                                    $akhir = date_create($datenow); // waktu sekarang
                                    $diff  = date_diff( $akhir, $awal );
                                    $jml_jam = $diff->h;
                                    if ($jml_jam >= 6) {
                                      echo (($diff->h) -1);
                                    }else{
                                    echo $diff->h;
                                }?> Hours</span>

                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-left: 1rem;margin-top: -0.5rem;">
                                    <span class="text-bold" style="font-size: 48px;"><?php
                                    $datelog = date("Y-m-d 07:00:00");
                                    $datenow = date("Y-m-d H:i:s");
                                    $awal  = strtotime($datelog);
                                    $akhir = strtotime($datenow); // waktu sekarang
                                    $diff  = $akhir - $awal;

                                    $jam   = floor($diff / (60 * 60));
                                    $menit = $diff - $jam * (60 * 60);
                                    echo floor( $menit / 60 );?> Minutes</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->

                          <div class="col-lg-9">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <table class="table table-dark border-collapse" style="font-size: 12px;text-align: center;">
                                <thead>
                                    <tr>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Hours</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Target</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Output</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Variation</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Efficiency</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Defect Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">07:00 - 08:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">08:00 - 09:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">09:00 - 10:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">10:00 - 11:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">11:00 - 12:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;" class="bg-danger">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">12:00 - 13:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">13:00 - 14:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">14:00 - 15:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">15:00 - 16:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">16:00 - 17:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>

                                </tbody>
                            </table>
                    </div>
                    </div>
                </div>

                <!-- div 3 -->
                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <table class="table table-dark" style="text-align: center;font-size: 14px;">
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Target</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;">0</td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Output</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;">0</td>
                                    </tr>
                                   <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Variation</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;">0</td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Efficiency</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;">0%</td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Defect Rate</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;">0%</td>
                                    </tr>
                            </table>
                    </div>
                    </div>
                </div>
                <!-- / div 3 -->



            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<script type="text/javascript">
        window.onload = function() { jam();}
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
<script type="text/javascript">
var redirect = function() {
    window.location = "dashboard2";
};
setTimeout(redirect, 15000);        
</script>

