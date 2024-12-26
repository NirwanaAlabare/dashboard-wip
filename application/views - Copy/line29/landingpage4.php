
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

                  <div class="col-lg-6">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 515px;">
                            
                            <div class="row">
                            <img src="<?= base_url('assets/') ?>dist/img/baju.jpeg" alt="Nag-Logo" class="brand-image elevation-3" style="opacity: .8;width: 620px;height: 470px;">
                        </div>
                        </div>
                    </div>
                </div>        
                <!-- / div 3 -->

                
                  <div class="col-lg-6">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 515px;">
                            <p class="d-flex flex-column" style="margin-top: -0.5rem;">
                                <span class="text-bold " style="font-size: 35px;"><u>List Deffect</u></span>
                            </p>
                            <br>

                            <?php $i = 1; ?>
                                        <?php foreach ($list_defect as $dld) : ?>
                                            <div class="row">
                                                <div class="col-10">
                                            <span class="text-bold " style="font-size: 30px;"><?= $i; ?>. <?= $dld['defect_type']; ?></span>
                                            </div> 
                                            <div class="col-2">
                                                <span class="text-bold " style="font-size: 30px;">(<?= $dld['jml']; ?>)</span>
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
    </script>
<script type="text/javascript">
var redirect = function() {
    window.location = "dashboard1";
};
setTimeout(redirect, 10000);        
</script>

