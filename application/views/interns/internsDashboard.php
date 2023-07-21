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
<title>Interns Dashboard | AIDCOM</title>
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

<!-- Begin page -->
<div id="layout-wrapper">


<header id="page-topbar">
<div class="navbar-header">
<div class="d-flex">
<!-- LOGO -->
<div class="navbar-brand-box">
<a href="index.html" class="logo logo-dark">
<span class="logo-sm">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-sm.png" alt="" height="22">
</span>
<span class="logo-lg">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-dark.png" alt="" height="22">
</span>
</a>

<a href="index.html" class="logo logo-light">
<span class="logo-sm">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-sm.png" alt="" height="22">
</span>
<span class="logo-lg">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-light.png" alt="" height="22">
</span>
</a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
<i class="fa fa-fw fa-bars"></i>
</button>


</div>

<div class="d-flex">

<div class="dropdown d-inline-block language-switch">
<button type="button" class="btn header-item"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img id="header-lang-img" src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/us.jpg" alt="Header Language" height="16">
</button>
<div class="dropdown-menu dropdown-menu-end">

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
</a>
<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
</a>

<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
</a>
</div>
</div>

<div class="dropdown d-none d-lg-inline-block">
<button type="button" class="btn header-item noti-icon"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="icon-sm" data-feather="grid"></i>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
<div class="p-3 border-bottom">
<div class="row align-items-center">
<div class="col">
<h5 class="m-0 font-size-15"> Web Apps </h5>
</div>
<div class="col-auto">
<a href="#!" class="small fw-semibold text-decoration-underline"> View All</a>
</div>
</div>
</div>
<div data-simplebar style="max-height: 270px;">
<a class="notification-item text-reset" href="#!">
<div class="d-flex border-bottom align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/slack.png" alt="slack">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Slack</h6>
<p class="font-size-12 text-muted mb-0">This is your moment. Let’s reinvent work.</p>
</div>
</div>
</a><!-- end dropdown item -->
<a class="notification-item text-reset" href="#!">
<div class="d-flex border-bottom align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/behance.png" alt="behance">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Behance <span class="badge bg-warning badge-pill ml-1">Free</span></h6>
<p class="font-size-12 text-muted mb-0">Showcase your work.</p>
</div>
</div>
</a><!-- end dropdown item -->
<a class="notification-item text-reset" href="#!">
<div class="d-flex border-bottom align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/dribbble.png" alt="dribbble">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Dribbble</h6>
<p class="font-size-12 text-muted mb-0">Dribbble is the world’s leading community for creatives to share, grow, and get hired.</p>
</div>
</div>
</a><!-- end dropdown item -->
<a class="notification-item text-reset" href="#!">
<div class="d-flex border-bottom align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/dropbox.png" alt="dropbox">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Dropbox</h6>
<p class="font-size-12 text-muted mb-0">Keep life organized and work moving—all in one place</p>
</div>
</div>
</a><!-- end dropdown item -->
<a class="notification-item text-reset" href="#!">
<div class="d-flex border-bottom align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/mail_chimp.png" alt="mail_chimp">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Mail Chimp <span class="badge bg-danger badge-pill ml-1">Premium</span></h6>
<p class="font-size-12 text-muted mb-0">The best value for your digital marketing budget</p>
</div>
</div>
</a><!-- end dropdown item -->
<a class="notification-item text-reset" href="#!">
<div class="d-flex align-items-center">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/brands/github.png" alt="github">
</div>
<div class="flex-grow-1 ms-4">
<h6 class="mb-0">Github</h6>
<p class="font-size-12 text-muted mb-0">Where the world builds software</p>
</div>
</div>
</a><!-- end dropdown item -->
</div><!-- end simplebar -->
</div>
</div>

