<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
  <svg class="circular" viewBox="25 25 50 50">
    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <section id="wrapper">
    <div class="login-register" style="background-image:url(<?php echo base_url('assets/images/background/login-register.jpg') ?>);">
      <div class="login-box card">
        <div class="card-body">
          <!-- <form class="form-horizontal form-material" id="loginform" action="<?php echo site_url('autentikasi/login') ?>"> -->
          <?php echo form_open('sppd/autentikasi/login')?>
            <h3 class="box-title m-b-20">Autentikasi</h3>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" name="username" type="text" required="" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input class="form-control" name="password" type="password" required="" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12 font-14">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                  <input id="checkbox-signup" type="checkbox">
                  <label for="checkbox-signup"> Ingat selalu </label>
                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Lupa pasword?</a>
              </div>
            </div>
            <div class="form-group text-center m-t-20">
              <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Masuk</button>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                <div class="social">
                  <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                  <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                </div>
              </div>
            </div>
            <div class="form-group m-b-0">
              <div class="col-sm-12 text-center">
                <div>Tidak mempunyai akun? <a href="pages-register.html" class="text-info m-l-5"><b>Buat akun</b></a></div>
              </div>
            </div>
            <?php echo form_close()?>
          <!-- </form> -->
          <form class="form-horizontal" id="recoverform" action="index.html">
            <div class="form-group ">
              <div class="col-xs-12">
                <h3>Recover Password</h3>
                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
              </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Email">
              </div>
            </div>
            <div class="form-group text-center m-t-20">
              <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="assets/js/jquery.slimscroll.js"></script>
  <!--Wave Effects -->
  <script src="assets/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="assets/js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!--Custom JavaScript -->
  <script src="assets/js/custom.min.js"></script>
  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
