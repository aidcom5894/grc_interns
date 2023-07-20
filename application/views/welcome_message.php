<?php 

$this->load->view('master_content/ui_header');
$this->load->view('master_content/ui_navbar');

?>

<style type="text/css">
	input[type=text]
	{
	  border-radius: 12px 12px 12px 12px !important;
	  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.21) !important;
	  border-color: var(--color-set-four-1) !important;
	  background-color: var(--color-white) !important;
	  height: 62px !important;
	  border-width: 0px 0px 0px 3px !important;
	}

	input[type=submit]
	{
	  position: absolute;
	  z-index: 999;
	  top: -9px;
	  right: 5px;
	  left: unset;
	  width: 120px;
	  min-width: 120px;
	  border-radius: 12px 12px 12px 12px;
	  border-color: transparent;
	  background-color: transparent;
	  background-image: linear-gradient(81deg, var(--color-set-four-1) 0%, var(--color-set-four-2) 74%);
	}
</style>


<!----==============content_all_warpper==============--->
<div id="wrapper_full" class="content_all_warpper">
<!----==============content_all_warpper==============--->
<!--content start-->
<div id="content" class="site-content">
<!---slider-->
<section class="single_banner style_one">
<div class="image_bg">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/slider/banner-single-4-bg.png" class="img-fluid" alt="img" />
</div>
<div class="content_box">
<div class="large-container">
<div class="row align-items-center">
<div class="col-lg-5">
<div class="section_title type_one">
<div class="title_whole">
<h2 class="title">Less Perfection but more Authenticity.</h2>
</div>
<p style="text-align: justify;">
We strive for authenticity and hence have launched this tracker to check Enrolled Interns' Genuinity. Our Interns are provided with specific ID to confirm their originality. Track our Interns by providing their ID in the box below.
</p>
</div>

<div class="newsteller_simple">
<div class="input_group">

<form method="post" action="<?php echo base_url('interns_authenticity_check'); ?>">

<input type="text" name="internIDdata">
<input type="submit" value="Verify" name="verifyInterns">

</form>

</div>
</div>
<div class="review_box d-flex align-items-center">
<div class="rimage">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/slider/review-girls.png" class="img-fluid"
alt="img" />
</div>
<div class="section_title type_one">
<div class="title_whole">
<h2 class="title"> Internships Completed</h2>
</div>

<?php 

$getInternsCount = $this->db->query("SELECT * FROM interns");

?>
<p><small>Total <code> <?php echo $getInternsCount->num_rows(); ?></code> Intern(s) Enrolled for GRC</small></p>

</div>
</div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-6">
<div class="image">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/slider/banner-single-4-1.jpg" class="img-fluid"
alt="img" />
</div>
</div>
</div>
</div>
</div>
<div class="section_title abso type_one">
<div class="title_whole">
<h2 class="title"> INTERNSHIP</h2>
</div>
</div>
</section>
<!---slider end-->
<!--service-->
<section class="service bg_light_2 bg_op_4"
style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/about-dot-bg.png)!important;">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section_title text-center type_five">
<h4 class="sm_title"> Why Choose Us</h4>
<div class="title_whole">
<h2 class="title"> Build Up Your Professional <br>
Insurance Policy</h2>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
</div>
</div>
<div class="service_post position-relative">
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="service_box type_six hover_1_get borenable color_two trans">
<div class="d-flex trans">
<div class="icon trans">
<i class=" flaticon-salary trans"></i></div>
<div class="title_22">
<a href="service.html">Easy
System & Trusted, Save your Money
</a>
</div>
</div>
<a href="service.html" class="img_bx">
<div class="image trans hover_1">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/other-ser-2.jpg" class="img-fluid"
alt="service" />
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
</a>
<div class="content">
<p class="trans">
Sit amet consectetur adipiscing elites varius montes, massa blandit
orci.</p>
<a href="service.html" class="theme_btn">
Read More <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1L1 11ZM11 1H3.5H11ZM11 1V8.5V1Z" fill="#696E77">
</path>
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#696E77"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="service_box type_six hover_1_get borenable color_two  trans">
<div class="d-flex trans">
<div class="icon trans">
<i class=" flaticon-management trans"></i></div>
<div class="title_22">
<a href="service.html">Dedicated
Customer Support Team Member</a></div>
</div>
<a href="service.html" class="img_bx">
<div class="image trans hover_1">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/other-ser-2.jpg" class="img-fluid"
alt="service" />
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
</a>
<div class="content">
<p class="trans">
Sit amet consectetur adipiscing elites varius montes, massa blandit
orci.</p>
<a href="service.html" class="theme_btn">
Read More <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1L1 11ZM11 1H3.5H11ZM11 1V8.5V1Z" fill="#696E77">
</path>
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#696E77"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="service_box type_six hover_1_get borenable color_two  trans">
<div class="d-flex trans">
<div class="icon trans">
<i class=" flaticon-business-trip trans"></i></div>
<div class="title_22">
<a href="service.html">Corporate
Professional Insurance Liability</a></div>
</div>
<a href="service.html" class="img_bx">
<div class="image trans hover_1">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/other-ser-1.jpg" class="img-fluid"
alt="service" />
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
</a>
<div class="content">
<p class="trans">
Sit amet consectetur adipiscing elites varius montes, massa blandit
orci.</p>
<a href="service.html" class="theme_btn">
Read More <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1L1 11ZM11 1H3.5H11ZM11 1V8.5V1Z" fill="#696E77">
</path>
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#696E77"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 text-center">
<div class="position-relative position_p_relative">
<div class="d-flex justify-content-center align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/notification-1.png" class="img-fluid"
alt="notification" /> Need Any Insurance Information Or Create Your
Account?
<a class="rd_more" style="margin-left: 10px" href="#">Contact Us</a></div>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_80"></div>
<!---============spacing==========--->
</section>
<!--service-->

<!--about section-->
<section class="about-section bg_op_4" style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/wave-pat-1.png);">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12 pd_right_30">
<div class="image_box_only type_eight">
<div class="pattern">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/Graphics.png" class="img-fluid" alt="img" />
</div>
<div class="m_image">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/about/about-h-6-min.png" class="img-fluid" alt="img" />
</div>
<div class="fun_facts type_two color_two">
<h4>
<span class="count">25</span>
<small>
+ </small></h4>
<h6 class="title_no_a_26">Years Of
Experience</h6>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
</div>
<div class="col-lg-6 col-md-12 pd_left_60">
<div class="section_title type_five">
<h4 class="sm_title"> About Insurance</h4>
<div class="title_whole">
<h2 class="title"> Big Dreams Start Small Live Your Life Happy</h2>
</div>

<p>
Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium
doloremque laudanti totam aperiam eaquecy epsa abillo inventore veritatis
architecto beatae
</p>
</div>
<!---============spacing==========--->
<div class="pd_bottom_25"></div>
<!---============spacing==========--->
<div class="position-relative">
<ul class="list_box list color_three">
<li>
<div class="d-flex align-items-center">
<div class="icon trans">
<i aria-hidden="false" class="fas fa-check-circle"></i></div>
<a class="links" href="#">
Best Insurance Agency </a>
</div>
</li>
<li>
<div class="d-flex align-items-center">
<div class="icon trans">
<i aria-hidden="false" class="fas fa-check-circle"></i></div>
<a class="links" href="#">
Trusted &amp; Experience Insurance </a>
</div>
</li>
<li>
<div class="d-flex align-items-center">
<div class="icon trans">
<i aria-hidden="false" class="fas fa-check-circle"></i></div>
<a class="links" href="#">
Dedicated Support &amp; Security </a>
</div>
</li>
</ul>
</div>
<!---============spacing==========--->
<div class="pd_bottom_35"></div>
<!---============spacing==========--->
<div class="theme_btn_all">
<a href="#" class="theme_btn color_four big rotate">
Learn More <span> <i class=" fi-rr-arrow-small-up"></i></span>
</a>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_50"></div>
<!---============spacing==========--->
</section>
<!--about section-->

