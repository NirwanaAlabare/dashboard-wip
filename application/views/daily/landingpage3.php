
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
    <div class="content animate__animated animate__fadein animate__slow" style="max-width: 1366px;max-height: 786px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 625px;">
                            <?php $interval =  60000/$slide_chief; ?>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="<?= $interval ?>">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="1">
                                    </div>

                                    <?php if ($slide_chief >= 1) { ?>

                                    <div class="carousel-item">
                                        <table class="table table-bordered" width="100%" style="border: 1px solid black;" >
                                <thead>
                                <tr>
                                    <th rowspan="2" colspan="5" style="border: 1px solid black;width: 65%;text-align: center;vertical-align: middle;color: black;">CHIEF DAILY EFFICIENCY & RFT <?php echo strtoupper(date("F")); ?></th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Before</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Yesterday</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Today</th>
                                    <th rowspan="2" style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;color: black;">Rank</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;?>
                                    <?php foreach ($output_chief1 as $outch1) : ?>
                                            <tr>
                                    <td colspan = "3" style="border: 1px solid black;width:16%;">
                                        <div class="row">
                                            <div class="col-lg-6" style="text-align: center;vertical-align: middle;">
                                                <img src="<?= base_url('assets/') ?>dist/img/chief/chief<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 105px;outline: 1px solid #CD853F;">
                                                <b style="color: black;"><?= $outch1['short_name']; ?></b>
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader1_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader2_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader3_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader4_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader5_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader6_cf<?=$outch1['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2" style="border: 1px solid black;width:49%;"><div id="chart_chief<?=$outch1['id_chief'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;"></div></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch1['effi_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch1['rft_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch1['effi_yesterday'] == $outch1['effi_before']) {echo'background-color: #FFFF00';}elseif($outch1['effi_yesterday'] > $outch1['effi_before']){echo'background-color: #00FA9A';}elseif($outch1['effi_yesterday'] < $outch1['effi_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch1['effi_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch1['rft_yesterday'] == $outch1['rft_before']) {echo'background-color: #FFFF00';}elseif($outch1['rft_yesterday'] > $outch1['rft_before']){echo'background-color: #00FA9A';}elseif($outch1['rft_yesterday'] < $outch1['rft_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch1['rft_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch1['effi_today'] == $outch1['effi_yesterday']) {echo'background-color: #FFFF00';}elseif($outch1['effi_today'] > $outch1['effi_yesterday']){echo'background-color: #00FA9A';}elseif($outch1['effi_today'] < $outch1['effi_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch1['effi_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch1['rft_today'] == $outch1['rft_yesterday']) {echo'background-color: #FFFF00';}elseif($outch1['rft_today'] > $outch1['rft_yesterday']){echo'background-color: #00FA9A';}elseif($outch1['rft_today'] < $outch1['rft_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch1['rft_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?=$i1?> <?php if ($i1 == '1') {?><img src="<?= base_url('assets/') ?>dist/img/best-team.png" alt="Nag-Logo" class="brand-image elevation-3" style="width: 45px;height: auto;outline: 1px solid #5F9EA0;"> <?php } ?></b> </td>
                                </tr>
                                <?php $i1++; endforeach; ?>
                                </tbody>
                                </table>
                                    </div>
                                <?php } ?>

                                <?php if ($slide_chief >= 2) { ?>

                                    <div class="carousel-item">
                                        <table class="table table-bordered" width="100%" style="border: 1px solid black;" >
                                <thead>
                                <tr>
                                    <th rowspan="2" colspan="5" style="border: 1px solid black;width: 65%;text-align: center;vertical-align: middle;color: black;">CHIEF DAILY EFFICIENCY & RFT <?php echo strtoupper(date("F")); ?></th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Before</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Yesterday</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Today</th>
                                    <th rowspan="2" style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;color: black;">Rank</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;?>
                                    <?php foreach ($output_chief2 as $outch2) : ?>
                                            <tr>
                                    <td colspan = "3" style="border: 1px solid black;width:16%;">
                                        <div class="row">
                                            <div class="col-lg-6" style="text-align: center;vertical-align: middle;">
                                                <img src="<?= base_url('assets/') ?>dist/img/chief/chief<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 105px;outline: 1px solid #CD853F;">
                                                <b style="color: black;"><?= $outch2['short_name']; ?></b>
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader1_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader2_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader3_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader4_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader5_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader6_cf<?=$outch2['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2" style="border: 1px solid black;width:49%;"><div id="chart_chief<?=$outch2['id_chief'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;"></div></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch2['effi_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch2['rft_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch2['effi_yesterday'] == $outch2['effi_before']) {echo'background-color: #FFFF00';}elseif($outch2['effi_yesterday'] > $outch2['effi_before']){echo'background-color: #00FA9A';}elseif($outch2['effi_yesterday'] < $outch2['effi_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch2['effi_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch2['rft_yesterday'] == $outch2['rft_before']) {echo'background-color: #FFFF00';}elseif($outch2['rft_yesterday'] > $outch2['rft_before']){echo'background-color: #00FA9A';}elseif($outch2['rft_yesterday'] < $outch2['rft_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch2['rft_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch2['effi_today'] == $outch2['effi_yesterday']) {echo'background-color: #FFFF00';}elseif($outch2['effi_today'] > $outch2['effi_yesterday']){echo'background-color: #00FA9A';}elseif($outch2['effi_today'] < $outch2['effi_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch2['effi_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch2['rft_today'] == $outch2['rft_yesterday']) {echo'background-color: #FFFF00';}elseif($outch2['rft_today'] > $outch2['rft_yesterday']){echo'background-color: #00FA9A';}elseif($outch2['rft_today'] < $outch2['rft_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch2['rft_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?=$i2?></b> </td>
                                </tr>
                                <?php $i2++; endforeach; ?>
                                </tbody>
                                </table>
                                    </div>
                                <?php } ?>
                                <?php if ($slide_chief >= 3) { ?>

                                    <div class="carousel-item">
                                        <table class="table table-bordered" width="100%" style="border: 1px solid black;" >
                                <thead>
                                <tr>
                                    <th rowspan="2" colspan="5" style="border: 1px solid black;width: 65%;text-align: center;vertical-align: middle;color: black;">CHIEF DAILY EFFICIENCY & RFT <?php echo strtoupper(date("F")); ?></th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Before</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Yesterday</th>
                                    <th colspan="2" style="border: 1px solid black;width: 10%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">Today</th>
                                    <th rowspan="2" style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;color: black;">Rank</th>
                                </tr>
                                <tr>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">EFFY</th>
                                    <th style="border: 1px solid black;width: 5%;text-align: center;vertical-align: middle;line-height: 7px;color: black;">RFT</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i3 = $i2;?>
                                    <?php foreach ($output_chief3 as $outch3) : ?>
                                            <tr>
                                    <td colspan = "3" style="border: 1px solid black;width:16%;">
                                        <div class="row">
                                            <div class="col-lg-6" style="text-align: center;vertical-align: middle;">
                                                <img src="<?= base_url('assets/') ?>dist/img/chief/chief<?=$outch3['id_chief'];?>.png" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 105px;outline: 1px solid #CD853F;">
                                                <b style="color: black;"><?= $outch3['short_name']; ?></b>
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader1_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader2_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader3_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                            <div class="col-lg-3">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader4_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader5_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                                <img src="<?= base_url('assets/') ?>dist/img/leader/leader6_cf<?=$outch3['id_chief'];?>.jpg" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 42px;outline: 1px solid #B22222;">
                                            </div>
                                        </div>
                                    </td>
                                    <td colspan="2" style="border: 1px solid black;width:49%;"><div id="chart_chief<?=$outch3['id_chief'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;"></div></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch3['effi_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?= $outch3['rft_before']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch2['effi_yesterday'] == $outch2['effi_before']) {echo'background-color: #FFFF00';}elseif($outch2['effi_yesterday'] > $outch2['effi_before']){echo'background-color: #00FA9A';}elseif($outch2['effi_yesterday'] < $outch2['effi_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch1['effi_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch3['rft_yesterday'] == $outch3['rft_before']) {echo'background-color: #FFFF00';}elseif($outch3['rft_yesterday'] > $outch3['rft_before']){echo'background-color: #00FA9A';}elseif($outch3['rft_yesterday'] < $outch3['rft_before']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch3['rft_yesterday']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch3['effi_today'] == $outch3['effi_yesterday']) {echo'background-color: #FFFF00';}elseif($outch3['effi_today'] > $outch3['effi_yesterday']){echo'background-color: #00FA9A';}elseif($outch3['effi_today'] < $outch3['effi_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch3['effi_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;<?php if ($outch3['rft_today'] == $outch3['rft_yesterday']) {echo'background-color: #FFFF00';}elseif($outch3['rft_today'] > $outch3['rft_yesterday']){echo'background-color: #00FA9A';}elseif($outch3['rft_today'] < $outch3['rft_yesterday']){echo'background-color: #FF3333';}else{}?>"><b><?= $outch3['rft_today']; ?> %</b></td>
                                    <td style="border: 1px solid black;width:5%;text-align: center;vertical-align: middle;color: black;"><b><?=$i3?></b> </td>
                                </tr>
                                <?php $i3++; endforeach; ?>
                                </tbody>
                                </table>
                                    </div>

                                    <?php }else{}
                                    ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="sr-only">Previous</span> -->
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <!--  <span class="sr-only">Next</span> -->
                                </a>
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
        window.onload = function() { jam(); }
       
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


        function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>
    </script>
<script type="text/javascript">
var redirect = function() {
    window.location = "line_daily";
};
setTimeout(redirect, 60000);
      
</script>

