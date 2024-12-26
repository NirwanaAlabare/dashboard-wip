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
<div class="content animate__animated animate__fadeInLeft animate__slow" style="max-width: 1366px;max-height: 786px;">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col" id="logolinetime">
                <div class="row">
                    <div class="col-auto" id="logo">
                        <img src="<?= base_url('assets/') ?>dist/img/logo-nds4.png" alt="Nag-Logo" class="brand-image elevation-3" style="width: 100px;height: 100px;">
                    </div>

                    <div class="col" id="linetime">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="d-flex" style="height: 60px;">
                                    <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                        <span class="text-bold " style="font-size: 26px;"><?php echo date("Y-m-d"); ?> <span id="jam" style="font-size:24"></span></span>
                                        <span class="text-bold " style="font-size: 26px;"><?= $user; ?></span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" id="ws">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <div class="d-flex" style="height: 60px;">
                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                <span class="text-bold " style="font-size: 22px;"><?= $buyer; ?></span>
                                <span class="text-bold " style="font-size: 22px;"><?= $no_ws; ?></span>
                            </p>
                        </div>
                        <!-- /.d-flex -->
                    </div>
                </div>
            </div>
            <div class="col" id="workhour">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <div class="d-flex" style="height: 60px;">
                            <p class="d-flex flex-column" style="margin-left: 1rem;margin-top: -0.5rem;">
                                <span class="text-bold" style="font-size: 40px; text-align: center;"><?php
                                                                                                        $datelog = date("Y-m-d 07:00:00");
                                                                                                        $datenow = date("Y-m-d H:i:s");
                                                                                                        $awal  = date_create($datelog);
                                                                                                        $akhir = date_create($datenow); // waktu sekarang
                                                                                                        $diff  = date_diff($akhir, $awal);
                                                                                                        $jml_jam = $diff->h;
                                                                                                        if ($jml_jam >= 6) {
                                                                                                            echo (($diff->h) - 1);
                                                                                                        } else {
                                                                                                            echo $diff->h;
                                                                                                        } ?> Hours <?php
                                            $datelog2 = date("Y-m-d 07:00:00");
                                            $datenow2 = date("Y-m-d H:i:s");
                                            $timenow2 = date("H:i:s");
                                            $awal2  = strtotime($datelog2);
                                            $akhir2 = strtotime($datenow2); // waktu sekarang
                                            $diff2 = $akhir2 - $awal2;

                                            $jam2   = floor($diff2 / (60 * 60));
                                            $menit = $diff2 - $jam2 * (60 * 60);
                                            if ($timenow2 <= '07:00:00') {
                                                echo '0';
                                            } elseif ($timenow2 >= '12:00:00' and $timenow2 <= '13:00:00') {
                                                echo '0';
                                            } else {
                                                echo floor($menit / 60);
                                            } ?> Minutes</span>

                            </p>
                        </div>
                        <!-- /.d-flex -->
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->

            <div class="row row-cols-3">
                <div class="col" id="actualtarget">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 230px;">
                            <br>
                            <br>
                            <!-- <div class="w-100 d-flex flex-column justify-content-center">
                                <p id="rtt-line18"></p>
                            </div> -->
                            <div class="row">
                                <div class="col-6">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
                                            <?= $actuall18; ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Actual</span>
                                    </p>
                                </div>
                                <div class="col-1">
                                    <span style="font-size: 60px;text-align: center;">|</span>
                                </div>
                                <div class="col-5">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
                                            <?= $day_target18; ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Day Target</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / div 3 -->

                <div class="col" id="variance">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 230px;">
                            <div class="row">
                                <div class="col-12">
                                    <p class="d-flex flex-column" style="margin-bottom: -1rem;">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
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
                                            $cumulative = round($min_ * $target_menit, 0);
                                            $variance = $cumulative - $actuall18;
                                            $variance2 = abs($variance);
                                            echo $variance2;
                                            if ($variance > 0) {
                                                echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                            } else {
                                                echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                            }
                                            ?>

                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Variance</span>
                                    </p>

                                </div>
                                <div class="col-6">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
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
                                            $cumulative = round($min_ * $target_menit, 0);
                                            echo $cumulative;
                                            ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Realtime Target</span>
                                    </p>
                                </div>
                                <div class="col-1">
                                    <span style="font-size: 60px;text-align: center;">|</span>
                                </div>
                                <div class="col-5">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
                                            <?= $target_floor; ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Req Hour Target</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col" id="defectrework">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 230px;">
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <p class="d-flex flex-column" style="margin-bottom: -1rem;">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
                                            <?= $deffectl18 - $rework; ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Deffect Garment Qty</span>
                                    </p>
                                </div>
                                <div class="col-1">
                                    <span style="font-size: 60px;text-align: center;">|</span>
                                </div>
                                <div class="col-5">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold" style="font-size: 50px;text-align: center;">
                                            <?= $rework; ?>
                                        </span>
                                        <span class="text-bold" style="font-size: 20px;text-align: center;">Rework</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col" id="efficiency">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 275px;">
                            <div id="chart_eff_line18" style="margin-bottom: -1rem; margin-top: -2rem;">
                            </div>
                            <p class="d-flex flex-column">
                                <span class="text-bold" style="font-size: 36px;text-align: center;">Efficiency</span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col" id="rft">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 275px;">
                            <div id="chart_rft_line18" style="margin-bottom: -1rem; margin-top: -2rem;">
                            </div>
                            <p class="d-flex flex-column">
                                <span class="text-bold" style="font-size: 36px;text-align: center;">RFT</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col" id="defect">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 275px;">
                            <div id="chart_def_line18" style="margin-bottom: -1rem; margin-top: -2rem;">
                            </div>
                            <p class="d-flex flex-column">
                                <span class="text-bold" style="font-size: 36px;text-align: center;">Defect Rate</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<script type="text/javascript">
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>
<script type="text/javascript">
    var isPaused = false;

    window.addEventListener("click", function(event) {
        isPaused = !isPaused;

        setTimeout(redirect, 10000);
    });

    var redirect = function() {
        if (!isPaused) {
            window.location = "dashboard3";
        }
    };

    setTimeout(redirect, 10000);
</script>