<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DILAN E-IRTP | Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/admin/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/admin/')?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-7 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <div id="infoMessage"><?php echo $message;?></div>
                  </div>
                  <form class="user" action="<?php echo base_url('auth/forgot_password');?>" method="post" accept-charset="utf-8">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="identity" value="" id="identity" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Reset Password" />
                  </form>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('auth/login');?>">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/admin/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/admin/')?>js/sb-admin-2.min.js"></script>

</body>

</html>
