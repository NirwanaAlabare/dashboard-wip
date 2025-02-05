<!-- Content Header (Page header) -->
<!-- 
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div> 
-->


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
                                        <span class="text-bold" style="font-size: 26px;"><?php echo date("Y-m-d"); ?> <span id="jam" style="font-size:24"></span></span>
                                        <span class="text-bold" style="font-size: 26px;"><?= $user; ?></span>
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
            <div class="w-100"></div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-8" id="productimage">
                        <div class="card bg-secondary">
                            <div class="card-body overflow-hidden" style="height: 515px;padding-bottom: 20px;">

                                <div class="row">
                                    <!-- <img src="<?= base_url('assets/') ?>dist/img/baju.jpeg" alt="Nag-Logo" class="brand-image elevation-3" style="opacity: .8;width: 620px;height: 470px;"> -->
                                    <!-- <img src ='http://10.10.5.130:8000/storage/images/<?= $link_gambar; ?>'> -->
                                    <div class="show-defect-area" id="show-defect-area">
                                        <div class="position-relative d-flex flex-column justify-content-center align-items-center">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php foreach ($link_gambar1 as $gambar1) : ?>
                                                        <div class="carousel-item active">
                                                            <div class="defect-area-img-container mx-auto overflow-hidden" style="height: 470px;padding-bottom: 20px;">
                                                                <?php foreach ($positiondefect as $posdef) : ?>
                                                                    <?php
                                                                    $gambar1_ = $gambar1['image'];
                                                                    $gambar2_ = $posdef['image'];
                                                                    if ($gambar1_ == $gambar2_) {
                                                                        echo '<div class="defect-area-img-point" data-defect-type="' . $posdef['defect_type_id'] . '" data-x="' . floatval($posdef['defect_area_x']) . '" data-y="' . floatval($posdef['defect_area_y']) . '"></div>';
                                                                    }
                                                                    ?>
                                                                <?php endforeach; ?>
                                                                <img style="opacity: .8;width: auto;height: 470px;" src='http://10.10.5.62:8080/erp/pages/prod_new/upload_files/<?= $gambar1['image']; ?>' class="img-fluid defect-area-img" id="defect-area-img-show">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <?php foreach ($link_gambar as $gambar) : ?>
                                                        <div class="carousel-item">
                                                            <div class="defect-area-img-container mx-auto overflow-hidden" style="height: 470px;padding-bottom: 20px;">
                                                                <?php foreach ($positiondefect as $posdef) : ?>
                                                                    <?php
                                                                    $gambar1 = $gambar['image'];
                                                                    $gambar2 = $posdef['image'];
                                                                    if ($gambar1 == $gambar2) {
                                                                        echo '<div class="defect-area-img-point" data-defect-type="' . $posdef['defect_type_id'] . '" data-x="' . floatval($posdef['defect_area_x']) . '" data-y="' . floatval($posdef['defect_area_y']) . '"></div>';
                                                                    }
                                                                    ?>
                                                                <?php endforeach; ?>
                                                                <img style="opacity: .8;width: auto;height: 470px;" src='http://10.10.5.62:8080/erp/pages/prod_new/upload_files/<?= $gambar['image']; ?>' class="img-fluid defect-area-img" id="defect-area-img-show1">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" id="listdefect">
                        <div class="card bg-secondary">
                            <div class="card-body" style="height: 515px;">
                                <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                    <span class="text-bold " style="font-size: 35px;"><u>List Deffect</u></span>
                                </p>
                                <br>
                                <?php $i = 1; ?>
                                <?php foreach ($list_defect as $key => $dld) : ?>
                                    <input type="hidden" id="defno<?= $key + 1 ?>" value="<?= $dld['defect_type_id'] ?>">
                                    <div class="row">
                                        <div class="col-10">
                                            <span class="text-bold " style="font-size: 26px;" id="defno<?= $key + 1 ?>text"><?= $i; ?>. <?= $dld['defect_type']; ?></span>
                                        </div>
                                        <div class="col-2">
                                            <span class="text-bold " style="font-size: 26px;">(<?= $dld['jml']; ?>)</span>
                                        </div>
                                    </div>

                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <div class="row">
                                    <div class="col-6">

                                    </div>
                                </div>
                            </div>
                        </div>
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
    window.onload = function() {
        jam();
        $('.carousel').carousel({
            interval: 3000
        })
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
            window.location = "/dashboard-wip/Line/dashboard1/<?= $line ?>";
        }
    };

    setTimeout(redirect, 10000);
</script>

<script>
    let defectAreaImage = document.getElementsByClassName('defect-area-img');
    let defectAreaImagePoint = document.getElementsByClassName('defect-area-img-point');
    
    const defNumberOne = document.getElementById('defno1') ? document.getElementById('defno1').value : '';
    const defNumberTwo = document.getElementById('defno2') ? document.getElementById('defno2').value : '';
    const defNumberThree = document.getElementById('defno3') ? document.getElementById('defno3').value : '';
    const defNumberFour = document.getElementById('defno4') ? document.getElementById('defno4').value : '';
    const defNumberFive = document.getElementById('defno5') ? document.getElementById('defno5').value : '';

    for (let i = 0; i < defectAreaImage.length; i++) {
        let img = new Image();

        img.src = defectAreaImage[i].src;

        img.onload = function() {
            var imgPercent = 470 / this.height * 100;
            var imgWidth = (imgPercent / 100) * this.width;

            var defectAreaImagePointArr = [...defectAreaImagePoint];

            for (let j = 0; j < defectAreaImagePoint.length; j++) {
                let color = "whitesmoke";
                let border = "gray";
                switch (defectAreaImagePoint[j].getAttribute('data-defect-type')) {
                    case defNumberOne:
                        color = "#ec3032";
                        border = "#b50204";
                        break;
                    case defNumberTwo:
                        color = "#fd8024";
                        border = "#da5d02";
                        break;
                    case defNumberThree:
                        color = "#fffb45";
                        border = "#d0cb02";
                        break;
                    case defNumberFour:
                        color = "#2bff6b";
                        border = "#00c43b";
                        break;
                    case defNumberFive:
                        color = "whitesmoke";
                        border = "gray";
                        break;
                }

                defectAreaImagePoint[j].style.backgroundColor = color;
                defectAreaImagePoint[j].style.border = "1px solid " + border;
                defectAreaImagePoint[j].style.width = 0.03 * imgWidth + 'px';
                defectAreaImagePoint[j].style.height = defectAreaImagePoint[j].style.width;
                defectAreaImagePoint[j].style.left = 'calc(' + (defectAreaImagePoint[j].getAttribute('data-x')) + '% - ' + 0.02 * imgWidth + 'px)';
                defectAreaImagePoint[j].style.top = 'calc(' + (defectAreaImagePoint[j].getAttribute('data-y')) + '% - ' + 0.02 * imgWidth + 'px)';
            }
        }
    }
</script>