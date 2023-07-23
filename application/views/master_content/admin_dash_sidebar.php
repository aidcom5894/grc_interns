
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
<li class="menu-title" data-key="t-dashboards">Administrator</li>

<li>
<a href="<?php echo base_url('admin_dashboard'); ?>">
<i class="icon nav-icon" data-feather="monitor"></i>
<span class="menu-item" data-key="t-sales">Dashboard</span>
</a>
</li>

<li>
<a href="dashboards-analytics.html">
<i class="icon nav-icon" data-feather="pie-chart"></i>
<span class="menu-item" data-key="t-analytics">Setting</span>
</a>
</li>

<li class="menu-title" data-key="t-applications">Interns</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="user"></i>
<span class="menu-item" data-key="t-email">Intern Mgmt.</span>
</a>

<ul class="sub-menu" aria-expanded="false">
<li><a href="<?php echo base_url('add_new_interns'); ?>" data-key="t-inbox">Add New Intern</a></li>
<li><a href="#" data-key="t-read-email">View Interns</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="book"></i>
<span class="menu-item" data-key="t-contacts">Documentation</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-user-grid">Issue Certificate</a></li>
<li><a href="#" data-key="t-user-list">Prepared Report</a></li>
<li><a href="#" data-key="t-user-settings">Upload Report</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="briefcase"></i>
<span class="menu-item" data-key="t-projects">Profile Management</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-p-grid">Password Mgmt.</a></li>
<li><a href="#" data-key="t-p-list">Interns Data</a></li>
</ul>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="phone-call"></i>
<span class="menu-item" data-key="t-projects">Communication</span>
</a>
<ul class="sub-menu" aria-expanded="false">
<li><a href="#" data-key="t-p-grid">Feedbacks</a></li>
<li><a href="#" data-key="t-p-list">Message & Notification</a></li>
<li><a href="#" data-key="t-p-list">Interns Request</a></li>
</ul>
</li>


<li class="menu-title" data-key="t-pages">CMS Portal</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="sunrise"></i>
<span class="menu-item" data-key="t-authentication">Navbar</span>
<!-- <span class="badge rounded-pill bg-info">9</span> -->
</a>
<ul class="sub-menu" aria-expanded="true">
<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Author Verification</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Contacts Info</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Interns Workshop</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Internship Application</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Publish Article</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow" data-key="t-signin">Side Address</a>
</li>

</ul>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="alert-circle"></i>
<span class="menu-item" data-key="t-error-pages">Why Choose Us</span>
</a>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="file-text"></i>
<span class="menu-item" data-key="t-utility">About Organisation</span>
</a>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="tag"></i>
<span class="menu-item" data-key="t-pricing">GRC Service List</span>
</a>
</li>

<li>
<a href="javascript: void(0);" >
<i class="icon nav-icon" data-feather="file"></i>
<span class="menu-item" data-key="t-invoices">New Application</span>
</a>
</li>

<li>
<a href="javascript: void(0);" >
<i class="icon nav-icon" data-feather="award"></i>
<span class="menu-item" data-key="t-timeline">Our Performance</span>
</a>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="award"></i>
<span class="menu-item" data-key="t-timeline">Share Feedback</span>
</a>
</li>

<li>
<a href="javascript: void(0);" class="has-arrow">
<i class="icon nav-icon" data-feather="sunrise"></i>
<span class="menu-item" data-key="t-authentication">Footer</span>
<!-- <span class="badge rounded-pill bg-info">9</span> -->
</a>
<ul class="sub-menu" aria-expanded="true">
<li>
<a href="javascript: void(0);" data-key="t-signin">Terms & Conditions</a>
</li>

<li>
<a href="javascript: void(0);" data-key="t-signin">Privacy Policy</a>
</li>

<li>
<a href="javascript: void(0);" data-key="t-signin">Cookie Policy</a>
</li>

<li>
<a href="javascript: void(0);" data-key="t-signin">News & Blogs</a>
</li>

<li>
<a href="javascript: void(0);" data-key="t-signin">Career</a>
</li>

<li>
<a href="javascript: void(0);" data-key="t-signin">Side Address</a>
</li>

</ul>
</li>



<li class="menu-title" data-key="t-components">Testimonials</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="package"></i>
<span class="menu-item" data-key="t-ui-elements">Manage Testimony</span>
</a>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="cpu"></i>
<span class="menu-item" data-key="t-extend-ui">Client Management</span>
</a>
</li>

<li>
<a href="javascript: void(0);">
<i class="icon nav-icon" data-feather="power"></i>
<span class="menu-item" data-key="t-extend-ui">Logout</span>
</a>
</li>


</ul>
</div>
<!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->