<div class="dropdown d-inline-block">
<button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="icon-sm" data-feather="bell"></i>
<span class="noti-dot bg-danger"></span>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
aria-labelledby="page-header-notifications-dropdown">
<div class="p-3">
<div class="row align-items-center">
<div class="col">
<h5 class="m-0 font-size-15"> Notifications </h5>
</div>
<div class="col-auto">
<a href="#!" class="small"> Mark all as read</a>
</div>
</div>
</div>
<div data-simplebar style="max-height: 250px;">
<h6 class="dropdown-header bg-light">New</h6>
<a href="" class="text-reset notification-item">
<div class="d-flex border-bottom align-items-start">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-3.jpg"
class="me-3 rounded-circle avatar-sm" alt="user-pic">
</div>
<div class="flex-grow-1">
<h6 class="mb-1">Justin Verduzco</h6>
<div class="text-muted">
<p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-success-subtle">Review</span></p>
<p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
</div>
</div>
</div>
</a>
<a href="" class="text-reset notification-item">
<div class="d-flex border-bottom align-items-start">
<div class="flex-shrink-0">
<div class="avatar-sm me-3">
<span class="avatar-title bg-primary rounded-circle font-size-16">
<i class="uil-shopping-basket"></i>
</span>
</div>
</div>
<div class="flex-grow-1">
<h6 class="mb-1">New order has been placed</h6>
<div class="text-muted">
<p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
<p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
</div>
</div>
</div>
</a>
<h6 class="dropdown-header bg-light">Earlier</h6>
<a href="" class="text-reset notification-item">
<div class="d-flex border-bottom align-items-start">
<div class="flex-shrink-0">
<div class="avatar-sm me-3">
<span class="avatar-title bg-success-subtle text-success rounded-circle font-size-16">
<i class="uil-truck"></i>
</span>
</div>
</div>
<div class="flex-grow-1">
<h6 class="mb-1">Your item is shipped</h6>
<div class="text-muted">
<p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
<p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
</div>
</div>
</div>
</a>

<a href="" class="text-reset notification-item">
<div class="d-flex border-bottom align-items-start">
<div class="flex-shrink-0">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-4.jpg"
class="me-3 rounded-circle avatar-sm" alt="user-pic">
</div>
<div class="flex-grow-1">
<h6 class="mb-1">Salena Layfield</h6>
<div class="text-muted">
<p class="mb-1 font-size-13">Yay ! Everything worked!</p>
<p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
</div>
</div>
</div>
</a>
</div>
<div class="p-2 border-top d-grid">
<a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
<i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
</a>
</div>
</div>
</div>

<div class="dropdown d-inline-block">
<button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
<i class="icon-sm" data-feather="settings"></i>
</button>
</div>


<?php 

$fetchInternsDetails = $this->db->query("SELECT * FROM interns WHERE interns_id = '{$_SESSION['internName']}'");

$row = $fetchInternsDetails->row();

if(isset($row)) { ?>

<div class="dropdown d-inline-block">
<button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="rounded-circle header-profile-user" src="<?php echo $row->intern_avatar; ?>" alt="Header Avatar">
<span class="ms-2 d-none d-sm-block user-item-desc">
<span class="user-name"><?php echo $row->intern_name; ?></span>
<span class="user-sub-title"><?php echo $row->interns_id; ?></span>
</span>
</button>
<div class="dropdown-menu dropdown-menu-end pt-0">
<div class="p-3 bg-primary border-bottom">
<h6 class="mb-0 text-white"><?php echo $row->intern_name; ?></h6>
<p class="mb-0 font-size-11 text-white-50 fw-semibold"><?php echo $row->intern_email; ?></p>
</div>
<a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
<a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
<a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
<a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
<a class="dropdown-item d-flex align-items-center" href="user-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge badge-success-subtle ms-auto">New</span></a>
<a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>

<a class="dropdown-item" href="<?php echo base_url('intern_logout'); ?>"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
</div>
</div>
</div>
</div>
</header>

<?php } ?>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

<!-- LOGO -->
<div class="navbar-brand-box">
<a href="index.html" class="logo logo-dark">
<span class="logo-sm">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-sm.png" alt="" height="22">
</span>
<span class="logo-lg">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-dark.png" alt="" height="22">
</span>
</a>

<a href="index.html" class="logo logo-light">
<span class="logo-lg">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-light.png" alt="" height="22">
</span>
<span class="logo-sm">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/logo-sm-light.png" alt="" height="22">
</span>
</a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
<i class="fa fa-fw fa-bars"></i>
</button>

<div data-simplebar class="sidebar-menu-scroll">

