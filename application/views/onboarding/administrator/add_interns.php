<?php 

$this->load->view('master_content/admin_dash_header');
$this->load->view('master_content/admin_dash_sidebar');
$this->load->view('master_content/admin_dash_navbar');

?>


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
<h4 class="mb-0">Add New Interns</h4>

<div class="page-title-right">
<ol class="breadcrumb m-0">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">New Interns</li>
</ol>
</div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header justify-content-between d-flex align-items-center">
<h4 class="card-title">Enter Intern Details</h4>

</div><!-- end card header -->
<div class="card-body">
<div class="row">
<div class="col-xl-6">

<form method="POST" action="<?php echo base_url('intern_registration'); ?>">
<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Name:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="" id="example-text-input" name="internName">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Institute Name:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="" id="example-text-input" name="instituteName">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Department:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="" id="example-text-input" name="collegeDepartment">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Duration:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="" id="example-text-input" name="internshipDuration">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Int. Platfom:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="" id="example-text-input" name="internshipPlatform">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Starting Date:</label>
<div class="col-md-10">
<input class="form-control" type="date" value="" id="example-text-input" name="startingDate">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Ending Date:</label>
<div class="col-md-10">
<input class="form-control" type="date" value="" id="example-text-input" name="endingDate">
</div>
</div><!-- end row -->


<div class="mb-3 row">
<label for="example-text-input" class="col-md-2 col-form-label">Date of Birth:</label>
<div class="col-md-10">
<input class="form-control" type="date" value="" id="example-text-input" name="dateOfBirth">
</div>
</div><!-- end row -->
</div><!-- end col -->



<div class="col-xl-6">
<div class="row mb-3 mt-3 mt-xl-0">
<label for="example-date-input" class="col-md-2 col-form-label">Intern ID:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="<?php echo "INT-".date('my')."-".strtoupper(random_string('alnum',6)); ?>" id="example-date-input" readonly="" name="loginID">
</div>
</div><!-- end row -->

<div class="row mb-3">
<label for="example-month-input" class="col-md-2 col-form-label">Password:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="<?php echo random_string('alpha',6); ?>" id="example-month-input" readonly="" name="loginPassword">
</div>
</div><!-- end row -->
<div class="row mb-3">
<label for="example-week-input" class="col-md-2 col-form-label">Email:</label>
<div class="col-md-10">
<input class="form-control" type="" value="" id="example-week-input" name="internsEmail">
</div>
</div><!-- end row -->
<div class="row mb-3">
<label for="example-time-input" class="col-md-2 col-form-label">Contact:</label>
<div class="col-md-10">
<input class="form-control" type="number" value="" id="example-time-input" name="internsContact">
</div>
</div><!-- end row -->


<div class="row mb-3">
<label class="col-md-2 col-form-label">College Year:</label>
<div class="col-md-10">
<select class="form-select" name="collegeYear">
<option>--- Select ---</option>
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
</select>
</div>
</div><!-- end row -->


<?php 

$fetchSMEname = $this->db->query("SELECT admin_name FROM administrator WHERE admin_loginID='{$_SESSION['adminName']}'");

$row = $fetchSMEname->row();

if(isset($row)) { ?>
<div class="row mb-3 mt-3 mt-xl-0">
<label for="example-date-input" class="col-md-2 col-form-label">SME:</label>
<div class="col-md-10">
<input class="form-control" type="text" value="<?php echo $row->admin_name; ?>" id="example-date-input" readonly="" name="smeName">
</div>
</div><!-- end row -->
<?php } ?>


<div class="mt-4">
<button type="submit" class="btn btn-primary w-md form-control" name="internsRegistration">Submit</button>
</div>


</div><!-- end col -->
</div><!-- end row -->
</form>



</div><!-- end card body -->
</div><!-- end card -->
</div><!-- end col -->
</div><!-- end row -->


<!-- Start Form Sizing -->




</div> <!-- container-fluid -->
</div><!-- End Page-content -->











<?php 

$this->load->view('master_content/admin_dash_footer');

?>