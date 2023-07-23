
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
<li class="menu-title" data-key="t-dashboards">Interns Profile</li>

<li>
<a href="<?php echo base_url('interns_dashboard'); ?>">
<i class="icon nav-icon" data-feather="monitor"></i>
<span class="menu-item" data-key="t-dashboard">Dashboard</span>
</a>
</li>

<li>
<a href="<?php echo base_url('interns_profile'); ?>">
<i class="icon nav-icon" data-feather="trello"></i>
<span class="menu-item" data-key="t-profile">My Profile</span>
</a>
</li>

<li>
<a href="#">
<i class="icon nav-icon" data-feather="terminal"></i>
<span class="menu-item" data-key="t-manage-profile">Manage Profile</span>
</a>
</li>



<li>
<a href="#">
<i class="icon nav-icon" data-feather="pie-chart"></i>
<span class="menu-item" data-key="t-analytics">Settings</span>
</a>
</li>

<li class="menu-title" data-key="t-applications">Intern Portal</li>

<li>
<a href="#">
<i class="icon nav-icon" data-feather="user-check"></i>
<span class="menu-item" data-key="t-calendar">Enrolled Interns</span>
</a>
</li>

<li>
<a href="#">
<i class="icon nav-icon" data-feather="loader"></i>
<span class="menu-item" data-key="t-calendar">Share a Thought</span>
</a>
</li>

<li>
<a href="#">
<i class="icon nav-icon" data-feather="thumbs-up"></i>
<span class="menu-item" data-key="t-calendar">SME Feedback</span>
</a>
</li>


<li class="menu-title" data-key="t-pages">Request</li>

<li>
<a href="javascript: void(0);"  class="has-arrow">
<i class="icon nav-icon" data-feather="sliders" ></i>
<span class="menu-item" data-key="t-authentication">Documents</span>
</a>
<ul class="sub-menu" aria-expanded="true">

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signup">Certificates</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="#" data-key="t-basic">Internship Completion</a></li>
<li><a href="#" data-key="t-basic">Authenticity Crt.</a></li>
<li><a href="#" data-key="t-basic">New Internship</a></li>
<li><a href="#" data-key="t-basic">Character Certificate</a></li>
<li><a href="#" data-key="t-basic">Weekly Work Plan</a></li>
<li><a href="#" data-key="t-basic">Progress Tracker</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signup">Documentation</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="#" data-key="t-basic">Company's Profile</a></li>
<li><a href="#" data-key="t-basic">About Internship</a></li>
<li><a href="#" data-key="t-basic">Internship Report</a></li>
<li><a href="#" data-key="t-basic">Tech Report</a></li>
</ul>
</li>

</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="alert-circle"></i>
<span class="menu-item" data-key="t-error-pages">Communication</span>
</a>
<ul class="sub-menu" aria-expanded="true">
<li><a href="#" data-key="t-basic">Message SME</a></li>
<li><a href="#" data-key="t-basic">Contact for Demo</a></li>
<li><a href="#" data-key="t-basic">Send Query</a></li>
</ul>
</li>



<li class="menu-title" data-key="t-components">Intern POC</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="package"></i>
<span class="menu-item" data-key="t-ui-elements">UI Pages</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-alerts">What is GRC?</a></li>
<li><a href="#" data-key="t-utilities">Why GRC</a></li>
<li><a href="#" data-key="t-utilities">Learnings</a></li>
<li><a href="#" data-key="t-utilities">Workshop</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="cpu"></i>
<span class="menu-item" data-key="t-extend-ui">Org. Demo</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-lightbox">Register a Company</a></li>
<li><a href="#" data-key="t-lightbox">Upload Compliances</a></li>
</ul>
</li>


<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="cpu"></i>
<span class="menu-item" data-key="t-extend-ui">Blog Management</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-lightbox">Register a Company</a></li>
<li><a href="#" data-key="t-lightbox">Upload Compliances</a></li>
</ul>
</li>

<li>
<a href="<?php echo base_url('intern_logout'); ?>">
<i class="icon nav-icon" data-feather="power"></i>
<span class="menu-item" data-key="t-ui-elements">Logout</span>
</a></li>

</ul>
</div>
<!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->