<!--- Sidemenu -->
<div id="sidebar-menu">
<!-- Left Menu Start -->
<ul class="metismenu list-unstyled" id="side-menu">
<li class="menu-title" data-key="t-dashboards">Dashboards</li>

<li>
<a href="index.html">
<i class="icon nav-icon" data-feather="monitor"></i>
<span class="menu-item" data-key="t-sales">Sales</span>
<span class="badge rounded-pill badge-secondary-subtle">5+</span>
</a>
</li>

<li>
<a href="dashboards-analytics.html">
<i class="icon nav-icon" data-feather="pie-chart"></i>
<span class="menu-item" data-key="t-analytics">Analytics</span>
</a>
</li>

<li class="menu-title" data-key="t-applications">Applications</li>

<li>
<a href="apps-calendar.html">
<i class="icon nav-icon" data-feather="calendar"></i>
<span class="menu-item" data-key="t-calendar">Calendar</span>
</a>
</li>

<li>
<a href="apps-chat.html">
<i class="icon nav-icon" data-feather="message-square"></i>
<span class="menu-item" data-key="t-chat">Chat</span>
<span class="badge rounded-pill badge-danger-subtle" data-key="t-hot">Hot</span>
</a>
</li>

<li>
<a href="apps-kanban-board.html">
<i class="icon nav-icon" data-feather="trello"></i>
<span class="menu-item" data-key="t-kanban">Kanban Board</span>
</a>
</li>

<li>
<a href="apps-file-manager.html">
<i class="icon nav-icon" data-feather="folder"></i>
<span class="menu-item" data-key="t-filemanager">File Manager</span>
</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="mail"></i>
<span class="menu-item" data-key="t-email">Email</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
<li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="book"></i>
<span class="menu-item" data-key="t-contacts">Contacts</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
<li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
<li><a href="user-settings.html" data-key="t-user-settings">User Settings</a></li>
</ul>
</li>

<li>
<a href="apps-gallery.html">
<i class="icon nav-icon" data-feather="image"></i>
<span class="menu-item" data-key="t-gallery">Gallery</span>
</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="briefcase"></i>
<span class="menu-item" data-key="t-projects">Projects</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="projects-grid.html" data-key="t-p-grid">Projects Grid</a></li>
<li><a href="projects-list.html" data-key="t-p-list">Projects List</a></li>
<li><a href="projects-overview.html" data-key="t-p-overview">Project Overview</a></li>
<li><a href="projects-create.html" data-key="t-create-new">Create New</a></li>
</ul>
</li>

<li class="menu-title" data-key="t-layouts">Layouts</li>

<li>
<a href="layouts-horizontal.html">
<i class="icon nav-icon" data-feather="layout"></i>
<span class="menu-item" data-key="t-horizontal">Horizontal</span>
</a>
</li>

<li class="menu-title" data-key="t-pages">Pages</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="user"></i>
<span class="menu-item" data-key="t-authentication">Authentication</span>
<span class="badge rounded-pill bg-info">9</span>
</a>
<ul class="sub-menu" aria-expanded="true">
<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Sign In</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-signin-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-signin-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signup">Sign Up</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-signup-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-signup-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signout">Sign Out</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-signout-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-signout-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-lock-screen">Lock Screen</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-lockscreen-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-lockscreen-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-forgot-password">Forgot Password</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-forgotpassword-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-forgotpassword-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-reset-password">Reset Password</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-resetpassword-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-resetpassword-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-email-verification">Email Verification</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-emailverification-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-emailverification-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-2step-verification">2-step Verification</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-2step-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-2step-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-thankyou">Thank you</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="auth-thankyou-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="auth-thankyou-cover.html" data-key="t-cover">Cover</a></li>
</ul>
</li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="alert-circle"></i>
<span class="menu-item" data-key="t-error-pages">Error Pages</span>
</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="error-404-basic.html" data-key="t-error-404-basic">404 Basic</a></li>
<li><a href="error-404-cover.html" data-key="t-error-404-cover">404 Cover</a></li>
<li><a href="error-500-basic.html" data-key="t-error-500-basic">500 Basic</a></li>
<li><a href="error-500-cover.html" data-key="t-error-500-cover">500 Cover</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="file-text"></i>
<span class="menu-item" data-key="t-utility">Utility</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
<li><a href="pages-profile.html" data-key="t-profile">Profile</a></li>
<li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
<li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
<li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="tag"></i>
<span class="menu-item" data-key="t-pricing">Pricing</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="pricing-basic.html" data-key="t-basic">Basic</a></li>
<li><a href="pricing-table.html" data-key="t-table">Table</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="file"></i>
<span class="menu-item" data-key="t-invoices">Invoices</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
<li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="award"></i>
<span class="menu-item" data-key="t-timeline">Timeline</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="timeline-center.html" data-key="t-center-view">Center View</a></li>
<li><a href="timeline-left.html" data-key="t-left-view">Left View</a></li>
<li><a href="timeline-horizontal.html" data-key="t-horizontal-view">Horizontal View</a></li>
</ul>
</li>

