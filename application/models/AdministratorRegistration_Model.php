<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class AdministratorRegistration_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function registerSuperAdmin()
	{
		

		if(isset($_POST['enrollSuperAdmin']))
		{
			$superAdmin = $_POST['adminName'];
			$email = $_POST['adminEmail'];
			$password = $_POST['adminPassword'];
			$contact = "To be updated";
			$adminLoginId = "SME/".strtoupper(random_string('alnum',6));
			$profileRange = array("avatar1.png","avatar2.png","avatar3.png","avatar4.png","avatar5.png","avatar6.png","avatar7.png","avatar8.png","avatar9.png","avatar10.png","avatar11.png");
			$adminAvatar = base_url()."modules/profile/".$profileRange[array_rand($profileRange,1)];
			$adminRole = "Super Admin";

			$checkEmail = $this->db->query("SELECT admin_email FROM administrator WHERE admin_email='$email'");
		
			if($checkEmail->num_rows()>0)
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Duplicate Email","Admin with same email already exist. Please login with your Credentials","error");';
				echo '}, 100);</script>';

				$this->load->view('onboarding/administrator/administrator_login');
			}
			else
			{
				$adminDetails = array(
					'admin_name' => $superAdmin,
					'admin_email' => $email,
					'admin_contact' => $contact,
					'admin_loginID' => $adminLoginId,
					'admin_password' => md5($password),
					'admin_avatar' => $adminAvatar,
					'admin_role' => $adminRole);
				$this->db->insert('administrator',$adminDetails);

				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Registration Successful","New Admin registered with ID: '.$adminLoginId.'. Please login with same login ID for Accessing Dashboard. Credentials once lost cannot be retreived.","success");';
				echo '}, 100);</script>';

				$this->load->view('onboarding/administrator/administrator_login');				
			}
		}
		
	}

	public function loginSA()
	{
		if(isset($_POST['AdminLogin']))
		{
			$adminID = $_POST['adminLoginID'];
			$adminEmail = $_POST['adminLoginEmail'];
			$adminPassword = md5($_POST['adminPassword']);

			$checkEntry = $this->db->query("SELECT admin_loginID,admin_email,admin_password FROM administrator WHERE admin_loginID='$adminID' AND admin_email='$adminEmail' AND admin_password= '$adminPassword' ");

			if($checkEntry->num_rows()>0)
			{
				$_SESSION['adminName'] = $adminID;
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Login Successful","Login successful Redirecting to Dashboard","success");';
				echo '}, 100);</script>';
				
				redirect(base_url('admin_dashboard'));
			}
			else
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Login Failed","No Authorised Admin Found","error");';
				echo '}, 100);</script>';
				$this->load->view('onboarding/administrator/administrator_login');
			}
		}
	}


	public function adminLogout()
	{

		

		echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Admin Logged Out","Admin logout successful.","success");';
				echo '}, 100);</script>';
				session_destroy();
		unset($_SESSION['adminName']);

		$this->load->view('onboarding/administrator/administrator_login');
	}


	public function enrollInterns()
	{
		if(isset($_POST['internsRegistration']))
		{
			$internName = $_POST['internName'];
			$instituteName = $_POST['instituteName'];
			$departmentName = $_POST['collegeDepartment'];
			$internshipTenure  = $_POST['internshipDuration'];
			$technologyLearned = $_POST['internshipPlatform'];
			$startDate = $_POST['startingDate'];
			$endingDate = $_POST['endingDate'];
			$internsBirthday = $_POST['dateOfBirth'];

			$internLoginId = $_POST['loginID'];

			$internsPassword = $_POST['loginPassword'];

			$internEmail = $_POST['internsEmail'];

			$internsContact = $_POST['internsContact'];

			$collegeYear = $_POST['collegeYear'];

			$mentorName = $_POST['smeName'];

			$checkInternsEmail = $this->db->query("SELECT intern_email FROM interns WHERE intern_email='$internEmail'");

			$checkInternsContact = $this->db->query("SELECT intern_contact FROM interns WHERE intern_contact='$internsContact'");

			if($checkInternsEmail->num_rows()>0)
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Duplicate Email Found","Intern Email Already Found.","error");';
				echo '}, 100);</script>';

				$this->load->view('onboarding/administrator/add_interns');
			}
			else if($checkInternsContact->num_rows()>0)
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Duplicate Contact Found","Intern Contacts Already Found.","error");';
				echo '}, 100);</script>';

				$this->load->view('onboarding/administrator/add_interns');
			}

			else
			{
				
				$internsDetails = array(

				'intern_name' => $internName,
				'institute_name' => $instituteName,
				'department' => $departmentName,
				'internship_duration' => $internshipTenure,
				'training_platform' => $technologyLearned,
				'starting_date' => $startDate,
				'ending_date' => $endingDate,
				'interns_dob' => $internsBirthday,
				'interns_id' => $internLoginId,
				'interns_password' => $internsPassword,
				'intern_email' => $internEmail,
				'intern_contact' => $internsContact,
				'intern_avatar' => "",
				'college_year' => $collegeYear,
				'sme_name' => $mentorName);

				$this->db->insert('interns',$internsDetails);

				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Registration Successful","Intern successfully registered with AIDCOM iT Solutions with Login ID: '.$internLoginId.' and Password: '.$internsPassword.' ","success");';
				echo '}, 100);</script>';

				$this->load->view('onboarding/administrator/add_interns');

			}
	
		}
	}


	public function verifyInternPublically()
	{
		if(isset($_POST['verifyInterns']))
		{
			$fetchInput = $_POST['internIDdata'];

			$checkInternAuthenticity = $this->db->query("SELECT * FROM interns WHERE interns_id='$fetchInput'");

			if($checkInternAuthenticity->num_rows()>0)
			{
				$_SESSION['singleIntern'] = $fetchInput;

				$this->load->view('uiPages/publicVerification');

				session_destroy();
				
				unset($_SESSION['singleIntern']);
			}
			else
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("No Intern Found!","The Intern\'s ID entered by you does not exist. Either this intern was not enrolled with us or the Details Entered By You needs Attention. Please provide Correct ID to fetch Interns\'s Details ","error");';
				echo '}, 100);</script>';
				$this->load->view('welcome_message');
			}
		}

	}

	

}

?>