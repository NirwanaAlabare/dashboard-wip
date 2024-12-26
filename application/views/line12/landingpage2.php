
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

                <div class="col-lg-1">
                    <img src="<?= base_url('assets/') ?>dist/img/logo-nds4.png" alt="Nag-Logo" class="brand-image elevation-3" style="width: 100px;height: 100px;">
                </div>

                <div class="col-lg-3">
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
<div class="col-lg-4">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                    <span class="text-bold " style="font-size: 24px;"><?= $buyer; ?></span>
                                    <span class="text-bold " style="font-size: 24px;"><?= $no_ws; ?></span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <div class="d-flex" style="height: 60px;">
                                <p class="d-flex flex-column" style="margin-left: 1rem;margin-top: -0.5rem;">
                                    <span class="text-bold" style="font-size: 40px; text-align: center;"><?php
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
                                }?> Hours <?php
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
                                    }elseif($timenow2 >= '12:00:00' AND $timenow2 <= '13:00:00'){
                                        echo '0';
                                    }else{
                                    echo floor( $menit / 60 );
                                }?> Minutes</span>

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
                            <table class="table table-dark border-collapse" style="font-size: 12px;text-align: center;border-radius: 10px;">
                                <thead>
                                    <tr style="line-height: 15px;">
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Hours</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Target</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Output</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Variation</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Efficiency</th>
                                    <th scope="col" style="border-color: lightgray;font-size: 20px;">Defect Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $datenow = date("H:i"); ?>
                                    <!-- 07:00 - 08:00 -->
                                    <tr style="line-height: 18px; " <?php if ($datenow > '07:00' && $datenow <= '08:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">07:00 - 08:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 1) {
                                                echo '0';
                                            }elseif($jamkerl12 > 1){
                                                echo $datajam7['target1'];
                                            }else{
                                                echo $datajam7['target2'];
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam7['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 1) {
                                            $variance7 = '0';
                                        }elseif($jamkerl12 > 1){
                                            $variance7 = $datajam7['variation1'];
                                        }else{
                                            $variance7 = $datajam7['variation2'];
                                        }

                                        $varianc7 = abs($variance7);
                                        echo $varianc7;
                                        if ($variance7 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 1) {
                                                echo '0';
                                            }elseif($jamkerl12 > 1){
                                                echo $datajam7['efficiency1'];
                                            }else{
                                                echo $datajam7['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 1) {
                                                echo '0';
                                            }elseif($jamkerl12 > 1){
                                                echo $datajam7['defect_rate1'];
                                            }else{
                                                echo $datajam7['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 07:00 - 08:00 -->

                                    <!-- 08:00 - 09:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '08:00' && $datenow <= '09:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">08:00 - 09:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 2) {
                                                echo '0';
                                            }elseif($jamkerl12 > 2){
                                                if ($datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }else{
                                                echo $datajam8['target1'];
                                                }
                                            }else{
                                                if ($datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }else{
                                                echo $datajam8['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam8['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 2) {
                                                echo '0';
                                            }elseif($jamkerl12 > 2){
                                                if ($datenow <= '08:00') {
                                                $variance8 = $datajam7['target1'] - $datajam8['output'];;
                                                }else{
                                                $variance8 = $datajam8['target1'] - $datajam8['output'];;
                                                }
                                            }else{
                                                if ($datenow <= '08:00') {
                                                $variance8 = $datajam7['target2'] - $datajam8['output'];;
                                                }else{
                                                $variance8 = $datajam8['target2'] - $datajam8['output'];;
                                                }
                                            }

                                        $varianc8 = abs($variance8);
                                        echo $varianc8;
                                        if ($variance8 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 2) {
                                                echo '0';
                                            }elseif($jamkerl12 > 2){
                                                echo $datajam8['efficiency1'];
                                            }else{
                                                echo $datajam8['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 2) {
                                                echo '0';
                                            }elseif($jamkerl12 > 2){
                                                echo $datajam8['defect_rate1'];
                                            }else{
                                                echo $datajam8['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 08:00 - 09:00 -->

                                    <!-- 09:00 - 10:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '09:00' && $datenow <= '10:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">09:00 - 10:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 3) {
                                                echo '0';
                                            }elseif($jamkerl12 > 3){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }else{
                                                echo $datajam9['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }else{
                                                echo $datajam9['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam9['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 3) {
                                                echo '0';
                                            }elseif($jamkerl12 > 3){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance9 = $datajam7['target1'] - $datajam9['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance9 = $datajam8['target1'] - $datajam9['output'];;
                                                }else{
                                                $variance9 = $datajam9['target1'] - $datajam9['output'];;
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance9 = $datajam7['target2'] - $datajam9['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance9 = $datajam8['target2'] - $datajam9['output'];;
                                                }else{
                                                $variance9 = $datajam9['target2'] - $datajam9['output'];;
                                                }
                                            }

                                        $varianc9 = abs($variance9);
                                        echo $varianc9;
                                        if ($variance9 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 3) {
                                                echo '0';
                                            }elseif($jamkerl12 > 3){
                                                echo $datajam9['efficiency1'];
                                            }else{
                                                echo $datajam9['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 3) {
                                                echo '0';
                                            }elseif($jamkerl12 > 3){
                                                echo $datajam9['defect_rate1'];
                                            }else{
                                                echo $datajam9['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 09:00 - 10:00 -->

                                    <!-- 10:00 - 11:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '10:00' && $datenow <= '11:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">10:00 - 11:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 4) {
                                                echo '0';
                                            }elseif($jamkerl12 > 4){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target1'];
                                                }else{
                                                echo $datajam10['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target2'];
                                                }else{
                                                echo $datajam10['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam10['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 4) {
                                                echo '0';
                                            }elseif($jamkerl12 > 4){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance10 = $datajam7['target1'] - $datajam10['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance10 = $datajam8['target1'] - $datajam10['output'];;
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance10 = $datajam9['target1'] - $datajam10['output'];;
                                                }else{
                                                $variance10 = $datajam10['target1'] - $datajam10['output'];;
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance10 = $datajam7['target2'] - $datajam10['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance10 = $datajam8['target2'] - $datajam10['output'];;
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance10 = $datajam9['target2'] - $datajam10['output'];;
                                                }else{
                                                $variance10 = $datajam10['target2'] - $datajam10['output'];;
                                                }
                                            }

                                        $varianc10 = abs($variance10);
                                        echo $varianc10;
                                        if ($variance10 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 4) {
                                                echo '0';
                                            }elseif($jamkerl12 > 4){
                                                echo $datajam10['efficiency1'];
                                            }else{
                                                echo $datajam10['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 4) {
                                                echo '0';
                                            }elseif($jamkerl12 > 4){
                                                echo $datajam10['defect_rate1'];
                                            }else{
                                                echo $datajam10['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 10:00 - 11:00 -->

                                    <!-- 11:00 - 12:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '11:00' && $datenow <= '12:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">11:00 - 12:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 5) {
                                                echo '0';
                                            }elseif($jamkerl12 > 5){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target1'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target1'];
                                                }else{
                                                echo $datajam11['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target2'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target2'];
                                                }else{
                                                echo $datajam11['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam11['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 5) {
                                                echo '0';
                                            }elseif($jamkerl12 > 5){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance11 = $datajam7['target1'] - $datajam11['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance11 = $datajam8['target1'] - $datajam11['output'];;
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance11 = $datajam9['target1'] - $datajam11['output'];;
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance11 = $datajam10['target1'] - $datajam11['output'];;
                                                }else{
                                                $variance11 = $datajam11['target1'] - $datajam11['output'];;
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance11 = $datajam7['target2'] - $datajam11['output'];;
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance11 = $datajam8['target2'] - $datajam11['output'];;
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance11 = $datajam9['target2'] - $datajam11['output'];;
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance11 = $datajam10['target2'] - $datajam11['output'];;
                                                }else{
                                                $variance11 = $datajam11['target2'] - $datajam11['output'];;
                                                }
                                            }

                                        $varianc11 = abs($variance11);
                                        echo $varianc11;
                                        if ($variance11 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 5) {
                                                echo '0';
                                            }elseif($jamkerl12 > 5){
                                                echo $datajam11['efficiency1'];
                                            }else{
                                                echo $datajam11['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 5) {
                                                echo '0';
                                            }elseif($jamkerl12 > 5){
                                                echo $datajam11['defect_rate1'];
                                            }else{
                                                echo $datajam11['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 11:00 - 12:00 -->

                                    
                                    <tr style="line-height: 15px;" class="bg-danger">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">12:00 - 13:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                        <td style="border-color: lightgray;font-size: 18px;">0%</td>
                                    </tr>
                                    
                                    <!-- 13:00 - 14:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '13:00' && $datenow <= '14:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">13:00 - 14:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 6) {
                                                echo '0';
                                            }elseif($jamkerl12 > 6){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target1'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target1'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target1'];
                                                }else{
                                                echo $datajam13['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target2'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target2'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target2'];
                                                }else{
                                                echo $datajam13['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam13['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 6) {
                                                $variance13 = '0';
                                            }elseif($jamkerl12 > 6){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance13 = $datajam7['target1'] - $datajam13['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance13 = $datajam8['target1'] - $datajam13['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance13 = $datajam9['target1'] - $datajam13['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance13 = $datajam10['target1'] - $datajam13['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance13 = $datajam11['target1'] - $datajam13['output'];
                                                }else{
                                                $variance13 = $datajam13['target1'] - $datajam13['output'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance13 = $datajam7['target2'] - $datajam13['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance13 = $datajam8['target2'] - $datajam13['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance13 = $datajam9['target2'] - $datajam13['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance13 = $datajam10['target2'] - $datajam13['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance13 = $datajam11['target2'] - $datajam13['output'];
                                                }else{
                                                $variance13 = $datajam13['target2'] - $datajam13['output'];
                                                }
                                            } 

                                        $varianc13 = abs($variance13);
                                        echo $varianc13;
                                        if ($variance13 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 6) {
                                                echo '0';
                                            }elseif($jamkerl12 > 6){
                                                echo $datajam13['efficiency1'];
                                            }else{
                                                echo $datajam13['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 6) {
                                                echo '0';
                                            }elseif($jamkerl12 > 6){
                                                echo $datajam13['defect_rate1'];
                                            }else{
                                                echo $datajam13['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 13:00 - 14:00 -->

                                    <!-- 14:00 - 15:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '14:00' && $datenow <= '15:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">14:00 - 15:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 7) {
                                                echo '0';
                                            }elseif($jamkerl12 > 7){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target1'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target1'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target1'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                echo $datajam13['target1'];
                                                }else{
                                                echo $datajam14['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target2'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target2'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target2'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                echo $datajam13['target2'];
                                                }else{
                                                echo $datajam14['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam14['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 7) {
                                                $variance14 = '0';
                                            }elseif($jamkerl12 > 7){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance14 = $datajam7['target1'] - $datajam14['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance14 = $datajam8['target1'] - $datajam14['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance14 = $datajam9['target1'] - $datajam14['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance14 = $datajam10['target1'] - $datajam14['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance14 = $datajam11['target1'] - $datajam14['output'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                $variance14 = $datajam13['target1'] - $datajam14['output'];
                                                }else{
                                                $variance14 = $datajam14['target1'] - $datajam14['output'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance14 = $datajam7['target2'] - $datajam14['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance14 = $datajam8['target2'] - $datajam14['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance14 = $datajam9['target2'] - $datajam14['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance14 = $datajam10['target2'] - $datajam14['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance14 = $datajam11['target2'] - $datajam14['output'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                $variance14 = $datajam13['target2'] - $datajam14['output'];
                                                }else{
                                                $variance14 = $datajam14['target2'] - $datajam14['output'];
                                                }
                                            }

                                        $varianc14 = abs($variance14);
                                        echo $varianc14;
                                        if ($variance14 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 7) {
                                                echo '0';
                                            }elseif($jamkerl12 > 7){
                                                echo $datajam14['efficiency1'];
                                            }else{
                                                echo $datajam14['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 7) {
                                                echo '0';
                                            }elseif($jamkerl12 > 7){
                                                echo $datajam14['defect_rate1'];
                                            }else{
                                                echo $datajam14['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 14:00 - 15:00 -->

                                    <!-- 14:00 - 15:00 -->
                                    <tr style="line-height: 18px;" <?php if ($datenow > '15:00' && $datenow <= '16:00') {echo 'class="bg-info"';} ?>>
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">15:00 - 16:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 8) {
                                                echo '0';
                                            }elseif($jamkerl12 > 8){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target1'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target1'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target1'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target1'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target1'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                echo $datajam13['target1'];
                                                }elseif ($datenow > '14:00' && $datenow <= '15:00') {
                                                echo $datajam14['target1'];
                                                }else{
                                                echo $datajam15['target1'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                echo $datajam7['target2'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                echo $datajam8['target2'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                echo $datajam9['target2'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                echo $datajam10['target2'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                echo $datajam11['target2'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                echo $datajam13['target2'];
                                                }elseif ($datenow > '14:00' && $datenow <= '15:00') {
                                                echo $datajam14['target2'];
                                                }else{
                                                echo $datajam15['target2'];
                                                }
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $datajam15['output']; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl12 < 8) {
                                                $variance15 = '0';
                                            }elseif($jamkerl12 > 8){
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance15 = $datajam7['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance15 = $datajam8['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance15 = $datajam9['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance15 = $datajam10['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance15 = $datajam11['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                $variance15 = $datajam13['target1'] - $datajam15['output'];
                                                }elseif ($datenow > '14:00' && $datenow <= '15:00') {
                                                $variance15 = $datajam14['target1'] - $datajam15['output'];
                                                }else{
                                                $variance15 = $datajam15['target1'] - $datajam15['output'];
                                                }
                                            }else{
                                                if ($datenow > '07:00' && $datenow <= '08:00') {
                                                $variance15 = $datajam7['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '08:00' && $datenow <= '09:00') {
                                                $variance15 = $datajam8['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '09:00' && $datenow <= '10:00') {
                                                $variance15 = $datajam9['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '10:00' && $datenow <= '11:00') {
                                                $variance15 = $datajam10['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '11:00' && $datenow <= '12:00') {
                                                $variance15 = $datajam11['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '13:00' && $datenow <= '14:00') {
                                                $variance15 = $datajam13['target2'] - $datajam15['output'];
                                                }elseif ($datenow > '14:00' && $datenow <= '15:00') {
                                                $variance15 = $datajam14['target2'] - $datajam15['output'];
                                                }else{
                                                $variance15 = $datajam15['target2'] - $datajam15['output'];
                                                }
                                            }

                                        $varianc15 = abs($variance15);
                                        echo $varianc15;
                                        if ($variance15 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?>
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 8) {
                                                echo '0';
                                            }elseif($jamkerl12 > 8){
                                                echo $datajam15['efficiency1'];
                                            }else{
                                                echo $datajam15['efficiency2'];
                                            }
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($jamkerl12 < 8) {
                                                echo '0';
                                            }elseif($jamkerl12 > 8){
                                                echo $datajam15['defect_rate1'];
                                            }else{
                                                echo $datajam15['defect_rate2'];
                                            }
                                        ?> %
                                        </td>
                                    </tr>
                                    <!-- 14:00 - 15:00 -->

                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">16:00 - 17:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl12 < 9) {
                                                echo '0';
                                            }elseif($jamkerl12 > 9){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output16; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl12 < 9) {
                                            $target16 = '0';
                                        }elseif($jamkerl12 > 9){
                                            $target16 = $target_floor;
                                        }else{
                                            $target16 = $target_floordom;
                                        }

                                        $variance16 = $target16 - $output16;
                                        $varianc16 = abs($variance16);
                                        echo $varianc16;
                                        if ($variance16 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($target16 == '0') {
                                            $target16 = 1;
                                        }else{
                                            $target16 = $target16;
                                        }
                                         $efficiency16 = $output16 / $target16 * 100;
                                            echo round($efficiency16,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target16 == '0') {
                                            $target16 = 1;
                                        }else{
                                            $target16 = $target16;
                                        }
                                         $defrate16 = $deffect16 / $target16 * 100;
                                            echo round($defrate16,2);
                                        ?> %
                                        </td>
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
                            <table class="table table-dark" style="text-align: center;font-size: 14px;border-radius: 10px;">
                                <thead>
                                    <tr style="line-height: 22px;font-size: 16px;border-radius: 10px;">
                                        <th scope="row" style="font-size: 20px;">Target</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?= $day_target12; ?></td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Output</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?= $actuall12; ?></td>
                                    </tr>
                                   <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Variation</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?php 
                                        $variance_sum = $day_target12 - $actuall12;
                                        $varianc_sum = abs($variance_sum);
                                        echo $varianc_sum;
                                        if ($variance_sum > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        } ?>
                                        </td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Efficiency</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?php
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
                                        }else{
                                         $min = $minutes;
                                        }

                                        if ($min > $menitkerja) {
                                           $min_ = $menitkerja;
                                        }else{
                                            $min_ = $min;
                                        }

                                        $cumulative = round($min_ * $target_menit,0) - 250;

                                        $m_prod = $actuall12 * $smvl12;
                                        // $m_prod = $cumulative * $smvl8;
                                        $m_tersedia = $menpowerl12 * $min_;
                                        $percen_effil12 = $m_prod / $m_tersedia * 100;

                                        echo round($percen_effil12,2);
                                        ?>%</td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Defect Rate</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?php
                                        if ($day_target12 == '0') {
                                            $day_target12 = 1;
                                        }else{
                                            $day_target12 = $day_target12;
                                        }
                                         $deffect_sum = $deffectl12 / $day_target12 * 100;
                                            echo round($deffect_sum,2);
                                        ?>%</td>
                                    </tr>
                                </tbody>
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
setTimeout(redirect, 10000);        
</script>

