<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AR-NAG | Log in</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/style.css">
</head>

<body >
   <div class="content">
    <div class="container" style="position: relative;padding-top: 5%;">
      <div class="row">
        <div class="col-md-6 order-md-2">
            <img src="<?= base_url('assets/images/undraw_file_sync_ot38.svg'); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>SB - WIP</strong></h3>
              <p class="mb-4">Sign in to start your session</p>
            </div>
            <?= $this->session->flashdata('message'); ?>

                <form method="POST" action="<?= base_url('auth'); ?>">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
      
              <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>dist/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/'); ?>dist/js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>dist/js/main.js"></script>
    <script src="<?= base_url('assets/'); ?>dist/js/bootstrap.min.js"></script>
</body>

</html>