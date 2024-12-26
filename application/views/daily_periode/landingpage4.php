
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
    <div class="content animate__animated animate__fadein animate__slow" style="max-width: 1366px;max-height: 786px; background-color: #121847">
        <div class="container-fluid">
            <?php $interval =  90000/$slide_lead; ?>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="<?= $interval ?>">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="1"></div>
                    <?php if ($slide_lead == 1) { ?>
                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                <?php }elseif($slide_lead == 2){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <?php }elseif($slide_lead == 3){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <?php }elseif($slide_lead == 4){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead4 as $outld4) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld4['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld4['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld4['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld4['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld4['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <?php }elseif($slide_lead == 5){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead4 as $outld4) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld4['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld4['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld4['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld4['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld4['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead5 as $outld5) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld5['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld5['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld5['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld5['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld5['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                <?php }elseif($slide_lead == 6){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead4 as $outld4) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld4['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld4['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld4['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld4['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld4['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead5 as $outld5) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld5['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld5['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld5['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld5['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld5['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead6 as $outld6) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld6['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld6['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld6['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld6['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld6['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <?php }elseif($slide_lead == 7){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead4 as $outld4) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld4['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld4['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld4['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld4['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld4['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead5 as $outld5) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld5['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld5['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld5['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld5['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld5['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead6 as $outld6) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld6['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld6['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld6['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld6['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld6['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead7 as $outld7) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld7['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld7['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld7['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld7['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld7['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld7['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld7['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                <?php }elseif($slide_lead == 8){ ?>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead1 as $outld1) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld1['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld1['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld1['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld1['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld1['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld1['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead2 as $outld2) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld2['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld2['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld2['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld2['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld2['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld2['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead3 as $outld3) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld3['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld3['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld3['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld3['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld3['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld3['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead4 as $outld4) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld4['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld4['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld4['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld4['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld4['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld4['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead5 as $outld5) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld5['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld5['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld5['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld5['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld5['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld5['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead6 as $outld6) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld6['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld6['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld6['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld6['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld6['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld6['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead7 as $outld7) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld7['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld7['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld7['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld7['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld7['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld7['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld7['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">
                            <?php $i = 1;?>
                            <?php foreach ($output_lead8 as $outld8) : ?>
                            <div class="col-lg-6">
                                <div class="card bg-secondary">
                                    <div class="card-body" style="height: 300px;">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                            <span class="text-bold" style="font-size: 18px;text-align: center;color:black;"><?=$outld8['sewing_name'];?></span>
                                            </p>
                                            <div id="chart_daily_line<?=$outld8['id'];?>" style="margin-bottom: -1rem; margin-top: -1.5rem;">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <table style="color: black;" width="100%">
                                            <tr>
                                            <th><img src="<?= base_url('assets/') ?>dist/img/leader/<?=$outld8['pict_leader'];?>" alt="Nag-Logo" class="brand-image elevation-3" style="width: auto;height: 45px;line-height: 12px;outline: 1px solid #006400;">
                                            <p class="d-flex flex-column" >
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;"><?=$outld8['short_name'];?></span>
                                            <br>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Chief</u></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld8['chief_name'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Section</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;margin-bottom: 0.7rem;"><?=$outld8['rank_section'];?></span>
                                            <span class="text-bold" style="font-size: 12px;text-align: left;color:black;"><u>Factory</u></span>
                                            <span class="text-bold" style="font-size: 16px;text-align: center;color:black;"><?=$outld8['rank_factory'];?></span>
                                            </p>
                                            </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    </div>
                            
                <?php }else{} ?>


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
    
            <!-- /.row -->
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
<!-- <script type="text/javascript">
var redirect = function() {
    window.location = "factory_daily";
};
setTimeout(redirect, 90000);          
</script>
 -->
