<?php 

if(!isset($_SESSION['internName']))
{
	session_destroy();
	
	unset($_SESSION['internName']);

	redirect(base_url('interns_onboarding'));
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

<!-- Bootstrap Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo base_url(); ?>modules/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>