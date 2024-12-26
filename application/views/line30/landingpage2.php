
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
                                    <span class="text-bold " style="font-size: 26px;"><?= $user; ?></span>
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
                                    <span class="text-bold " style="font-size: 125%;"><?= $buyer; ?></span>
                                    <span class="text-bold " style="font-size: 125%;"><?= $no_ws; ?></span>
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
                                    $timenow = date("H:i:s");
                                    $awal  = strtotime($datelog);
                                    $akhir = strtotime($datenow); // waktu sekarang
                                    $diff  = $akhir - $awal;

                                    $jam   = floor($diff / (60 * 60));
                                    $menit = $diff - $jam * (60 * 60);
                                    if ($timenow <= '07:00:00') {
                                        echo '0';
                                    }elseif($timenow >= '12:00:00' AND $timenow <= '13:00:00'){
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
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 1) {
                                                echo '0';
                                            }elseif($jamkerl30 > 1){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output7; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php
                                        if ($jamkerl30 < 1) {
                                            $target7 = '0';
                                        }elseif($jamkerl30 > 1){
                                            $target7 = $target_floor;
                                        }else{
                                            $target7 = $target_floordom;
                                        }

                                        $variance7 = $target7 - $output7;
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
                                        if ($target7 == '0') {
                                            $target7 = 1;
                                        }else{
                                            $target7 = $target7;
                                        }
                                         $efficiency7 = $output7 / $target7 * 100;
                                            echo round($efficiency7,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target7 == '0') {
                                            $target7 = 1;
                                        }else{
                                            $target7 = $target7;
                                        }
                                         $defrate7 = $deffect7 / $target7 * 100;
                                            echo round($defrate7,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">08:00 - 09:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 2) {
                                                echo '0';
                                            }elseif($jamkerl30 > 2){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output8; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 2) {
                                            $target8 = '0';
                                        }elseif($jamkerl30 > 2){
                                            $target8 = $target_floor;
                                        }else{
                                            $target8 = $target_floordom;
                                        }

                                        $variance8 = $target8 - $output8;
                                        $varianc8 = abs($variance8);
                                        echo $varianc8;
                                        if ($variance8 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target8 == '0') {
                                            $target8 = 1;
                                        }else{
                                            $target8 = $target8;
                                        }
                                         $efficiency8 = $output8 / $target8 * 100;
                                            echo round($efficiency8,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target8 == '0') {
                                            $target8 = 1;
                                        }else{
                                            $target8 = $target8;
                                        }
                                         $defrate8 = $deffect8 / $target8 * 100;
                                            echo round($defrate8,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">09:00 - 10:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 3) {
                                                echo '0';
                                            }elseif($jamkerl30 > 3){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output9 + $rework9; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 3) {
                                            $target9 = '0';
                                        }elseif($jamkerl30 > 3){
                                            $target9 = $target_floor;
                                        }else{
                                            $target9 = $target_floordom;
                                        }

                                        $variance9 = $target9 - ($output9 + $rework9);
                                        $varianc9 = abs($variance9);
                                        echo $varianc9;
                                        if ($variance9 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target9 == '0') {
                                            $target9 = 1;
                                        }else{
                                            $target9 = $target9;
                                        }
                                         $efficiency9 = $output9 / ($target9 + $rework9) * 100;
                                            echo round($efficiency9,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target9 == '0') {
                                            $target9 = 1;
                                        }else{
                                            $target9 = $target9;
                                        }
                                         $defrate9 = $deffect9 / $target9 * 100;
                                            echo round($defrate9,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">10:00 - 11:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 4) {
                                                echo '0';
                                            }elseif($jamkerl30 > 4){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output10; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 4) {
                                            $target10 = '0';
                                        }elseif($jamkerl30 > 4){
                                            $target10 = $target_floor;
                                        }else{
                                            $target10 = $target_floordom;
                                        }

                                        $variance10 = $target10 - $output10;
                                        $varianc10 = abs($variance10);
                                        echo $varianc10;
                                        if ($variance10 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target10 == '0') {
                                            $target10 = 1;
                                        }else{
                                            $target10 = $target10;
                                        }
                                         $efficiency10 = $output10 / $target10 * 100;
                                            echo round($efficiency10,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target10 == '0') {
                                            $target10 = 1;
                                        }else{
                                            $target10 = $target10;
                                        }
                                         $defrate10 = $deffect10 / $target10 * 100;
                                            echo round($defrate10,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">11:00 - 12:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 5) {
                                                echo '0';
                                            }elseif($jamkerl30 > 5){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output11; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 5) {
                                            $target11 = '0';
                                        }elseif($jamkerl30 > 5){
                                            $target11 = $target_floor;
                                        }else{
                                            $target11 = $target_floordom;
                                        }

                                        $variance11 = $target11 - $output11;
                                        $varianc11 = abs($variance11);
                                        echo $varianc11;
                                        if ($variance11 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target11 == '0') {
                                            $target11 = 1;
                                        }else{
                                            $target11 = $target11;
                                        }
                                         $efficiency11 = $output11 / $target11 * 100;
                                            echo round($efficiency11,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target11 == '0') {
                                            $target11 = 1;
                                        }else{
                                            $target11 = $target11;
                                        }
                                         $defrate11 = $deffect11 / $target11 * 100;
                                            echo round($defrate11,2);
                                        ?> %
                                        </td>
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
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 6) {
                                                echo '0';
                                            }elseif($jamkerl30 > 6){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output13; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 6) {
                                            $target13 = '0';
                                        }elseif($jamkerl30 > 6){
                                            $target13 = $target_floor;
                                        }else{
                                            $target13 = $target_floordom;
                                        }

                                        $variance13 = $target13 - $output13;
                                        $varianc13 = abs($variance13);
                                        echo $varianc13;
                                        if ($variance13 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target13 == '0') {
                                            $target13 = 1;
                                        }else{
                                            $target13 = $target13;
                                        }
                                         $efficiency13 = $output13 / $target13 * 100;
                                            echo round($efficiency13,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target13 == '0') {
                                            $target13 = 1;
                                        }else{
                                            $target13 = $target13;
                                        }
                                         $defrate13 = $deffect13 / $target13 * 100;
                                            echo round($defrate13,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">14:00 - 15:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 7) {
                                                echo '0';
                                            }elseif($jamkerl30 > 7){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output14; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 7) {
                                            $target14 = '0';
                                        }elseif($jamkerl30 > 7){
                                            $target14 = $target_floor;
                                        }else{
                                            $target14 = $target_floordom;
                                        }

                                        $variance14 = $target14 - $output14;
                                        $varianc14 = abs($variance14);
                                        echo $varianc14;
                                        if ($variance14 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target14 == '0') {
                                            $target14 = 1;
                                        }else{
                                            $target14 = $target14;
                                        }
                                         $efficiency14 = $output14 / $target14 * 100;
                                            echo round($efficiency14,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target14 == '0') {
                                            $target14 = 1;
                                        }else{
                                            $target14 = $target14;
                                        }
                                         $defrate14 = $deffect14 / $target14 * 100;
                                            echo round($defrate14,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">15:00 - 16:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 8) {
                                                echo '0';
                                            }elseif($jamkerl30 > 8){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output15; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 8) {
                                            $target15 = '0';
                                        }elseif($jamkerl30 > 8){
                                            $target15 = $target_floor;
                                        }else{
                                            $target15 = $target_floordom;
                                        }

                                        $variance15 = $target15 - $output15;
                                        $varianc15 = abs($variance15);
                                        echo $varianc15;
                                        if ($variance15 > 0) {
                                            echo '<ion-icon name="caret-down-outline" style= "color: red;"></ion-icon>';
                                        }else{
                                            echo '<ion-icon name="caret-up-outline" style= "color: green;"></ion-icon>';
                                        }
                                        ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target15 == '0') {
                                            $target15 = 1;
                                        }else{
                                            $target15 = $target15;
                                        }
                                         $efficiency15 = $output15 / $target15 * 100;
                                            echo round($efficiency15,2);
                                        ?> %
                                        </td>
                                        <td style="border-color: lightgray;font-size: 18px;">
                                        <?php 
                                        if ($target15 == '0') {
                                            $target15 = 1;
                                        }else{
                                            $target15 = $target15;
                                        }
                                         $defrate15 = $deffect15 / $target15 * 100;
                                            echo round($defrate15,2);
                                        ?> %
                                        </td>
                                    </tr>
                                    <tr style="line-height: 18px;">
                                        <th scope="row" style="border-color: lightgray;font-size: 18px;">16:00 - 17:00</th>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php 
                                            if ($jamkerl30 < 9) {
                                                echo '0';
                                            }elseif($jamkerl30 > 9){
                                                echo $target_floor;
                                            }else{
                                                echo $target_floordom;
                                            } ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?= $output16; ?></td>
                                        <td style="border-color: lightgray;font-size: 18px;"><?php
                                        if ($jamkerl30 < 9) {
                                            $target16 = '0';
                                        }elseif($jamkerl30 > 9){
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
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?= $day_target30; ?></td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Output</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?= $actuall30; ?></td>
                                    </tr>
                                   <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Variation</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?php 
                                        $variance_sum = $day_target30 - $actuall30;
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
                                        $menitkerja = $jamkerl30 * 60;
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

                                        $m_prod = $actuall30 * $smvl30;
                                        // $m_prod = $cumulative * $smvl8;
                                        $m_tersedia = $menpowerl30 * $min_;
                                        $percen_effil30 = $m_prod / $m_tersedia * 100;

                                        echo round($percen_effil30,2);
                                        ?>%</td>
                                    </tr>
                                    <tr style="line-height: 22px;font-size: 16px;">
                                        <th scope="row" style="font-size: 20px;">Defect Rate</th>
                                    </tr>
                                    <tr class="bg-light" style="line-height: 23px;font-size: 16px;">
                                        <td style="font-size: 22px;border-radius: 10px;font-weight: bold;"><?php
                                        if ($day_target30 == '0') {
                                            $day_target30 = 1;
                                        }else{
                                            $day_target30 = $day_target30;
                                        }
                                         $deffect_sum = $deffectl30 / $day_target30 * 100;
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