<li class="menu-title" data-key="t-components">Components</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="package"></i>
<span class="menu-item" data-key="t-ui-elements">UI Elements</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
<li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
<li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
<li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
<li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
<li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
<li><a href="ui-images.html" data-key="t-images">Images</a></li>
<li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
<li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
<li><a href="ui-placeholders.html" data-key="t-placeholders">Placeholders</a></li>
<li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
<li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
<li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
<li><a href="ui-video.html" data-key="t-video">Video</a></li>
<li><a href="ui-general.html" data-key="t-general">General</a></li>
<li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
<li><a href="ui-utilities.html" data-key="t-utilities">Utilities</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="cpu"></i>
<span class="menu-item" data-key="t-extend-ui">Extended UI</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
<li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
<li><a href="extended-sweet-alert.html" data-key="t-sweetalert">SweetAlert 2</a></li>
<li><a href="extended-rating.html" data-key="t-rating">Rating</a></li>
<li><a href="extended-notifications.html" data-key="t-notifications">Notifications</a></li>
<li><a href="extended-swiperslider.html" data-key="t-swiperslider">Swiper Slider</a></li>
</ul>
</li>
<li>
<a href="widgets.html">
<i class="icon nav-icon" data-feather="grid"></i>
<span class="menu-item" data-key="t-widgets">Widgets</span>
</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="edit-3"></i>
<span class="menu-item" data-key="t-forms">Forms</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="form-elements.html" data-key="t-basic-elements">Basic Elements</a></li>
<li><a href="form-validation.html" data-key="t-validation">Validation</a></li>
<li><a href="form-advanced.html" data-key="t-advanced-plugins">Advanced Plugins</a></li>
<li><a href="form-editors.html" data-key="t-editors">Editors</a></li>
<li><a href="form-uploads.html" data-key="t-file-upload">File Upload</a></li>
<li><a href="form-wizard.html" data-key="t-wizard">Wizard</a></li>
<li><a href="form-mask.html" data-key="t-mask">Mask</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="database"></i>
<span class="menu-item" data-key="t-tables">Tables</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="tables-basic.html" data-key="t-bootstrap-basic">Bootstrap Basic</a></li>
<li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="bar-chart-2"></i>
<span class="menu-item" data-key="t-apex-charts">Apex Charts</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="charts-line.html" data-key="t-line">Line</a></li>
<li><a href="charts-area.html" data-key="t-area">Area</a></li>
<li><a href="charts-column.html" data-key="t-column">Column</a></li>
<li><a href="charts-bar.html" data-key="t-bar">Bar</a></li>
<li><a href="charts-mixed.html" data-key="t-mixed">Mixed</a></li>
<li><a href="charts-timeline.html" data-key="t-timeline">Timeline</a></li>
<li><a href="charts-candlestick.html" data-key="t-candlestick">Candlestick</a></li>
<li><a href="charts-boxplot.html" data-key="t-boxplot">Boxplot</a></li>
<li><a href="charts-bubble.html" data-key="t-bubble">Bubble</a></li>
<li><a href="charts-scatter.html" data-key="t-scatter">Scatter</a></li>
<li><a href="charts-heatmap.html" data-key="t-heatmap">Heatmap</a></li>
<li><a href="charts-treemap.html" data-key="t-treemap">Treemap</a></li>
<li><a href="charts-pie.html" data-key="t-pie">Pie</a></li>
<li><a href="charts-radialbar.html" data-key="t-radialbar">Radialbar</a></li>
<li><a href="charts-radar.html" data-key="t-radar">Radar</a></li>
<li><a href="charts-polararea.html" data-key="t-polararea">Polararea</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="archive"></i>
<span class="menu-item" data-key="t-icons">Icons</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="icons-unicons.html" data-key="t-unicons">Unicons</a></li>
<li><a href="icons-feathericons.html" data-key="t-feather-icons">Feather icons</a></li>
<li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
<li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
<li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="map-pin"></i>
<span class="menu-item" data-key="t-maps">Maps</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="maps-google.html" data-key="t-google">Google</a></li>
<li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
<li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="share-2"></i>
<span class="menu-item" data-key="t-multi-level">Multi Level</span>
</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
<li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
<li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
</ul>
</li>
</ul>
</li>

