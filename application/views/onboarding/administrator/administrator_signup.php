
<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8" />
<title>Administrator | Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Pichforest" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>modules/dashboard/assets/images/favicon.ico">

<!-- Bootstrap Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

<!-- <body data-layout="horizontal"> -->

<div class="authentication-bg min-vh-100">
<div class="bg-overlay bg-white"></div>
<div class="container">
<div class="d-flex flex-column min-vh-100 px-3 pt-4">
<div class="row justify-content-center my-auto">
<div class="col-md-8 col-lg-6 col-xl-4">
<div class="text-center py-5">
<div class="mb-4 mb-md-5">
<a href="index.html" class="d-block auth-logo">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-dark.png" alt="" height="22" class="auth-logo-dark">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-light.png" alt="" height="22" class="auth-logo-light">
</a>
</div>
<div class="mb-4">
<h5 class="">Administrator Signup</h5>
<p>Get access to Administrator Portal</p>
</div>


<form>
<div class="form-floating form-floating-custom mb-3">
<input type="text" class="form-control" id="input-name" placeholder="Enter Username">
<label for="input-email">Name</label>
<div class="form-floating-icon">
<i class="uil uil-user-circle"></i>
</div>
</div>
<div class="form-floating form-floating-custom mb-3">
<input type="email" class="form-control" id="input-username" placeholder="Enter Email">
<label for="input-username">Email</label>
<div class="form-floating-icon">
<i class="uil uil-envelope-alt"></i>
</div>
</div>
<div class="form-floating form-floating-custom mb-3">
<input type="password" class="form-control" id="floatingPassword" placeholder="Enter Password">
<label for="floatingPassword">Password</label>
<div class="form-floating-icon">
<i class="uil uil-padlock"></i>
</div>
</div>

<div class="text-start">
<p style="text-align:center;">By registering you get Administrative Access</p>
</div>

<div class="mt-3">
<button class="btn btn-info w-100" type="submit">Register</button>
</div>
</form><!-- end form -->

<div class="cotainer" style="margin-top: 25px;"></div>
<a href="<?php echo base_url(); ?>"><i class="uil-home mx-auto" style="font-size: 18px; text-decoration: none;"> <span style="font-size: 18px;">Back to Home</span></i></a>



<div class="mt-5 text-center">
<p>Already have an account ? <a href="auth-signin-basic.html" class="fw-medium text-decoration-underline"> Signin </a></p>
</div>
</div>
</div><!-- end col -->
</div><!-- end row -->

<div class="row">
<div class="col-lg-12">
<div class="text-center text-muted p-4">
<p class="mb-0">&copy; <?php echo date('Y'); ?> AIDCOM Interns Portal. Crafted with <i class="mdi mdi-heart text-danger"></i> by AIDCOM</p>
</div>
</div>
</div>

</div>
</div><!-- end container -->
</div>
<!-- end authentication section -->

<!-- JAVASCRIPT -->
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/metismenujs/metismenujs.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/feather-icons/feather.min.js"></script>

</body>
</html>
