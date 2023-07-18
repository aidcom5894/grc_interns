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

				$this->load->view('onboarding/administrator/administrator_dashboard');
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


}

?>