</ul>
</div>
<!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
<div class="page-content">
<div class="container-fluid">
<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-flex align-items-center justify-content-between">
<h4 class="mb-0">Sales Analytics</h4>

<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="javascript: void(0);">Dashonic</a></li>
<li class="breadcrumb-item active">Sales Analytics</li>
</ol>
</div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-xl-3 col-sm-6">
<!-- Card -->
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-xs text-uppercase">Total Revenue</h6>
<h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
$46.34k
</h4>
<div class="text-muted">Earning this month</div>
</div>
<div>
<div class="dropdown">
<a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false"><span class="text-muted">Monthly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu">
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Weekly</a>
</div>
</div>
</div>
</div>
<div class="apex-charts mt-3" id="sparkline-chart-1"></div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<!-- Card -->
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-xs text-uppercase">Total Refunds</h6>
<h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
$895.02
</h4>
<div class="text-muted">Refunds this month</div>
</div>
<div>
<div class="dropdown">
<a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false"><span class="text-muted">Monthly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu">
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Weekly</a>
</div>
</div>
</div>
</div>
<div class="apex-charts mt-3" id="sparkline-chart-2"></div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<!-- Card -->
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-xs text-uppercase">Active Users</h6>
<h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
6,985
</h4>
<div class="text-muted">Users this Week</div>
</div>
<div>
<div class="dropdown">
<a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false"><span class="text-muted">Weekly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu">
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Weekly</a>
</div>
</div>
</div>
</div>
<div class="apex-charts mt-3" id="sparkline-chart-3"></div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<!-- Card -->
<div class="card">
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<h6 class="font-size-xs text-uppercase">All Time Orders</h6>
<h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
12,584
</h4>
<div class="text-muted">Total Number of Orders</div>
</div>
<div>
<div class="dropdown">
<a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false"><span class="text-muted">Yearly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu">
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Weekly</a>
</div>
</div>
</div>
</div>
<div class="apex-charts mt-3" id="sparkline-chart-4"></div>
</div>
</div>
</div>
</div> <!-- end row-->

<div class="row">
<div class="col-xl-4">
<div class="card">
<div class="card-body">
<div class="alert alert-warning border-0 d-flex align-items-center" role="alert">
<i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
<div class="flex-grow-1 text-truncate">
Your free trial expired in <b>21</b> days. 
</div>
<div class="flex-shrink-0">
<a href="pricing-basic.html" class="text-reset text-decoration-underline"><b>Upgrade</b></a>
</div>
</div>

<div class="row align-items-center">
<div class="col-sm-7">
<p class="font-size-18">Upgrade your plan from a <span class="fw-semibold">Free
trial</span>, to ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i></p>
<div class="mt-4">
<a href="pricing-basic.html" class="btn btn-primary">Upgrade Account!</a>
</div>
</div>
<div class="col-sm-5">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/illustrator/2.png" class="img-fluid" alt="">
</div>
</div>
</div> <!-- end card-body-->
</div>
<!-- end card -->

<div class="card">
<div class="card-body">
<div class="float-end">
<div class="dropdown">
<a class="dropdown-toggle text-reset" href="#"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="fw-semibold">Report By:</span> <span
class="text-muted">Monthly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Weekly</a>
<a class="dropdown-item" href="#">Today</a>
</div>
</div>
</div>

<h4 class="card-title mb-4">Earning Reports</h4>

