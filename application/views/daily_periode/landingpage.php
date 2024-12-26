
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
                        <div class="card-body" style="height: 620px;">
                        <p class="d-flex flex-column">
                            <span class="text-bold" style="font-size: 22px;text-align: center;margin-top: -1rem;color: black;"><?php echo strtoupper(date("F")); ?> FACTORY DAILY EFFICIENCY</span>
                        </p>
                            <div id="chart_daily" style="margin-bottom: -1rem; margin-top: -2.5rem;">
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
        document.querySelector("body").requestFullscreen();}
       
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
    window.location = "daily/chief_daily";
};
setTimeout(redirect, 15000);
      
</script>