<!--service-->
<section class="service bg_12 bg_op_4"
style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/service-dot-bg.png)!important;">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="section_title color_white type_five">
<h4 class="sm_title"> About Insurance
</h4>
<div class="title_whole">
<h2 class="title">Explore Our Popular Insurance Services That We Provide</h2>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
</div>
</div>
<div class="service_post position-relative">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg>
<i class=" flaticon-travel-insurance trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-1-min-1.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">
Travel Insurance
</a>
</div>
<p class="trans">
A travel insurance policy is a versatile plan that offers financial
compensation…
</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_4032)"></path>
<defs>
<linearGradient id="paint0_linear_1_4032" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg>
<i class=" flaticon-health-insurance trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-8-min.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">Medical
Insurance</a></div>
<p class="trans">
Additional benefits such as health check up, wellness programs.</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_4035)"></path>
<defs>
<linearGradient id="paint0_linear_1_4035" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg>
<i class=" flaticon-marriage trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-6-min.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">
Marriage insurance
</a>
</div>
<p class="trans">
We cover you for wedding cancel, material damage to the property
</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_4036)"></path>
<defs>
<linearGradient id="paint0_linear_1_4036" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg>
<i class=" flaticon-insurance-2 trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-1-min-1.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">
Life insurance
</a>
</div>
<p class="trans">
Contract between a life insurance company and a policy owner. A
life…
</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_403)"></path>
<defs>
<linearGradient id="paint0_linear_1_403" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg><i class=" flaticon-house trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-3-min.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">
House Insurance
</a>
</div>
<p class="trans">
A home insurance policy will cover the cost of structure and
contents…
</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_4030)"></path>
<defs>
<linearGradient id="paint0_linear_1_4030" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
<div class="service_box type_seven trans color_two">
<div class="icon trans">
<svg width="110" height="130" viewBox="0 0 110 130" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M0 124.009C0 127.128 2.82523 129.486 5.89443 128.928L105.894 110.746C108.272 110.314 110 108.244 110 105.827V5C110 2.23858 107.761 0 105 0H5C2.23858 0 0 2.23858 0 5V124.009Z"
fill="var(--color-set-four-3)"></path>
</svg>
<i class=" flaticon-insurance trans"></i>
</div>
<div class="content d-flex align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/service/service-4-min.jpg" class="img-fluid"
alt="service" />
<div class="left">
<div class="title_26">
<a href="service-details.html">
Fire Insurance
</a>
</div>
<p class="trans">
Owns a property or has even rented a property can buy a…
</p>
</div>
<div class="right">
<a href="service-details.html" class="link">
<svg width="25" height="25" viewBox="0 0 25 25" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd"
d="M6.53522 0H22.9415C23.2315 0 23.5098 0.115234 23.7149 0.320352C23.92 0.52547 24.0352 0.803669 24.0352 1.09375V17.5C24.0352 17.7901 23.92 18.0683 23.7149 18.2734C23.5098 18.4785 23.2315 18.5937 22.9415 18.5937C22.6514 18.5937 22.3732 18.4785 22.1681 18.2734C21.963 18.0683 21.8477 17.7901 21.8477 17.5V3.73333L1.83938 23.7417C1.63205 23.9349 1.35781 24.04 1.07446 24.035C0.791099 24.03 0.520746 23.9153 0.320352 23.7149C0.119958 23.5145 0.00516988 23.2441 0.000170402 22.9608C-0.00482908 22.6774 0.100351 22.4032 0.293551 22.1958L20.3019 2.1875H6.53522C6.24514 2.1875 5.96694 2.07227 5.76182 1.86715C5.5567 1.66203 5.44147 1.38383 5.44147 1.09375C5.44147 0.803669 5.5567 0.52547 5.76182 0.320352C5.96694 0.115234 6.24514 0 6.53522 0Z"
fill="url(#paint0_linear_1_4031)"></path>
<defs>
<linearGradient id="paint0_linear_1_4031" x1="-0.34336"
y1="13.9061" x2="24.0352" y2="13.9061"
gradientUnits="userSpaceOnUse">
<stop offset="1" stop-color="#F86403"></stop>
<stop offset="1" stop-color="#D65501"></stop>
</linearGradient>
</defs>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_80"></div>
<!---============spacing==========--->
</section>
<!--service-->


<!--service-->
<section class="content-section position-relative  bg_op_4"
style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/service-brlow-min.jpg)!important;">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="background_overlay bg_13 z_0"></div>
<div class="container-no">
<div class="row align-items-center">
<div class="col-lg-2">
<!---============spacing==========--->
<div class="pd_top_20"></div>
<!---============spacing==========--->
<div class="position-relative z_1">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/call-1-min.png" class="img-fluid m-auto" alt="img" />
</div>
<!---============spacing==========--->
<div class="pd_bottom_20"></div>
<!---============spacing==========--->
</div>
<div class="col-lg-4 pd_left_70 pd_right_70">
<div class="section_title color_white type_five">
<h4 class="sm_title"> Insurance Services</h4>
<div class="title_whole">
<h2 class="title"> Find an Insurance
Agent or Start Tracking
your Claims</h2>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
<div class="theme_btn_all">
<a href="#" class="theme_btn big2 icon_center color_white_two">
Track Your Cliam <span><i aria-hidden="false"
class="far fa-arrow-alt-circle-right"></i></span>
</a></div>
<!---============spacing==========--->
<div class="pd_bottom_50"></div>
<!---============spacing==========--->
</div>

<div class="col-lg-4 pd_left_70 pd_right_70">
<div class="position-relative">
<p class="color_white">
Sed ut perspiciatis unde omnis iste natus error
sit voluptaem accusantium doloremue laudantium
totam rem aperiam eauec abillo inventore.
</p>
<!---============spacing==========--->
<div class="pd_bottom_20"></div>
<!---============spacing==========--->
<div class="image_video_box_only  type_one">
<div class="image one height_210px">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/clain-1.png"
class="img-fluid height_210px object-fit-cover" alt="img" />
<div class="video_box video-inner text-center">
<a href="https://youtu.be/RN81h85V6D4" class="lightbox-image">
<i class="fi-rr-play"></i>
</a></div>
</div>
</div>
</div>

</div>
<div class="col-lg-2">
<!---============spacing==========--->
<div class="pd_top_20"></div>
<!---============spacing==========--->
<div class="position-relative z_1">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/call-2-min.png" class="img-fluid m-auto" alt="img" />
</div>
<!---============spacing==========--->
<div class="pd_bottom_20"></div>
<!---============spacing==========--->
</div>
</div>

</div>
<!---============spacing==========--->
<div class="pd_bottom_80"></div>
<!---============spacing==========--->
</section>
<!--service-->

<!--process-->
<section class="process-section">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section_title text-center type_five">
<h4 class="sm_title"> Our performance</h4>
<div class="title_whole">
<h2 class="title"> How To Get Online Insurance Loan</h2>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="process_box type_four color_two">
<div class="icon trans">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/home-6-icon-1.png" class="img-fluid" alt="img" /> 
<p class="step bg_2">1</p>
<svg width="123" height="16" viewBox="0 0 123 16" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2"
d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
fill="#181818"></path>
</svg>
</div>
<div class="content_no">
<div class="con_top">
<div class="title_20">
<a href="#">
Download and
complete your Data </a></div>
<p>Sed ut persiciatis omnis
natus errorsit voluptatem
accusantium doloremue
laudantium totam rem</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="process_box type_four color_two">
<div class="icon trans">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/home-6-icon-2.png" class="img-fluid" alt="img" /> 
<p class="step bg_15">2</p>
<svg width="123" height="16" viewBox="0 0 123 16" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2"
d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
fill="#181818"></path>
</svg>
</div>
<div class="content_no">
<div class="con_top">
<div class="title_20">
<a href="#">
Verification to get
a Credit limit </a></div>
<p>Sed ut persiciatis omnis
natus errorsit voluptatem
accusantium doloremue
laudantium totam rem</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="process_box type_four">
<div class="icon trans">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/home-6-icon-3.png" class="img-fluid" alt="img" /> 
<p class="step bg_14">3</p>
<svg width="123" height="16" viewBox="0 0 123 16" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2"
d="M122.354 8.35355C122.549 8.15829 122.549 7.84171 122.354 7.64645L119.172 4.46447C118.976 4.2692 118.66 4.2692 118.464 4.46447C118.269 4.65973 118.269 4.97631 118.464 5.17157L121.293 8L118.464 10.8284C118.269 11.0237 118.269 11.3403 118.464 11.5355C118.66 11.7308 118.976 11.7308 119.172 11.5355L122.354 8.35355ZM0 8.5H3.05V7.5H0V8.5ZM9.15 8.5H15.25V7.5H9.15V8.5ZM21.35 8.5H27.45V7.5H21.35V8.5ZM33.55 8.5H39.65V7.5H33.55V8.5ZM45.75 8.5H51.85V7.5H45.75V8.5ZM57.95 8.5H64.05V7.5H57.95V8.5ZM70.15 8.5H76.25V7.5H70.15V8.5ZM82.35 8.5H88.45V7.5H82.35V8.5ZM94.55 8.5H100.65V7.5H94.55V8.5ZM106.75 8.5H112.85V7.5H106.75V8.5ZM118.95 8.5H122V7.5H118.95V8.5ZM122.707 8.70711C123.098 8.31658 123.098 7.68342 122.707 7.29289L116.343 0.928932C115.953 0.538408 115.319 0.538408 114.929 0.928932C114.538 1.31946 114.538 1.95262 114.929 2.34315L120.586 8L114.929 13.6569C114.538 14.0474 114.538 14.6805 114.929 15.0711C115.319 15.4616 115.953 15.4616 116.343 15.0711L122.707 8.70711ZM0 9H3.05V7H0V9ZM9.15 9H15.25V7H9.15V9ZM21.35 9H27.45V7H21.35V9ZM33.55 9H39.65V7H33.55V9ZM45.75 9H51.85V7H45.75V9ZM57.95 9H64.05V7H57.95V9ZM70.15 9H76.25V7H70.15V9ZM82.35 9H88.45V7H82.35V9ZM94.55 9H100.65V7H94.55V9ZM106.75 9H112.85V7H106.75V9ZM118.95 9H122V7H118.95V9Z"
fill="#181818"></path>
</svg>
</div>
<div class="content_no">
<div class="con_top">
<div class="title_20">
<a href="#">
Select Truncations
and funding </a></div>
<p>Sed ut persiciatis omnis
natus errorsit voluptatem
accusantium doloremue
laudantium totam rem</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="process_box type_four">
<div class="icon trans">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/home-6-icon-4.png" class="img-fluid" alt="img" /> 
<p class="step">4</p>
</div>
<div class="content_no">
<div class="con_top">
<div class="title_20">
<a href="#">
Use Insurance anytime anywhere </a></div>
<p>Sed ut persiciatis omnis
natus errorsit voluptatem
accusantium doloremue
laudantium totam rem</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_80"></div>
<!---============spacing==========--->
</section>
<!--process-->
<!--funfacts-->
<section class="funfacts-section">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="fun_facts type_one color_three text-start">
<h4>
<span class="count">528</span>
<small>
k+ </small></h4>
<h6 class="title_no_a_18">Customer Profiles</h6>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="fun_facts type_one color_three text-start">
<h4>
<span class="count">99</span>
<small>
% </small></h4>
<h6 class="title_no_a_18">Satisficed Customer</h6>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="fun_facts type_one color_three text-start">
<h4>
<span class="count">36</span>
<small>
+ </small></h4>
<h6 class="title_no_a_18">Years Of Experience</h6>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="fun_facts type_one color_three text-start">
<h4>
<span class="count">803</span>
<small>
+ </small></h4>
<h6 class="title_no_a_18">Awards Winning</h6>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_80"></div>
<!---============spacing==========--->
</section>
<!--form section-->
<section class="form-section mr_bottom_minus_250 position-relative z_1">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="contact_form_box_all style_one bg_14 bg_op_4 mr_right_40 z_1"
style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/form-shape-1.png);">
<div class="section_title color_white type_one">
<h4 class="sm_title"> Check Your Favorite Insurance</h4>
<div class="title_whole">
<h2 class="title"> Get Started Favorite
Insurance</h2>
</div>
</div>
<div class="contact_form_shortcode">
<form method="post" action="#">
<div class="forms-field-name mr_bottom_20">
<input type="text" name="name" placeholder="First Name" required="">
</div>
<div class="forms-field-name mr_bottom_20">
<input type="text" name="sname" placeholder="Second Name" required="">
</div>
<div class="forms-field-email mr_bottom_20">
<input type="text" name="email" placeholder="Email" spellcheck="false"
required="">
</div>
<div class="forms-field-Dropdown mr_bottom_40">
<select name="select">
<option value="" class="placeholder" disabled=""
selected="selected">Insurance Type</option>
<option value="Life Insurance">Life Insurance</option>
<option value="Health Insurance">Health Insurance
</option>
<option value="House Insurance">House Insurance</option>
<option value="Travel Insurance">Travel Insurance
</option>
</select>
</div>
<div class="forms-field-number-slider mr_bottom_40">
<input type="range" name="range" value="4500" min="0" max="7000"
step="1">
<div class="slider-hint mr_top_5" data-hint="Selected Value: {value}">
Selected Value: <b>4500</b>
</div>
</div>
<button type="submit">Get a Guote</button>
</form>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 mr_left_minus_100">
<div class="image_box_only type_nine">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/form-image-1.jpg" class="img-fluid" alt="img" />
</div>
</div>
</div>
</div>
</section>
<!--form section-->