<div class="row align-items-center">
<div class="col-sm-7">
<div class="row mb-3">
<div class="col-6">
<p class="text-muted mb-2">This Month</p>
<h5>$12,582<small
class="badge badge-success-subtle font-13 ms-2">+15%</small></h5>
</div>

<div class="col-6">
<p class="text-muted mb-2">Last Month</p>
<h5>$98,741</h5>
</div>
</div>
<p class="text-muted"><span class="text-success me-1"> 25.2%<i
class="mdi mdi-arrow-up"></i></span>From previous period</p>

<div class="mt-4">
<a href="" class="btn btn-secondary-subtle btn-sm">Generate Reports <i
class="mdi mdi-arrow-right ms-1"></i></a>
</div>
</div> <!-- end col-->
<div class="col-sm-5">
<div class="mt-4 mt-0">
<div id="donut_chart" class="apex-charts" dir="ltr"></div>
</div>
</div>
</div>
</div>
</div> <!-- end card -->
</div> <!-- end col-->

<div class="col-xl-8">
<div class="card card-h-100">
<div class="card-body">
<div class="float-end">
<div class="dropdown">
<a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
aria-haspopup="true" aria-expanded="false">
<span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Weekly</a>
<a class="dropdown-item" href="#">Today</a>
</div>
</div>
</div>
<h4 class="card-title mb-4">Sales Analytics</h4>

<div class="mt-1">
<ul class="list-inline main-chart mb-0 text-center">
<li class="list-inline-item chart-border-left me-0 border-0">
<h3 class="text-primary">$<span data-plugin="counterup">3.85k</span><span
class="text-muted d-inline-block fw-normal font-size-15 ms-2">Income</span>
</h3>
</li>
<li class="list-inline-item chart-border-left me-0">
<h3><span data-plugin="counterup">258</span><span
class="text-muted d-inline-block fw-normal font-size-15 ms-2">Sales</span>
</h3>
</li>
<li class="list-inline-item chart-border-left me-0">
<h3><span data-plugin="counterup">52</span>k<span
class="text-muted d-inline-block fw-normal font-size-15 ms-2">Users</span>
</h3>
</li>
</ul>
</div>

<div class="mt-3">
<div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
</div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row -->

<div class="row">
<div class="col-xl-8">
<div class="card card-h-100">
<div class="card-body">
<div class="d-flex justify-content-between">
<h4 class="card-title mb-4">Orders</h4>

<div>
<div class="dropdown d-inline">
<a class="dropdown-toggle text-muted me-3 mb-3 align-middle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
aria-expanded="false">
<i class='bx bx-search font-size-16'></i>
</a>

<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
<form class="p-2">
<div class="search-box">
<div class="position-relative">
<input type="text"
class="form-control rounded bg-light border-0"
placeholder="Search...">
<i class="bx bx-search font-size-16 search-icon"></i>
</div>
</div>
</form>
</div>
</div>

<div class="dropdown d-inline">
<a class="dropdown-toggle text-reset mb-3" href="#"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="fw-semibold">Report By:</span> <span
class="text-muted">Monthly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Weekly</a>
<a class="dropdown-item" href="#">Today</a>
</div>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table table-hover table-nowrap mb-0 align-middle table-check">
<thead class="table-light">
<tr>
<th class="rounded-start" style="width: 15px;">
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="checkAll">
<label class="form-check-label" for="checkAll"> </label>
</div>
</th>
<th>ID</th>
<th>Date</th>
<th>Status</th>
<th>Customer</th>
<th>Purchased</th>
<th colspan="2" class="rounded-end">Revenue</th>
</tr>
<!-- end tr -->
</thead>
<!-- end thead -->
<tbody>
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexampleone">
<label class="form-check-label" for="flexCheckexampleone">
</label>
</div>
</td>
<td class="fw-medium">
#DK1018
</td>
<td>
1 Jun, 11:21
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-check-circle-outline text-success"></i>
</div>
<div>
<p class="mb-0">Paid</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-2.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Alex Fox</a>
</h5>
</div>
</div>
</td>
<td>
Wireframing Kit for Figma
</td>

