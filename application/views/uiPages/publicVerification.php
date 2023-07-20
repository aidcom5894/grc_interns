<?php 

$this->load->view('master_content/ui_header');
$this->load->view('master_content/ui_navbar');

?>

<?php 

$fetchIndividualIntern = $this->db->query("SELECT * FROM interns WHERE interns_id='{$_SESSION['singleIntern']}'");

$row = $fetchIndividualIntern->row();

if(isset($row)) { ?>

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
<h2 class="title"><?php echo $row->intern_name; ?></h2>
</div>
<p style="text-align: justify;"> This verification is for <span style="font-weight: bold;"><?php echo $row->intern_name; ?></span> who is presently pursuing <span style="font-weight: bold;"><?php echo $row->department; ?></span> from <span style="font-weight: bold;"><?php echo $row->institute_name; ?>.</span> This intern joined AIDCOM from <span style="font-weight: bold;"><?php echo $row->starting_date; ?></span> and completed the internship by <span style="font-weight: bold;"><?php echo $row->ending_date; ?></span>. The internship tenure was for <span style="font-weight: bold;"><?php echo $row->internship_duration; ?></span> and the intern was trained on <span style="font-weight: bold;"><?php echo $row->training_platform; ?></span> under the mentorship of <span style="font-weight: bold;"><?php echo $row->sme_name; ?></span> against the internship ID: <span style="font-weight: bold;"><?php echo $row->interns_id; ?></span>. </p>
</div>

<div class="newsteller_simple">
<div class="input_group">


</div>
</div>
<div class="review_box d-flex align-items-center">
<div class="rimage">
<img src="<?php echo $row->intern_avatar; ?>" class="img-fluid" alt="img" />
</div>
<div class="section_title type_one">
<div class="title_whole">
<h2 class="title"> Intern ID: <code><?php echo $row->interns_id; ?></code></h2>
</div>

<?php 

$getInternsCount = $this->db->query("SELECT * FROM interns");

?>
<p><small><?php echo $row->institute_name; ?></small></p>

</div>
</div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-6">
<div class="image">
<img src="<?php echo $row->intern_avatar; ?>" class="img-fluid" alt="img" />
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


<?php } ?>









<?php 

$this->load->view('master_content/ui_footer');

?>