<!--testimonial-->
<section class="testimonial-section position-relative bg_light_2 bg_op_6"
style="background-image: url(<?php echo base_url(); ?>modules/uiDesign/assets/images/map-frame-2.png)!important;">
<!---============spacing==========--->
<div class="pd_top_320"></div>
<!---============spacing==========--->
<div class="medium-container">
<div class="row">
<div class="col-lg-6 col-md-12 m-auto">
<div class="section_title text-center type_five">
<h4 class="sm_title"> Clients Testimonials</h4>
<div class="title_whole">
<h2 class="title"> What Our Customer Say <br>
About Our Insurance</h2>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_top_40"></div>
<!---============spacing==========--->
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="image_box_only type_ten mr_bottom_minus_100">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/home-tese-min.jpg" class="img-fluid" alt="img" />
</div>
</div>
<div class="col-lg-6 col-md-12 pd_left_60">
<div class="tsingle_two position-relative color_two">
<div class="slickslider">
<div class="testimonial_box type_four color_two">
<div class="testimonial_box_inner">
<svg class="bg" width="303" height="229" viewBox="0 0 303 229"
fill="none" xmlns="http://www.w3.org/2000/svg">
<path
d="M303 184.199L287.927 175.452L302.598 166.936L302.732 166.861V149.356L303 149.2L302.732 149.044V131.544L287.938 122.953L302.614 114.433L302.748 114.357V96.2385L287.274 105.222L287.14 105.298V122.49L287.129 122.485V140.297L273.074 148.457C272.945 148.327 272.779 148.23 272.597 148.182V114.05L257.524 105.303V87.8039L243.196 79.4878C243.223 79.3962 243.239 79.3046 243.239 79.2077C243.239 79.1108 243.223 79.0192 243.196 78.933L257.39 70.6923L257.524 70.6169V53.4353L272.045 61.8645V97.1703L286.636 88.698C286.829 88.8919 287.092 89.0104 287.381 89.0104C287.959 89.0104 288.431 88.5364 288.431 87.9547C288.431 87.4646 288.099 87.0552 287.649 86.9367V53.1337L302.609 44.4459L302.743 44.3705V26.2518L287.649 35.0149V34.9988L272.308 43.9019L256.967 34.9988V52.8159L242.044 61.4821L241.91 61.5575V78.1951C241.46 78.3136 241.128 78.723 241.128 79.2131C241.128 79.7032 241.46 80.1126 241.91 80.2311V96.8687L256.983 105.616V122.803L242.446 131.243V114.056L227.379 105.298V104.985L227.111 105.142L226.843 104.985V105.298L211.904 113.969L211.77 114.045V132.164L226.361 123.691C226.554 123.885 226.816 124.004 227.105 124.004C227.395 124.004 227.662 123.885 227.85 123.691L241.905 131.851V167.162L257.246 158.259L272.051 166.85L286.856 175.446L272.319 183.886L272.051 183.73V184.042L271.783 184.199L272.051 184.355V201.854L287.124 210.601V226.926C286.674 227.045 286.342 227.454 286.342 227.944C286.342 228.526 286.813 229 287.391 229C287.97 229 288.441 228.526 288.441 227.944C288.441 227.847 288.425 227.756 288.398 227.67L302.593 219.429L302.727 219.354V201.235L287.654 209.982V193.107L303 184.199ZM287.675 105.61L302.213 97.1703V114.045L287.675 122.485V105.61ZM302.197 166.543L287.659 174.983V158.108L302.197 149.668V166.543ZM302.197 148.731L287.659 140.291V123.417L302.197 131.857V148.731ZM287.397 140.76L301.934 149.2L295.33 153.035L287.397 157.64L273.336 149.48C273.358 149.394 273.379 149.302 273.379 149.205C273.379 149.108 273.363 149.017 273.336 148.931L287.397 140.76ZM272.056 131.862V148.182C271.874 148.23 271.708 148.327 271.579 148.457L264.793 144.514L257.524 140.297V123.422L264.793 127.639L272.056 131.862ZM272.581 61.8645L287.118 53.4245V70.2991L272.581 78.7391V61.8645ZM272.581 96.2385V79.3639L287.118 70.9239V86.9367C286.668 87.0552 286.336 87.4646 286.336 87.9547C286.336 88.0517 286.352 88.1432 286.379 88.2294L272.581 96.2385ZM287.675 35.6235L302.213 27.1835V44.0581L287.675 52.4981V35.6235ZM287.113 52.8051L272.576 61.2451V44.3705L287.113 35.9305V52.8051ZM257.508 35.9305L272.045 44.3705V61.2451L257.524 52.8159V52.4981L257.514 52.5035V35.9305H257.508ZM256.983 53.4299V70.3045L242.928 78.4644C242.8 78.3352 242.634 78.2382 242.451 78.1897V61.8645L256.983 53.4299ZM242.451 96.5509V80.2257C242.634 80.1772 242.8 80.0856 242.928 79.951L256.989 88.1109V104.985L242.451 96.5509ZM272.056 114.363V131.237L264.788 127.02L257.519 122.803V105.928L272.056 114.363ZM212.311 131.237V114.363L226.848 105.923V121.935C226.398 122.054 226.066 122.463 226.066 122.953C226.066 123.05 226.082 123.142 226.109 123.228L212.311 131.237ZM227.379 121.935V105.923L241.916 114.363V131.237L228.123 123.234C228.145 123.147 228.166 123.056 228.166 122.959C228.166 122.463 227.828 122.054 227.379 121.935ZM242.451 131.862L256.989 123.422V140.297L242.451 148.737V131.862ZM242.451 149.356L256.989 140.916V157.791L242.451 166.231V149.356ZM257.519 157.796V140.921L264.788 145.139L271.312 148.925C271.29 149.011 271.269 149.103 271.269 149.2C271.269 149.69 271.601 150.099 272.051 150.218V166.231L257.519 157.796ZM272.592 150.218C272.774 150.169 272.94 150.078 273.069 149.943L287.124 158.103V174.978L272.586 166.538V150.218H272.592ZM287.129 175.915L287.397 175.759L287.665 175.915L301.934 184.199L287.397 192.639L272.86 184.199L287.129 175.915ZM272.592 184.662L287.129 193.102V209.976L272.592 201.536V184.662ZM302.197 202.161V219.036L288.141 227.196C288.013 227.066 287.847 226.969 287.665 226.921V210.596L302.197 202.161ZM213.093 96.7071C213.093 96.6101 213.077 96.5186 213.05 96.4324L227.245 88.1917L227.379 88.1163V53.1337L241.348 45.0222C241.541 45.2915 241.852 45.4693 242.205 45.4693C242.784 45.4693 243.255 44.9953 243.255 44.4136C243.255 43.9235 242.923 43.5141 242.473 43.3957V26.2518L227.4 34.9988V17.8118L211.791 8.75238V26.8765L226.58 35.462L212.038 43.9073L197.977 35.7474C197.999 35.6612 198.02 35.5697 198.02 35.4727C198.02 34.891 197.549 34.4171 196.97 34.4171C196.392 34.4171 195.92 34.891 195.92 35.4727C195.92 35.9629 196.253 36.3722 196.703 36.4907V52.5035V70.3153L181.897 78.9115L167.36 70.4715L182.031 61.9561L182.165 61.8807V44.3652L182.433 44.209L182.165 44.0528V26.8712L197.104 18.1996L197.238 18.1242V0L181.764 8.98398L181.63 9.05939V26.2464L167.092 17.8064V17.494L166.825 17.6502L151.484 8.74699V25.6916C151.302 25.7401 151.136 25.837 151.007 25.9663L136.952 17.8064V0.00538608L121.879 8.75238V8.74699L106.405 17.731L106.271 17.8064V34.9934L91.7335 26.5534V26.241L91.4656 26.3972L91.1978 26.241V26.5534L76.3928 35.1442L61.0521 26.241V44.0581L46.5309 52.4927V35.3058L30.9278 26.2464L15.8549 17.494V35.3058L1.79975 43.4657C1.60692 43.2718 1.34445 43.1533 1.04985 43.1533C0.471362 43.1533 0 43.6273 0 44.209C0 44.7906 0.471362 45.2646 1.04985 45.2646C1.34445 45.2646 1.60692 45.1461 1.79439 44.9522L15.8549 53.1175V70.9293L31.3295 61.9399L31.4634 61.8645V44.6775L46.0006 53.1175V70.9239L60.5914 62.4516C60.72 62.5809 60.886 62.6778 61.0681 62.7263V79.3639L76.6767 88.4233V70.9239L91.7495 79.6709V61.5521L76.9445 52.9613L91.4763 44.5267L106.817 53.4299V35.6181L121.354 27.1782V61.5521L106.415 70.2237L106.281 70.2991V88.4179L120.872 79.9456C121.065 80.1395 121.327 80.258 121.617 80.258C122.195 80.258 122.667 79.784 122.667 79.2023C122.667 78.7122 122.334 78.3028 121.885 78.1843V61.8591L136.824 53.1875L136.957 53.1121V35.9305L151.495 44.3705V60.6957C151.045 60.8142 150.713 61.2236 150.713 61.7137C150.713 61.8107 150.729 61.9022 150.755 61.9884L136.561 70.2291L136.427 70.3045V88.4233L151.768 79.5201L166.841 88.2671L181.914 79.5201L196.986 88.2671L211.791 79.6709V95.6837C211.342 95.8022 211.009 96.2116 211.009 96.7017C211.009 97.2834 211.481 97.7574 212.059 97.7574C212.622 97.7627 213.093 97.2888 213.093 96.7071ZM226.843 87.8039L212.788 95.9638C212.659 95.8345 212.493 95.7376 212.311 95.6891V79.3639L212.579 79.2077L226.848 70.9239V87.8039H226.843ZM197.238 53.4299L211.775 61.8699V78.7445L197.238 70.3045V53.4299ZM212.311 61.8645L226.843 53.4299V70.3045L212.306 78.7445V61.8645H212.311ZM226.843 52.8051L212.306 61.2451V44.3705L226.843 35.9305V52.8051ZM241.937 27.1835V43.3903C241.487 43.5088 241.155 43.9181 241.155 44.4082C241.155 44.4406 241.161 44.4729 241.166 44.5052L227.405 52.4927V35.6235L241.937 27.1835ZM212.332 9.68417L226.87 18.1242V34.9988L212.332 26.5588V9.68417ZM197.238 36.4853C197.42 36.4368 197.586 36.3453 197.715 36.2106L211.77 44.3705V61.2451L197.233 52.8051V36.4853H197.238ZM166.83 52.6489L152.293 44.209L158.897 40.3741L166.83 35.769L181.367 44.209L174.763 48.0438L166.83 52.6489ZM152.025 27.7329C152.207 27.6845 152.373 27.5929 152.502 27.4582L166.289 35.462L152.02 43.7457V27.7329H152.025ZM166.562 34.9934L152.769 26.9843C152.791 26.8981 152.812 26.8065 152.812 26.7096C152.812 26.6126 152.796 26.5211 152.769 26.4349L166.562 18.4258V34.9934ZM166.562 53.1175V69.9921L152.769 61.983C152.791 61.8968 152.812 61.8053 152.812 61.7083C152.812 61.2182 152.48 60.8089 152.03 60.6904V44.6775L166.562 53.1175ZM152.025 62.7317C152.207 62.6832 152.373 62.5863 152.502 62.457L166.289 70.4607L152.02 78.7445V62.7317H152.025ZM181.63 61.5521L167.092 69.9921V53.1175L181.63 44.6775V61.5521ZM182.165 9.37178L196.703 0.931792V17.8064L182.165 26.2464V9.37178ZM181.63 26.8712V43.7457L167.092 35.3058V18.4312L181.63 26.8712ZM166.294 17.9626L152.507 25.9663C152.378 25.837 152.212 25.7401 152.03 25.6916V9.67879L166.294 17.9626ZM136.422 0.937178V17.8118L121.885 26.2518V9.37717L136.422 0.937178ZM91.2085 27.1782V44.0528L76.6713 52.4927V35.6181L91.2085 27.1782ZM61.6038 27.1782L76.141 35.6181V52.4927L68.8724 48.2754L61.6038 44.0581V27.1782ZM76.1357 69.9921L68.8671 65.7748L62.343 61.9884C62.3644 61.9022 62.3858 61.8107 62.3858 61.7137C62.3858 61.2236 62.0537 60.8142 61.6038 60.6957V44.6775L68.8724 48.8948L76.141 53.1121V69.9921H76.1357ZM45.9953 52.4927L31.4634 44.0528V27.1782L46.0006 35.6181V52.4927H45.9953ZM16.3905 18.4312L30.9278 26.8712V43.7457L16.3905 35.3058V18.4312ZM2.06221 43.9343L16.1227 35.7743L30.6599 44.2143L24.0555 48.0438L16.1227 52.6489L2.06221 44.489C2.08363 44.4028 2.10506 44.3113 2.10506 44.2143C2.10506 44.1174 2.08363 44.0258 2.06221 43.9343ZM30.9278 61.5521L16.3905 69.9921V53.1175L30.9278 44.6775V61.5521ZM46.5309 69.9921V53.1175L61.0681 44.6775V60.6904C60.6182 60.8089 60.2861 61.2182 60.2861 61.7083C60.2861 61.8053 60.3022 61.8968 60.329 61.983L46.5309 69.9921ZM76.1357 87.4861L61.5984 79.0461V62.7209C61.7805 62.6724 61.9466 62.5809 62.0751 62.4462L68.8617 66.3888L76.1303 70.6061V87.4861H76.1357ZM91.2085 78.7391L76.6713 70.2991V53.4245L91.2085 61.8645V78.7391ZM106.276 52.4927L91.7442 44.0581V27.1782L106.281 35.6181V52.4927H106.276ZM106.812 34.9988V18.1188L121.349 9.67879V26.5534L106.812 34.9988ZM136.422 18.4366V35.3058L121.885 43.7457V26.8712L136.422 18.4366ZM106.812 87.4915V70.6169L121.349 62.1769V78.1897C120.899 78.3082 120.567 78.7176 120.567 79.2077C120.567 79.3046 120.583 79.3962 120.61 79.4824L106.812 87.4915ZM136.422 52.8051L121.885 61.2451V44.3705L136.422 35.9305V52.8051ZM136.957 18.4312L150.75 26.4349C150.729 26.5211 150.707 26.6126 150.707 26.7096C150.707 27.1997 151.039 27.609 151.489 27.7275V43.7404L136.952 35.3004V18.4312H136.957ZM136.957 70.6169L151.013 62.457C151.141 62.5863 151.307 62.6832 151.489 62.7317V79.0569L136.952 87.4969V70.6169H136.957ZM166.83 87.6477L152.293 79.2077L166.562 70.9239L166.83 70.7677L167.098 70.9239L181.367 79.2077L166.83 87.6477ZM182.433 79.2077L196.97 70.7677L211.508 79.2077L196.97 87.6477L182.433 79.2077Z"
fill="white" />
</svg>
<div class="image_box">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/testimonial/test-1-min.png"
class="img-fluid" alt="image" />
<svg width="86" height="88" viewBox="0 0 86 88" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M39.9434 87.5484C17.5317 86.8101 0.00666874 66.6886 0.800056 42.6058C1.59344 18.523 20.4048 -0.401485 42.8165 0.336847C65.2281 1.07518 85.8758 32.0772 85.0824 56.16C84.289 80.2429 62.355 88.2868 39.9434 87.5484Z"
fill="var(--color-set-four-3)" />
</svg></div>
<div class="title_no_a_20 t_comment">
<sup>“</sup> Sit amet consectetur adipi scey
elit Condimentum quam nun facilisis
condim entum pellentesque <sub>“</sub></div>
<div class="lower_content d-flex  clearfix">
<div class="cont">
<h4 class="title_no_a_18">Fleix Everard</h4>
<p>HR, Blue Soft Sol</p>
</div>
<div class="rating">
<p>
<i class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star empty"></i></p>
<p class="rating_text">4.8 Of 8 (Reviews)</p>
</div>
</div>
</div>
</div>
<div class="testimonial_box type_four color_two">
<div class="testimonial_box_inner">
<svg class="bg" width="303" height="229" viewBox="0 0 303 229"
fill="none" xmlns="http://www.w3.org/2000/svg">
<path
d="M303 184.199L287.927 175.452L302.598 166.936L302.732 166.861V149.356L303 149.2L302.732 149.044V131.544L287.938 122.953L302.614 114.433L302.748 114.357V96.2385L287.274 105.222L287.14 105.298V122.49L287.129 122.485V140.297L273.074 148.457C272.945 148.327 272.779 148.23 272.597 148.182V114.05L257.524 105.303V87.8039L243.196 79.4878C243.223 79.3962 243.239 79.3046 243.239 79.2077C243.239 79.1108 243.223 79.0192 243.196 78.933L257.39 70.6923L257.524 70.6169V53.4353L272.045 61.8645V97.1703L286.636 88.698C286.829 88.8919 287.092 89.0104 287.381 89.0104C287.959 89.0104 288.431 88.5364 288.431 87.9547C288.431 87.4646 288.099 87.0552 287.649 86.9367V53.1337L302.609 44.4459L302.743 44.3705V26.2518L287.649 35.0149V34.9988L272.308 43.9019L256.967 34.9988V52.8159L242.044 61.4821L241.91 61.5575V78.1951C241.46 78.3136 241.128 78.723 241.128 79.2131C241.128 79.7032 241.46 80.1126 241.91 80.2311V96.8687L256.983 105.616V122.803L242.446 131.243V114.056L227.379 105.298V104.985L227.111 105.142L226.843 104.985V105.298L211.904 113.969L211.77 114.045V132.164L226.361 123.691C226.554 123.885 226.816 124.004 227.105 124.004C227.395 124.004 227.662 123.885 227.85 123.691L241.905 131.851V167.162L257.246 158.259L272.051 166.85L286.856 175.446L272.319 183.886L272.051 183.73V184.042L271.783 184.199L272.051 184.355V201.854L287.124 210.601V226.926C286.674 227.045 286.342 227.454 286.342 227.944C286.342 228.526 286.813 229 287.391 229C287.97 229 288.441 228.526 288.441 227.944C288.441 227.847 288.425 227.756 288.398 227.67L302.593 219.429L302.727 219.354V201.235L287.654 209.982V193.107L303 184.199ZM287.675 105.61L302.213 97.1703V114.045L287.675 122.485V105.61ZM302.197 166.543L287.659 174.983V158.108L302.197 149.668V166.543ZM302.197 148.731L287.659 140.291V123.417L302.197 131.857V148.731ZM287.397 140.76L301.934 149.2L295.33 153.035L287.397 157.64L273.336 149.48C273.358 149.394 273.379 149.302 273.379 149.205C273.379 149.108 273.363 149.017 273.336 148.931L287.397 140.76ZM272.056 131.862V148.182C271.874 148.23 271.708 148.327 271.579 148.457L264.793 144.514L257.524 140.297V123.422L264.793 127.639L272.056 131.862ZM272.581 61.8645L287.118 53.4245V70.2991L272.581 78.7391V61.8645ZM272.581 96.2385V79.3639L287.118 70.9239V86.9367C286.668 87.0552 286.336 87.4646 286.336 87.9547C286.336 88.0517 286.352 88.1432 286.379 88.2294L272.581 96.2385ZM287.675 35.6235L302.213 27.1835V44.0581L287.675 52.4981V35.6235ZM287.113 52.8051L272.576 61.2451V44.3705L287.113 35.9305V52.8051ZM257.508 35.9305L272.045 44.3705V61.2451L257.524 52.8159V52.4981L257.514 52.5035V35.9305H257.508ZM256.983 53.4299V70.3045L242.928 78.4644C242.8 78.3352 242.634 78.2382 242.451 78.1897V61.8645L256.983 53.4299ZM242.451 96.5509V80.2257C242.634 80.1772 242.8 80.0856 242.928 79.951L256.989 88.1109V104.985L242.451 96.5509ZM272.056 114.363V131.237L264.788 127.02L257.519 122.803V105.928L272.056 114.363ZM212.311 131.237V114.363L226.848 105.923V121.935C226.398 122.054 226.066 122.463 226.066 122.953C226.066 123.05 226.082 123.142 226.109 123.228L212.311 131.237ZM227.379 121.935V105.923L241.916 114.363V131.237L228.123 123.234C228.145 123.147 228.166 123.056 228.166 122.959C228.166 122.463 227.828 122.054 227.379 121.935ZM242.451 131.862L256.989 123.422V140.297L242.451 148.737V131.862ZM242.451 149.356L256.989 140.916V157.791L242.451 166.231V149.356ZM257.519 157.796V140.921L264.788 145.139L271.312 148.925C271.29 149.011 271.269 149.103 271.269 149.2C271.269 149.69 271.601 150.099 272.051 150.218V166.231L257.519 157.796ZM272.592 150.218C272.774 150.169 272.94 150.078 273.069 149.943L287.124 158.103V174.978L272.586 166.538V150.218H272.592ZM287.129 175.915L287.397 175.759L287.665 175.915L301.934 184.199L287.397 192.639L272.86 184.199L287.129 175.915ZM272.592 184.662L287.129 193.102V209.976L272.592 201.536V184.662ZM302.197 202.161V219.036L288.141 227.196C288.013 227.066 287.847 226.969 287.665 226.921V210.596L302.197 202.161ZM213.093 96.7071C213.093 96.6101 213.077 96.5186 213.05 96.4324L227.245 88.1917L227.379 88.1163V53.1337L241.348 45.0222C241.541 45.2915 241.852 45.4693 242.205 45.4693C242.784 45.4693 243.255 44.9953 243.255 44.4136C243.255 43.9235 242.923 43.5141 242.473 43.3957V26.2518L227.4 34.9988V17.8118L211.791 8.75238V26.8765L226.58 35.462L212.038 43.9073L197.977 35.7474C197.999 35.6612 198.02 35.5697 198.02 35.4727C198.02 34.891 197.549 34.4171 196.97 34.4171C196.392 34.4171 195.92 34.891 195.92 35.4727C195.92 35.9629 196.253 36.3722 196.703 36.4907V52.5035V70.3153L181.897 78.9115L167.36 70.4715L182.031 61.9561L182.165 61.8807V44.3652L182.433 44.209L182.165 44.0528V26.8712L197.104 18.1996L197.238 18.1242V0L181.764 8.98398L181.63 9.05939V26.2464L167.092 17.8064V17.494L166.825 17.6502L151.484 8.74699V25.6916C151.302 25.7401 151.136 25.837 151.007 25.9663L136.952 17.8064V0.00538608L121.879 8.75238V8.74699L106.405 17.731L106.271 17.8064V34.9934L91.7335 26.5534V26.241L91.4656 26.3972L91.1978 26.241V26.5534L76.3928 35.1442L61.0521 26.241V44.0581L46.5309 52.4927V35.3058L30.9278 26.2464L15.8549 17.494V35.3058L1.79975 43.4657C1.60692 43.2718 1.34445 43.1533 1.04985 43.1533C0.471362 43.1533 0 43.6273 0 44.209C0 44.7906 0.471362 45.2646 1.04985 45.2646C1.34445 45.2646 1.60692 45.1461 1.79439 44.9522L15.8549 53.1175V70.9293L31.3295 61.9399L31.4634 61.8645V44.6775L46.0006 53.1175V70.9239L60.5914 62.4516C60.72 62.5809 60.886 62.6778 61.0681 62.7263V79.3639L76.6767 88.4233V70.9239L91.7495 79.6709V61.5521L76.9445 52.9613L91.4763 44.5267L106.817 53.4299V35.6181L121.354 27.1782V61.5521L106.415 70.2237L106.281 70.2991V88.4179L120.872 79.9456C121.065 80.1395 121.327 80.258 121.617 80.258C122.195 80.258 122.667 79.784 122.667 79.2023C122.667 78.7122 122.334 78.3028 121.885 78.1843V61.8591L136.824 53.1875L136.957 53.1121V35.9305L151.495 44.3705V60.6957C151.045 60.8142 150.713 61.2236 150.713 61.7137C150.713 61.8107 150.729 61.9022 150.755 61.9884L136.561 70.2291L136.427 70.3045V88.4233L151.768 79.5201L166.841 88.2671L181.914 79.5201L196.986 88.2671L211.791 79.6709V95.6837C211.342 95.8022 211.009 96.2116 211.009 96.7017C211.009 97.2834 211.481 97.7574 212.059 97.7574C212.622 97.7627 213.093 97.2888 213.093 96.7071ZM226.843 87.8039L212.788 95.9638C212.659 95.8345 212.493 95.7376 212.311 95.6891V79.3639L212.579 79.2077L226.848 70.9239V87.8039H226.843ZM197.238 53.4299L211.775 61.8699V78.7445L197.238 70.3045V53.4299ZM212.311 61.8645L226.843 53.4299V70.3045L212.306 78.7445V61.8645H212.311ZM226.843 52.8051L212.306 61.2451V44.3705L226.843 35.9305V52.8051ZM241.937 27.1835V43.3903C241.487 43.5088 241.155 43.9181 241.155 44.4082C241.155 44.4406 241.161 44.4729 241.166 44.5052L227.405 52.4927V35.6235L241.937 27.1835ZM212.332 9.68417L226.87 18.1242V34.9988L212.332 26.5588V9.68417ZM197.238 36.4853C197.42 36.4368 197.586 36.3453 197.715 36.2106L211.77 44.3705V61.2451L197.233 52.8051V36.4853H197.238ZM166.83 52.6489L152.293 44.209L158.897 40.3741L166.83 35.769L181.367 44.209L174.763 48.0438L166.83 52.6489ZM152.025 27.7329C152.207 27.6845 152.373 27.5929 152.502 27.4582L166.289 35.462L152.02 43.7457V27.7329H152.025ZM166.562 34.9934L152.769 26.9843C152.791 26.8981 152.812 26.8065 152.812 26.7096C152.812 26.6126 152.796 26.5211 152.769 26.4349L166.562 18.4258V34.9934ZM166.562 53.1175V69.9921L152.769 61.983C152.791 61.8968 152.812 61.8053 152.812 61.7083C152.812 61.2182 152.48 60.8089 152.03 60.6904V44.6775L166.562 53.1175ZM152.025 62.7317C152.207 62.6832 152.373 62.5863 152.502 62.457L166.289 70.4607L152.02 78.7445V62.7317H152.025ZM181.63 61.5521L167.092 69.9921V53.1175L181.63 44.6775V61.5521ZM182.165 9.37178L196.703 0.931792V17.8064L182.165 26.2464V9.37178ZM181.63 26.8712V43.7457L167.092 35.3058V18.4312L181.63 26.8712ZM166.294 17.9626L152.507 25.9663C152.378 25.837 152.212 25.7401 152.03 25.6916V9.67879L166.294 17.9626ZM136.422 0.937178V17.8118L121.885 26.2518V9.37717L136.422 0.937178ZM91.2085 27.1782V44.0528L76.6713 52.4927V35.6181L91.2085 27.1782ZM61.6038 27.1782L76.141 35.6181V52.4927L68.8724 48.2754L61.6038 44.0581V27.1782ZM76.1357 69.9921L68.8671 65.7748L62.343 61.9884C62.3644 61.9022 62.3858 61.8107 62.3858 61.7137C62.3858 61.2236 62.0537 60.8142 61.6038 60.6957V44.6775L68.8724 48.8948L76.141 53.1121V69.9921H76.1357ZM45.9953 52.4927L31.4634 44.0528V27.1782L46.0006 35.6181V52.4927H45.9953ZM16.3905 18.4312L30.9278 26.8712V43.7457L16.3905 35.3058V18.4312ZM2.06221 43.9343L16.1227 35.7743L30.6599 44.2143L24.0555 48.0438L16.1227 52.6489L2.06221 44.489C2.08363 44.4028 2.10506 44.3113 2.10506 44.2143C2.10506 44.1174 2.08363 44.0258 2.06221 43.9343ZM30.9278 61.5521L16.3905 69.9921V53.1175L30.9278 44.6775V61.5521ZM46.5309 69.9921V53.1175L61.0681 44.6775V60.6904C60.6182 60.8089 60.2861 61.2182 60.2861 61.7083C60.2861 61.8053 60.3022 61.8968 60.329 61.983L46.5309 69.9921ZM76.1357 87.4861L61.5984 79.0461V62.7209C61.7805 62.6724 61.9466 62.5809 62.0751 62.4462L68.8617 66.3888L76.1303 70.6061V87.4861H76.1357ZM91.2085 78.7391L76.6713 70.2991V53.4245L91.2085 61.8645V78.7391ZM106.276 52.4927L91.7442 44.0581V27.1782L106.281 35.6181V52.4927H106.276ZM106.812 34.9988V18.1188L121.349 9.67879V26.5534L106.812 34.9988ZM136.422 18.4366V35.3058L121.885 43.7457V26.8712L136.422 18.4366ZM106.812 87.4915V70.6169L121.349 62.1769V78.1897C120.899 78.3082 120.567 78.7176 120.567 79.2077C120.567 79.3046 120.583 79.3962 120.61 79.4824L106.812 87.4915ZM136.422 52.8051L121.885 61.2451V44.3705L136.422 35.9305V52.8051ZM136.957 18.4312L150.75 26.4349C150.729 26.5211 150.707 26.6126 150.707 26.7096C150.707 27.1997 151.039 27.609 151.489 27.7275V43.7404L136.952 35.3004V18.4312H136.957ZM136.957 70.6169L151.013 62.457C151.141 62.5863 151.307 62.6832 151.489 62.7317V79.0569L136.952 87.4969V70.6169H136.957ZM166.83 87.6477L152.293 79.2077L166.562 70.9239L166.83 70.7677L167.098 70.9239L181.367 79.2077L166.83 87.6477ZM182.433 79.2077L196.97 70.7677L211.508 79.2077L196.97 87.6477L182.433 79.2077Z"
fill="white" />
</svg>
<div class="image_box">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/testimonial/test-2-min.png"
class="img-fluid" alt="image" />
<svg width="86" height="88" viewBox="0 0 86 88" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M39.9434 87.5484C17.5317 86.8101 0.00666874 66.6886 0.800056 42.6058C1.59344 18.523 20.4048 -0.401485 42.8165 0.336847C65.2281 1.07518 85.8758 32.0772 85.0824 56.16C84.289 80.2429 62.355 88.2868 39.9434 87.5484Z"
fill="var(--color-set-four-3)" />
</svg></div>
<div class="title_no_a_20 t_comment">
<sup>“</sup> Sit amet consectetur adipi scey
elit Condimentum quam nun facilisis
condim entum pellentesque <sub>“</sub></div>
<div class="lower_content d-flex  clearfix">
<div class="cont">
<h4 class="title_no_a_18">Boris Elbert</h4>
<p>Green Tech</p>
</div>
<div class="rating">
<p>
<i class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star empty"></i><i
class="fa fa-star empty"></i></p>
<p class="rating_text">4.8 Of 8 (Reviews)</p>
</div>
</div>
</div>
</div>
<div class="testimonial_box type_four color_two">
<div class="testimonial_box_inner">
<svg class="bg" width="303" height="229" viewBox="0 0 303 229"
fill="none" xmlns="http://www.w3.org/2000/svg">
<path
d="M303 184.199L287.927 175.452L302.598 166.936L302.732 166.861V149.356L303 149.2L302.732 149.044V131.544L287.938 122.953L302.614 114.433L302.748 114.357V96.2385L287.274 105.222L287.14 105.298V122.49L287.129 122.485V140.297L273.074 148.457C272.945 148.327 272.779 148.23 272.597 148.182V114.05L257.524 105.303V87.8039L243.196 79.4878C243.223 79.3962 243.239 79.3046 243.239 79.2077C243.239 79.1108 243.223 79.0192 243.196 78.933L257.39 70.6923L257.524 70.6169V53.4353L272.045 61.8645V97.1703L286.636 88.698C286.829 88.8919 287.092 89.0104 287.381 89.0104C287.959 89.0104 288.431 88.5364 288.431 87.9547C288.431 87.4646 288.099 87.0552 287.649 86.9367V53.1337L302.609 44.4459L302.743 44.3705V26.2518L287.649 35.0149V34.9988L272.308 43.9019L256.967 34.9988V52.8159L242.044 61.4821L241.91 61.5575V78.1951C241.46 78.3136 241.128 78.723 241.128 79.2131C241.128 79.7032 241.46 80.1126 241.91 80.2311V96.8687L256.983 105.616V122.803L242.446 131.243V114.056L227.379 105.298V104.985L227.111 105.142L226.843 104.985V105.298L211.904 113.969L211.77 114.045V132.164L226.361 123.691C226.554 123.885 226.816 124.004 227.105 124.004C227.395 124.004 227.662 123.885 227.85 123.691L241.905 131.851V167.162L257.246 158.259L272.051 166.85L286.856 175.446L272.319 183.886L272.051 183.73V184.042L271.783 184.199L272.051 184.355V201.854L287.124 210.601V226.926C286.674 227.045 286.342 227.454 286.342 227.944C286.342 228.526 286.813 229 287.391 229C287.97 229 288.441 228.526 288.441 227.944C288.441 227.847 288.425 227.756 288.398 227.67L302.593 219.429L302.727 219.354V201.235L287.654 209.982V193.107L303 184.199ZM287.675 105.61L302.213 97.1703V114.045L287.675 122.485V105.61ZM302.197 166.543L287.659 174.983V158.108L302.197 149.668V166.543ZM302.197 148.731L287.659 140.291V123.417L302.197 131.857V148.731ZM287.397 140.76L301.934 149.2L295.33 153.035L287.397 157.64L273.336 149.48C273.358 149.394 273.379 149.302 273.379 149.205C273.379 149.108 273.363 149.017 273.336 148.931L287.397 140.76ZM272.056 131.862V148.182C271.874 148.23 271.708 148.327 271.579 148.457L264.793 144.514L257.524 140.297V123.422L264.793 127.639L272.056 131.862ZM272.581 61.8645L287.118 53.4245V70.2991L272.581 78.7391V61.8645ZM272.581 96.2385V79.3639L287.118 70.9239V86.9367C286.668 87.0552 286.336 87.4646 286.336 87.9547C286.336 88.0517 286.352 88.1432 286.379 88.2294L272.581 96.2385ZM287.675 35.6235L302.213 27.1835V44.0581L287.675 52.4981V35.6235ZM287.113 52.8051L272.576 61.2451V44.3705L287.113 35.9305V52.8051ZM257.508 35.9305L272.045 44.3705V61.2451L257.524 52.8159V52.4981L257.514 52.5035V35.9305H257.508ZM256.983 53.4299V70.3045L242.928 78.4644C242.8 78.3352 242.634 78.2382 242.451 78.1897V61.8645L256.983 53.4299ZM242.451 96.5509V80.2257C242.634 80.1772 242.8 80.0856 242.928 79.951L256.989 88.1109V104.985L242.451 96.5509ZM272.056 114.363V131.237L264.788 127.02L257.519 122.803V105.928L272.056 114.363ZM212.311 131.237V114.363L226.848 105.923V121.935C226.398 122.054 226.066 122.463 226.066 122.953C226.066 123.05 226.082 123.142 226.109 123.228L212.311 131.237ZM227.379 121.935V105.923L241.916 114.363V131.237L228.123 123.234C228.145 123.147 228.166 123.056 228.166 122.959C228.166 122.463 227.828 122.054 227.379 121.935ZM242.451 131.862L256.989 123.422V140.297L242.451 148.737V131.862ZM242.451 149.356L256.989 140.916V157.791L242.451 166.231V149.356ZM257.519 157.796V140.921L264.788 145.139L271.312 148.925C271.29 149.011 271.269 149.103 271.269 149.2C271.269 149.69 271.601 150.099 272.051 150.218V166.231L257.519 157.796ZM272.592 150.218C272.774 150.169 272.94 150.078 273.069 149.943L287.124 158.103V174.978L272.586 166.538V150.218H272.592ZM287.129 175.915L287.397 175.759L287.665 175.915L301.934 184.199L287.397 192.639L272.86 184.199L287.129 175.915ZM272.592 184.662L287.129 193.102V209.976L272.592 201.536V184.662ZM302.197 202.161V219.036L288.141 227.196C288.013 227.066 287.847 226.969 287.665 226.921V210.596L302.197 202.161ZM213.093 96.7071C213.093 96.6101 213.077 96.5186 213.05 96.4324L227.245 88.1917L227.379 88.1163V53.1337L241.348 45.0222C241.541 45.2915 241.852 45.4693 242.205 45.4693C242.784 45.4693 243.255 44.9953 243.255 44.4136C243.255 43.9235 242.923 43.5141 242.473 43.3957V26.2518L227.4 34.9988V17.8118L211.791 8.75238V26.8765L226.58 35.462L212.038 43.9073L197.977 35.7474C197.999 35.6612 198.02 35.5697 198.02 35.4727C198.02 34.891 197.549 34.4171 196.97 34.4171C196.392 34.4171 195.92 34.891 195.92 35.4727C195.92 35.9629 196.253 36.3722 196.703 36.4907V52.5035V70.3153L181.897 78.9115L167.36 70.4715L182.031 61.9561L182.165 61.8807V44.3652L182.433 44.209L182.165 44.0528V26.8712L197.104 18.1996L197.238 18.1242V0L181.764 8.98398L181.63 9.05939V26.2464L167.092 17.8064V17.494L166.825 17.6502L151.484 8.74699V25.6916C151.302 25.7401 151.136 25.837 151.007 25.9663L136.952 17.8064V0.00538608L121.879 8.75238V8.74699L106.405 17.731L106.271 17.8064V34.9934L91.7335 26.5534V26.241L91.4656 26.3972L91.1978 26.241V26.5534L76.3928 35.1442L61.0521 26.241V44.0581L46.5309 52.4927V35.3058L30.9278 26.2464L15.8549 17.494V35.3058L1.79975 43.4657C1.60692 43.2718 1.34445 43.1533 1.04985 43.1533C0.471362 43.1533 0 43.6273 0 44.209C0 44.7906 0.471362 45.2646 1.04985 45.2646C1.34445 45.2646 1.60692 45.1461 1.79439 44.9522L15.8549 53.1175V70.9293L31.3295 61.9399L31.4634 61.8645V44.6775L46.0006 53.1175V70.9239L60.5914 62.4516C60.72 62.5809 60.886 62.6778 61.0681 62.7263V79.3639L76.6767 88.4233V70.9239L91.7495 79.6709V61.5521L76.9445 52.9613L91.4763 44.5267L106.817 53.4299V35.6181L121.354 27.1782V61.5521L106.415 70.2237L106.281 70.2991V88.4179L120.872 79.9456C121.065 80.1395 121.327 80.258 121.617 80.258C122.195 80.258 122.667 79.784 122.667 79.2023C122.667 78.7122 122.334 78.3028 121.885 78.1843V61.8591L136.824 53.1875L136.957 53.1121V35.9305L151.495 44.3705V60.6957C151.045 60.8142 150.713 61.2236 150.713 61.7137C150.713 61.8107 150.729 61.9022 150.755 61.9884L136.561 70.2291L136.427 70.3045V88.4233L151.768 79.5201L166.841 88.2671L181.914 79.5201L196.986 88.2671L211.791 79.6709V95.6837C211.342 95.8022 211.009 96.2116 211.009 96.7017C211.009 97.2834 211.481 97.7574 212.059 97.7574C212.622 97.7627 213.093 97.2888 213.093 96.7071ZM226.843 87.8039L212.788 95.9638C212.659 95.8345 212.493 95.7376 212.311 95.6891V79.3639L212.579 79.2077L226.848 70.9239V87.8039H226.843ZM197.238 53.4299L211.775 61.8699V78.7445L197.238 70.3045V53.4299ZM212.311 61.8645L226.843 53.4299V70.3045L212.306 78.7445V61.8645H212.311ZM226.843 52.8051L212.306 61.2451V44.3705L226.843 35.9305V52.8051ZM241.937 27.1835V43.3903C241.487 43.5088 241.155 43.9181 241.155 44.4082C241.155 44.4406 241.161 44.4729 241.166 44.5052L227.405 52.4927V35.6235L241.937 27.1835ZM212.332 9.68417L226.87 18.1242V34.9988L212.332 26.5588V9.68417ZM197.238 36.4853C197.42 36.4368 197.586 36.3453 197.715 36.2106L211.77 44.3705V61.2451L197.233 52.8051V36.4853H197.238ZM166.83 52.6489L152.293 44.209L158.897 40.3741L166.83 35.769L181.367 44.209L174.763 48.0438L166.83 52.6489ZM152.025 27.7329C152.207 27.6845 152.373 27.5929 152.502 27.4582L166.289 35.462L152.02 43.7457V27.7329H152.025ZM166.562 34.9934L152.769 26.9843C152.791 26.8981 152.812 26.8065 152.812 26.7096C152.812 26.6126 152.796 26.5211 152.769 26.4349L166.562 18.4258V34.9934ZM166.562 53.1175V69.9921L152.769 61.983C152.791 61.8968 152.812 61.8053 152.812 61.7083C152.812 61.2182 152.48 60.8089 152.03 60.6904V44.6775L166.562 53.1175ZM152.025 62.7317C152.207 62.6832 152.373 62.5863 152.502 62.457L166.289 70.4607L152.02 78.7445V62.7317H152.025ZM181.63 61.5521L167.092 69.9921V53.1175L181.63 44.6775V61.5521ZM182.165 9.37178L196.703 0.931792V17.8064L182.165 26.2464V9.37178ZM181.63 26.8712V43.7457L167.092 35.3058V18.4312L181.63 26.8712ZM166.294 17.9626L152.507 25.9663C152.378 25.837 152.212 25.7401 152.03 25.6916V9.67879L166.294 17.9626ZM136.422 0.937178V17.8118L121.885 26.2518V9.37717L136.422 0.937178ZM91.2085 27.1782V44.0528L76.6713 52.4927V35.6181L91.2085 27.1782ZM61.6038 27.1782L76.141 35.6181V52.4927L68.8724 48.2754L61.6038 44.0581V27.1782ZM76.1357 69.9921L68.8671 65.7748L62.343 61.9884C62.3644 61.9022 62.3858 61.8107 62.3858 61.7137C62.3858 61.2236 62.0537 60.8142 61.6038 60.6957V44.6775L68.8724 48.8948L76.141 53.1121V69.9921H76.1357ZM45.9953 52.4927L31.4634 44.0528V27.1782L46.0006 35.6181V52.4927H45.9953ZM16.3905 18.4312L30.9278 26.8712V43.7457L16.3905 35.3058V18.4312ZM2.06221 43.9343L16.1227 35.7743L30.6599 44.2143L24.0555 48.0438L16.1227 52.6489L2.06221 44.489C2.08363 44.4028 2.10506 44.3113 2.10506 44.2143C2.10506 44.1174 2.08363 44.0258 2.06221 43.9343ZM30.9278 61.5521L16.3905 69.9921V53.1175L30.9278 44.6775V61.5521ZM46.5309 69.9921V53.1175L61.0681 44.6775V60.6904C60.6182 60.8089 60.2861 61.2182 60.2861 61.7083C60.2861 61.8053 60.3022 61.8968 60.329 61.983L46.5309 69.9921ZM76.1357 87.4861L61.5984 79.0461V62.7209C61.7805 62.6724 61.9466 62.5809 62.0751 62.4462L68.8617 66.3888L76.1303 70.6061V87.4861H76.1357ZM91.2085 78.7391L76.6713 70.2991V53.4245L91.2085 61.8645V78.7391ZM106.276 52.4927L91.7442 44.0581V27.1782L106.281 35.6181V52.4927H106.276ZM106.812 34.9988V18.1188L121.349 9.67879V26.5534L106.812 34.9988ZM136.422 18.4366V35.3058L121.885 43.7457V26.8712L136.422 18.4366ZM106.812 87.4915V70.6169L121.349 62.1769V78.1897C120.899 78.3082 120.567 78.7176 120.567 79.2077C120.567 79.3046 120.583 79.3962 120.61 79.4824L106.812 87.4915ZM136.422 52.8051L121.885 61.2451V44.3705L136.422 35.9305V52.8051ZM136.957 18.4312L150.75 26.4349C150.729 26.5211 150.707 26.6126 150.707 26.7096C150.707 27.1997 151.039 27.609 151.489 27.7275V43.7404L136.952 35.3004V18.4312H136.957ZM136.957 70.6169L151.013 62.457C151.141 62.5863 151.307 62.6832 151.489 62.7317V79.0569L136.952 87.4969V70.6169H136.957ZM166.83 87.6477L152.293 79.2077L166.562 70.9239L166.83 70.7677L167.098 70.9239L181.367 79.2077L166.83 87.6477ZM182.433 79.2077L196.97 70.7677L211.508 79.2077L196.97 87.6477L182.433 79.2077Z"
fill="white" />
</svg>
<div class="image_box">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/testimonial/test-3-min.png"
class="img-fluid" alt="image" />
<svg width="86" height="88" viewBox="0 0 86 88" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path
d="M39.9434 87.5484C17.5317 86.8101 0.00666874 66.6886 0.800056 42.6058C1.59344 18.523 20.4048 -0.401485 42.8165 0.336847C65.2281 1.07518 85.8758 32.0772 85.0824 56.16C84.289 80.2429 62.355 88.2868 39.9434 87.5484Z"
fill="var(--color-set-four-3)" />
</svg></div>
<div class="title_no_a_20 t_comment">
<sup>“</sup> Sit amet consectetur adipi scey
elit Condimentum quam nun facilisis
condim entum pellentesque <sub>“</sub></div>
<div class="lower_content d-flex  clearfix">
<div class="cont">
<h4 class="title_no_a_18">Ivor Herbert</h4>
<p>Manager, Airlines</p>
</div>
<div class="rating">
<p>
<i class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i><i
class="fa fa-star fill"></i></p>
<p class="rating_text">4.8 Of 8 (Reviews)</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_top_90"></div>
<!---============spacing==========--->
</div>
</div>
</div>