<td>
$129.99
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexamplethree">
<label class="form-check-label" for="flexCheckexamplethree">
</label>
</div>
</td>
<td class="fw-medium">
#DK1017
</td>
<td>
29 May, 18:36
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-check-circle-outline text-success"></i>
</div>
<div>
<p class="mb-0">Paid</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-3.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Joya Calvert</a>
</h5>
</div>
</div>
</td>
<td>
Mastering the Grid <span class="text-muted">+2 more</span>
</td>

<td>
$228.88
</td>

<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexamplefour">
<label class="form-check-label" for="flexCheckexamplefour">
</label>
</div>
</td>
<td class="fw-medium">
#DK1016
</td>
<td>
25 May , 08:09
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i
class="mdi mdi-arrow-left-thin-circle-outline text-warning"></i>
</div>
<div>
<p class="mb-0">Refunded</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-4.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Gracyn Make</a>
</h5>
</div>
</div>
</td>
<td>
Wireframing Kit for Figma
</td>

<td>
$9.99
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexamplefive">
<label class="form-check-label" for="flexCheckexamplefive">
</label>
</div>
</td>
<td class="fw-medium">
#DK1015
</td>
<td>
19 May , 14:09
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-check-circle-outline text-success"></i>
</div>
<div>
<p class="mb-0">Paid</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-5.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Monroe Mock</a>
</h5>
</div>
</div>
</td>
<td>
Spiashify 2.0
</td>

<td>
$44.00
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexamplesix">
<label class="form-check-label" for="flexCheckexamplesix">
</label>
</div>
</td>
<td class="fw-medium">
#DK1014
</td>
<td>
10 May , 10:00
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-check-circle-outline text-success"></i>
</div>
<div>
<p class="mb-0">Paid</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-6.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Lauren Bond</a>
</h5>
</div>
</div>
</td>
<td>
Mastering the Grid
</td>

<td>
$75.87
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckexamplenine">
<label class="form-check-label" for="flexCheckexamplenine">
</label>
</div>
</td>
<td class="fw-medium">
#DK1011
</td>
<td>
29 Apr , 12:46
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-close-circle-outline text-danger"></i>
</div>
<div>
<p class="mb-0">Changeback</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-9.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Ricardo Schaefer</a> </h5>
</div>
</div>
</td>
<td>
Spiashify 2.0
</td>

<td>
$63.99
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->
<tr>
<td>
<div class="form-check">
<input class="form-check-input font-size-16" type="checkbox"
value="" id="flexCheckDefaultexample">
<label class="form-check-label" for="flexCheckDefaultexample">
</label>
</div>
</td>
<td class="fw-medium">
#DK1010
</td>
<td>
27 Apr , 10:53
</td>

<td>
<div class="d-flex">
<div class="me-2">
<i class="mdi mdi-check-circle-outline text-success"></i>
</div>
<div>
<p class="mb-0">Paid</p>
</div>
</div>
</td>
<td>
<div class="d-flex align-items-center">
<div class="me-2">
<img src="<?php echo base_url(); ?>modules/dashboard/assets/images/users/avatar-10.jpg"
class="avatar-sm img-thumbnail h-auto rounded-circle"
alt="Error">
</div>
<div>
<h5 class="font-size-14 text-truncate mb-0"><a href="#"
class="text-reset">Arvi Hasan</a> </h5>
</div>
</div>
</td>
<td>
Wireframing Kit for Figma
</td>

<td>
$51.00
</td>
<td>
<div class="dropdown">
<a href="#" class="dropdown-toggle card-drop"
data-bs-toggle="dropdown" aria-expanded="false">
<i
class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-pencil font-size-16 text-success me-1"></i>
Edit</a></li>
<li><a href="#" class="dropdown-item"><i
class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
Delete</a></li>
</ul>
</div>
</td>
</tr>
<!-- end /tr -->

</tbody><!-- end tbody -->
</table><!-- end table -->
</div>
</div>
</div>
</div>

<div class="col-xl-4">
<div class="card card-h-100">
<div class="card-body">
<div class="d-flex justify-content-between">
<h4 class="card-title mb-4">Sales by County</h4>
<div class="dropdown">
<a class="dropdown-toggle text-reset" href="#"
data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="fw-semibold">Report By:</span> <span
class="text-muted">Monthly<i
class="mdi mdi-chevron-down ms-1"></i></span>
</a>

