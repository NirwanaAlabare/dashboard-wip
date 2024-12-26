
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
                        <p class="d-flex flex-column">
                            <span class="text-bold" style="font-size: 22px;text-align: center;margin-top: -1rem;color: white;">OUTPUT FACTORY <?= $tanggal_kerja; ?></span>
                        </p>
                            <div style="margin-top: -1rem">

                                <?php $interval =  60000/$jmlslide; ?>

                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="<?= $interval ?>">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="10">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                <?php
                                    if ($jmlslide == 1) { ?>
                                        <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                    <?php }elseif($jmlslide == 2){
                                    ?>

                                    <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i1; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i1++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i2; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i2++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                    <?php }elseif($jmlslide == 3){
                                    ?>


                                <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i1; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i1++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i2; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i2++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i3 = $i2;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s3 as $outfac3) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $i3; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac3['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac3['styleno']; ?></td>
                                                <td ><?= $outfac3['rft']; ?></td>
                                                <td ><?= $outfac3['defect_val']; ?></td>
                                                <td ><?= $outfac3['rework']; ?></td>
                                                <td ><?= $outfac3['reject']; ?></td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_rft'] >= 97 || $outfac3['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac3['per_reject']; ?> %</td>
                                                <td ><?= $outfac3['actual']; ?></td>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac3['jml_ws']; ?>"  <?php if ($outfac3['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac3['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac3['nama_line']) {
                                                    $i3++;
                                                }
                                            $line = $outfac3['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                    <?php }elseif($jmlslide == 4){
                                    ?>

                                    <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i1; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i1++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i2; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i2++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i3 = $i2;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s3 as $outfac3) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $i3; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac3['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac3['styleno']; ?></td>
                                                <td ><?= $outfac3['rft']; ?></td>
                                                <td ><?= $outfac3['defect_val']; ?></td>
                                                <td ><?= $outfac3['rework']; ?></td>
                                                <td ><?= $outfac3['reject']; ?></td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_rft'] >= 97 || $outfac3['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac3['per_reject']; ?> %</td>
                                                <td ><?= $outfac3['actual']; ?></td>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac3['jml_ws']; ?>"  <?php if ($outfac3['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac3['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac3['nama_line']) {
                                                    $i3++;
                                                }
                                            $line = $outfac3['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i4 = $i3;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s4 as $outfac4) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $i4; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac4['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac4['styleno']; ?></td>
                                                <td ><?= $outfac4['rft']; ?></td>
                                                <td ><?= $outfac4['defect_val']; ?></td>
                                                <td ><?= $outfac4['rework']; ?></td>
                                                <td ><?= $outfac4['reject']; ?></td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_rft'] >= 97 || $outfac4['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac4['per_reject']; ?> %</td>
                                                <td ><?= $outfac4['actual']; ?></td>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac4['jml_ws']; ?>"  <?php if ($outfac4['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac4['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac4['nama_line']) {
                                                    $i4++;
                                                }
                                            $line = $outfac4['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                    <?php }elseif($jmlslide == 5){
                                    ?>
                                    <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i1; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i1++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i2; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i2++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i3 = $i2;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s3 as $outfac3) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $i3; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac3['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac3['styleno']; ?></td>
                                                <td ><?= $outfac3['rft']; ?></td>
                                                <td ><?= $outfac3['defect_val']; ?></td>
                                                <td ><?= $outfac3['rework']; ?></td>
                                                <td ><?= $outfac3['reject']; ?></td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_rft'] >= 97 || $outfac3['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac3['per_reject']; ?> %</td>
                                                <td ><?= $outfac3['actual']; ?></td>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac3['jml_ws']; ?>"  <?php if ($outfac3['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac3['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac3['nama_line']) {
                                                    $i3++;
                                                }
                                            $line = $outfac3['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i4 = $i3;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s4 as $outfac4) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $i4; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac4['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac4['styleno']; ?></td>
                                                <td ><?= $outfac4['rft']; ?></td>
                                                <td ><?= $outfac4['defect_val']; ?></td>
                                                <td ><?= $outfac4['rework']; ?></td>
                                                <td ><?= $outfac4['reject']; ?></td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_rft'] >= 97 || $outfac4['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac4['per_reject']; ?> %</td>
                                                <td ><?= $outfac4['actual']; ?></td>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac4['jml_ws']; ?>"  <?php if ($outfac4['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac4['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac4['nama_line']) {
                                                    $i4++;
                                                }
                                            $line = $outfac4['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i5 = $i4;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s4 as $outfac4) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $i5; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac4['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac4['styleno']; ?></td>
                                                <td ><?= $outfac4['rft']; ?></td>
                                                <td ><?= $outfac4['defect_val']; ?></td>
                                                <td ><?= $outfac4['rework']; ?></td>
                                                <td ><?= $outfac4['reject']; ?></td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_rft'] >= 97 || $outfac4['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac4['per_reject']; ?> %</td>
                                                <td ><?= $outfac4['actual']; ?></td>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac4['jml_ws']; ?>"  <?php if ($outfac4['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac4['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac4['nama_line']) {
                                                    $i5++;
                                                }
                                            $line = $outfac4['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                    <?php }elseif($jmlslide == 6){
                                    ?>

                                    <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i1 = 1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i1; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i1++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i2 = $i1;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i2; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i2++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i3 = $i2;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s3 as $outfac3) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $i3; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac3['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac3['styleno']; ?></td>
                                                <td ><?= $outfac3['rft']; ?></td>
                                                <td ><?= $outfac3['defect_val']; ?></td>
                                                <td ><?= $outfac3['rework']; ?></td>
                                                <td ><?= $outfac3['reject']; ?></td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_rft'] >= 97 || $outfac3['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac3['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac3['per_rft'] > 0 || $outfac3['per_defect'] > 0 || $outfac3['per_reject'] > 0 ) { if ($outfac3['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac3['per_reject']; ?> %</td>
                                                <td ><?= $outfac3['actual']; ?></td>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac3['jml_ws']; ?>"><?= $outfac3['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac3['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac3['jml_ws']; ?>"  <?php if ($outfac3['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac3['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac3['nama_line']) {
                                                    $i3++;
                                                }
                                            $line = $outfac3['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i4 = $i3;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s4 as $outfac4) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $i4; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac4['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac4['styleno']; ?></td>
                                                <td ><?= $outfac4['rft']; ?></td>
                                                <td ><?= $outfac4['defect_val']; ?></td>
                                                <td ><?= $outfac4['rework']; ?></td>
                                                <td ><?= $outfac4['reject']; ?></td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_rft'] >= 97 || $outfac4['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac4['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac4['per_rft'] > 0 || $outfac4['per_defect'] > 0 || $outfac4['per_reject'] > 0 ) { if ($outfac4['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac4['per_reject']; ?> %</td>
                                                <td ><?= $outfac4['actual']; ?></td>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac4['jml_ws']; ?>"><?= $outfac4['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac4['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac4['jml_ws']; ?>"  <?php if ($outfac4['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac4['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac4['nama_line']) {
                                                    $i4++;
                                                }
                                            $line = $outfac4['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>


                                <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i5 = $i4;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s1 as $outfac1) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $i5; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac1['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac1['styleno']; ?></td>
                                                <td ><?= $outfac1['rft']; ?></td>
                                                <td ><?= $outfac1['defect_val']; ?></td>
                                                <td ><?= $outfac1['rework']; ?></td>
                                                <td ><?= $outfac1['reject']; ?></td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_rft'] >= 97 || $outfac1['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac1['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac1['per_rft'] > 0 || $outfac1['per_defect'] > 0 || $outfac1['per_reject'] > 0 ) { if ($outfac1['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac1['per_reject']; ?> %</td>
                                                <td ><?= $outfac1['actual']; ?></td>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac1['jml_ws']; ?>"><?= $outfac1['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac1['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac1['jml_ws']; ?>"  <?php if ($outfac1['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac1['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac1['nama_line']) {
                                                    $i5++;
                                                }
                                            $line = $outfac1['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>

                            <div class="carousel-item">
                                            <table class="table table-hover table-bordered" style="border-radius: 5px;" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 4%;" rowspan="2" scope="col">No</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 10%;" rowspan="2" scope="col">Line</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 11%;" rowspan="2" scope="col">No WS</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 13%;" rowspan="2" scope="col">Style</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 32%;" colspan="4" scope="col">Output</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Rate</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 24%;" colspan="3" scope="col">Target</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Rework</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">RFT</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Defect</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Reject</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Actual</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 6%;">Target</th>
                                        <th style="text-align: center;vertical-align: middle;line-height: 6px;width: 8%;">Efficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i6 = $i5;
                                    $line = null;
                                    $sizeStartRow = 0;
                                    $counter = 0; ?>
                                        <?php foreach ($output_factory_s2 as $outfac2) : ?>
                                            <tr style="line-height: 0.6rem;font-size: 12px;text-align: center;vertical-align: middle;">
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $i6; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['nama_line']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>

                                                <td ><?= $outfac2['kpno']; ?></td>
                                                <td style="font-size: 11px"><?= $outfac2['styleno']; ?></td>
                                                <td ><?= $outfac2['rft']; ?></td>
                                                <td ><?= $outfac2['defect_val']; ?></td>
                                                <td ><?= $outfac2['rework']; ?></td>
                                                <td ><?= $outfac2['reject']; ?></td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_rft'] >= 97 || $outfac2['per_rft'] == 0) {
                                                    echo 'style = "background-color: #32CD32;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_rft']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_defect'] > 3 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; } ?>><?= $outfac2['per_defect']; ?> %</td>
                                                <td  <?php if ($outfac2['per_rft'] > 0 || $outfac2['per_defect'] > 0 || $outfac2['per_reject'] > 0 ) { if ($outfac2['per_reject'] > 0 ) {
                                                    echo 'style = "background-color: #FF3333;"';
                                                }else{
                                                    echo 'style = "background-color: #32CD32;"';
                                                } } else{ echo 'style = "background-color: #778899;"'; }?>><?= $outfac2['per_reject']; ?> %</td>
                                                <td ><?= $outfac2['actual']; ?></td>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td style = "text-align: center;vertical-align: middle;" rowspan="<?= $outfac2['jml_ws']; ?>"><?= $outfac2['target_min']; ?></td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                                <?php if ($line != $outfac2['nama_line']) {
                                                    $sizeStartRow = $counter; ?>
                                                    <td rowspan="<?= $outfac2['jml_ws']; ?>"  <?php if ($outfac2['effi'] > 85 ) {
                                                    echo 'style = "background-color: #32CD32;text-align: center;vertical-align: middle;"';
                                                }else{
                                                    echo 'style = "background-color: #FF3333;text-align: center;vertical-align: middle;"';
                                                } ?>><?= $outfac2['effi']; ?> %</td>
                                                    <?php } else { ?>
                                                    <td hidden></td>
                                                <?php } ?>
                                            </tr>
                                            <?php
                                                if ($line != $outfac2['nama_line']) {
                                                    $i6++;
                                                }
                                            $line = $outfac2['nama_line']; //update the previous size value
                                            $counter++;?>
                                        <?php endforeach; ?>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                                      <?php }else{}
                                    ?>

                                    </div>
                                </div>

                                
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
        window.onload = function() { jam(); 
        document.querySelector("body").requestFullscreen();
        ('.carousel').carousel({
            interval: 1000 * 10
        })}
       
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
    window.location =  "dashboard2";
};
setTimeout(redirect, 60000);
      
</script>

