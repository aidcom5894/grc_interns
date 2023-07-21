<?php 

if(!isset($_SESSION['adminName']))
{
	session_destroy();
	unset($_SESSION['adminName']);

	redirect(base_url('super_admin_login'));
}

?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>Sales Dashboard | Dashonic - Admin & Dashboard Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Pichforest" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>modules/dashboard/assets/images/favicon.ico">

<!-- plugin css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo base_url(); ?>modules/dashboard/assets/css/swiper-bundle.min.css">

<!-- Bootstrap Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

<!-- Icons Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/choices.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/flatpickr.min.css" rel="stylesheet">

<!-- App Css-->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>