<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Yearly</a>
<a class="dropdown-item" href="#">Monthly</a>
<a class="dropdown-item" href="#">Weekly</a>
<a class="dropdown-item" href="#">Today</a>
</div>
</div>
</div>

<div id="world-map-markers" style="height: 242px;"></div>

<div class="pt-3 pb-2">
<p class="mb-0 fw-medium">USA <span class="float-end">75%</span></p>
<div class="progress animated-progess custom-progress mt-2">
<div class="progress-bar" role="progressbar"
style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
</div>
</div>

<p class="mt-4 mb-0 fw-medium">Russia <span class="float-end">55%</span></p>
<div class="progress animated-progess custom-progress mt-2">
<div class="progress-bar" role="progressbar"
style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
</div>
</div>

<p class="mt-4 mb-0 fw-medium">Australia <span class="float-end">85%</span></p>
<div class="progress animated-progess custom-progress mt-2">
<div class="progress-bar" role="progressbar"
style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- end row -->

</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<script>document.write(new Date().getFullYear())</script> &copy; Dashonic.
</div>
<div class="col-sm-6">
<div class="text-sm-end d-none d-sm-block">
Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
</div>
</div>
</div>
</div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
<div data-simplebar class="h-100">
<div class="rightbar-title d-flex align-items-center p-3">

<h5 class="m-0 me-2 text-white">Theme Customizer</h5>

<a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
<i class="mdi mdi-close noti-icon"></i>
</a>
</div>

<!-- Settings -->
<hr class="m-0" />

<div class="p-4">
<h6 class="mb-3">Layout</h6>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout"
id="layout-vertical" value="vertical">
<label class="form-check-label" for="layout-vertical">Vertical</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout"
id="layout-horizontal" value="horizontal">
<label class="form-check-label" for="layout-horizontal">Horizontal</label>
</div>

<h6 class="mt-4 mb-3">Layout Mode</h6>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-mode"
id="layout-mode-light" value="light">
<label class="form-check-label" for="layout-mode-light">Light</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-mode"
id="layout-mode-dark" value="dark">
<label class="form-check-label" for="layout-mode-dark">Dark</label>
</div>

<h6 class="mt-4 mb-3">Layout Width</h6>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-width"
id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
<label class="form-check-label" for="layout-width-fluid">Fluid</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-width"
id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
<label class="form-check-label" for="layout-width-boxed">Boxed</label>
</div>

<h6 class="mt-4 mb-3">Layout Position</h6>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-position"
id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
<label class="form-check-label" for="layout-position-fixed">Fixed</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-position"
id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
<label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
</div>

<h6 class="mt-4 mb-3">Topbar Color</h6>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="topbar-color"
id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
<label class="form-check-label" for="topbar-color-light">Light</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="topbar-color"
id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
<label class="form-check-label" for="topbar-color-dark">Dark</label>
</div>

<div id="sidebar-setting">
<h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size"
id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
<label class="form-check-label" for="sidebar-size-default">Default</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size"
id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
<label class="form-check-label" for="sidebar-size-compact">Compact</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-size"
id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
<label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
</div>

<h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color"
id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
<label class="form-check-label" for="sidebar-color-light">Light</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color"
id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
<label class="form-check-label" for="sidebar-color-dark">Dark</label>
</div>
<div class="form-check sidebar-setting">
<input class="form-check-input" type="radio" name="sidebar-color"
id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
<label class="form-check-label" for="sidebar-color-brand">Brand</label>
</div>
</div>

<h6 class="mt-4 mb-3">Direction</h6>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-direction"
id="layout-direction-ltr" value="ltr">
<label class="form-check-label" for="layout-direction-ltr">LTR</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="layout-direction"
id="layout-direction-rtl" value="rtl">
<label class="form-check-label" for="layout-direction-rtl">RTL</label>
</div>

</div>

</div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/metismenujs/metismenujs.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/feather-icons/feather.min.js"></script>

<!-- apexcharts -->
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="<?php echo base_url(); ?>modules/dashboard/assets/libs/jsvectormap/maps/world-merc.js"></script>

<script src="<?php echo base_url(); ?>modules/dashboard/assets/js/pages/dashboard-sales.init.js"></script>

<script src="<?php echo base_url(); ?>modules/dashboard/assets/js/app.js"></script>

</body>

</html>