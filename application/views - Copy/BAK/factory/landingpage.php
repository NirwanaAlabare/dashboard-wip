
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



                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 300px;">
                            <div id="chart_eff" style="margin-bottom: -1rem; margin-top: -2.5rem;">
                            </div>
                            <p class="d-flex flex-column">
                            <span class="text-bold" style="font-size: 25px;text-align: center;">Efficiency</span>
                        </p>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 300px;">
                            <div id="chart_rft" style="margin-bottom: -1rem; margin-top: -2.5rem;">
                            </div>
                            <p class="d-flex flex-column">
                            <span class="text-bold" style="font-size: 25px;text-align: center;">RFT Rate</span>
                        </p>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-6">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 300px;">
                            <span class="text-bold" style="font-size: 25px;text-align: center;">Top 5 Line <ion-icon name="arrow-up-circle-outline" style= "color: green;"></ion-icon></span>
                            <div>
                                <table class="table table-striped" width="100%">
                                <thead>
                                    <tr style="line-height: 15px;">
                                        <th scope="col" style="width: 8%;">#</th>
                                        <th scope="col" style="width: 18%;">Line</th>
                                        <th scope="col" style="width: 19%;">Efficiency</th>
                                        <th scope="col" style="width: 9%;">QTY</th>
                                        <th scope="col" style="width: 19%;">RFT</th>
                                        <th scope="col" style="width: 18%;">Defect</th>
                                        <th scope="col" style="width: 9%;">QTY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $i = 1; ?>
                                        <?php foreach ($top5line as $t5line) : ?>
                                            <tr style="line-height: 15px;font-size: 14px;">
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $t5line['nama_line']; ?></td>
                                                <td><?= $t5line['effi']; ?> %</td>
                                                <td><?= $t5line['actual']; ?></td>
                                                <td><?= $t5line['per_rft']; ?> %</td>
                                                <td><?= $t5line['per_defect']; ?> %</td>
                                                <td><?= $t5line['deffect']; ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div> 

                <div class="col-lg-6">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 300px;padding-top: -30px;">
                            <span class="text-bold" style="font-size: 25px;text-align: center;">Top 5 Defect</span>
                            <div id="chart123" style="margin-bottom: -1rem; margin-top: -1rem;">
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-6">
                    <div class="card bg-secondary">
                        <div class="card-body" style="height: 300px;">
                            <span class="text-bold" style="font-size: 25px;text-align: center;">Most Defect Line <ion-icon name="arrow-down-circle-outline" style= "color: red;"></ion-icon></span>
                            <div>
                               <table class="table table-striped" width="100%">
                                <thead>
                                    <tr style="line-height: 15px;">
                                        <th scope="col" style="width: 10%">#</th>
                                        <th scope="col" style="width: 21%">Line</th>
                                        <th scope="col" style="width: 46%">Defect Type</th>
                                        <th scope="col" style="width: 23%">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>
                                        <?php foreach ($under5line as $u5line) : ?>
                                            <tr style="line-height: 15px;font-size: 14px;">
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $u5line['nama_line']; ?></td>
                                                <td><?= $u5line['defect_type']; ?></td>
                                                <td><?= $u5line['deffect']; ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    
                                </tbody>
                                </table>
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
    window.location.reload();
};
setTimeout(redirect, 30000);        
</script>