</section>
<!--testoimonial-->
<!--client-->
<section class="client-section">
<!---============spacing==========--->
<div class="pd_top_120"></div>
<!---============spacing==========--->
<div class="container">
<div class="row align-items-center">
<div class="col-lg-4 col-md-12">
<div class="section_title type_five small">
<h4 class="sm_title"> Popular Clients</h4>
<div class="title_whole">
<h2 class="title"> We’ve 1520+Global
Premium Clients</h2>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-1.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-2.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-3.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-4.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-5.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 w_50_after_max_768">
<div class="iamge mr_bottom_20 mr_top_20">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/client-6.png" class="img-fluid m-auto"
alt="client" />
</div>
</div>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_60"></div>
<!---============spacing==========--->
</section>
<!--client-->
<!--divider-->
<div class="divider"></div>
<!--divider-->
<!--blog-->
<section class="blog-section">
<!---============spacing==========--->
<div class="pd_top_80"></div>
<!---============spacing==========--->
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section_title text-center type_five">
<h4 class="sm_title"> Popular Clients</h4>
<div class="title_whole">
<h2 class="title"> Read Our Latest Articles</h2>
</div>
</div>
</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_40"></div>
<!---============spacing==========--->
<div class="blog_post position-relative">
<div class="row">
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="blog_box type_two type_three type_five  color_two trans hover_1_get">
<div class="blog_inner trans">
<div class="image_box trans hover_1">
<a href="blog-details.html">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/blog/blog-9-min.png" class="img-fluid"  alt="blog" />
</a>
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
<div class="content">
<span class="date_tm"><i class="fi-rr-calendar"></i> <time
class="date published" datetime="2023-01-03T10:03:20+00:00">Jan
3, 2023</time></span>
<div class="d-flex authour align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/gavatar.png" class="img-fluid"  alt="gavatar" />
Bradley R Grady</div>
<h4 class="title_22">
<a
href="blog-details.html">Former
insures only the marine perils</a></h4>
<div class="bottm_contet d-flex align-items-center">
<a href="blog-details.html"
class="theme_btn">Read More <svg width="12" height="12"
viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#fff"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a></div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="blog_box type_two type_three type_five color_two trans hover_1_get">
<div class="blog_inner trans">
<div class="image_box trans hover_1">
<a
href="blog-details.html">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/blog/blog-8-min.png" class="img-fluid"  alt="blog" />
</a>
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
<div class="content">
<span class="date_tm"><i class="fi-rr-calendar"></i> <time
class="date published" datetime="2023-01-03T10:01:11+00:00">Jan
3, 2023</time></span>
<div class="d-flex authour align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/gavatar.png" class="img-fluid"  alt="gavatar" />
Jason P Laforce</div>
<h4 class="title_22">
<a
href="blog-details.html">Insurance
covers risk of fire absence</a></h4>
<div class="bottm_contet d-flex align-items-center">
<a href="blog-details.html"
class="theme_btn">Read More <svg width="12" height="12"
viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#fff"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a></div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
<div class="blog_box type_two type_three type_five color_two trans hover_1_get">
<div class="blog_inner trans">
<div class="image_box trans hover_1">
<a
href="blog-details.html">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/blog/blog-7-min.png" class="img-fluid"  alt="blog" />
</a>
<div class="oh ho_1"></div>
<div class="oh ho_2"></div>
<div class="oh ho_3"></div>
<div class="oh ho_4"></div>
</div>
<div class="content">
<span class="date_tm"><i class="fi-rr-calendar"></i> <time
class="date published" datetime="2023-01-03T09:53:03+00:00">Jan
3, 2023</time></span>
<div class="d-flex authour align-items-center">
<img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/gavatar.png" class="img-fluid"  alt="gavatar" />
Bradley R Grady</div>
<h4 class="title_22">
<a
href="blog-details.html">Erving
the interests of our clients</a></h4>
<div class="bottm_contet d-flex align-items-center">
<a href="blog-details.html"
class="theme_btn">Read More <svg width="12" height="12"
viewBox="0 0 12 12" fill="none"
xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1M11 1H3.5M11 1V8.5" stroke="#fff"
stroke-width="1.5" stroke-linecap="round"
stroke-linejoin="round"></path>
</svg>
</a></div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!---============spacing==========--->
<div class="pd_bottom_70"></div>
<!---============spacing==========--->
</section>
<!--blog-->
</div>
<!--content end-->
<!----==============content_all_warpper==============--->
</div>
<!----==============content_all_warpper end==============--->




<?php 

$this->load->view('master_content/ui_footer');

?>