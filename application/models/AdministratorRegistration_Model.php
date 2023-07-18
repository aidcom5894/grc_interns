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
		// $superAdmin = $_POST['adminName'];
		// $email = $_POST['adminEmail'];
		// $password = $_POST['adminPassword'];
		// $contact = "To be updated";
		// $adminLoginId = "SME/".random_string('alnum',6);
		// $profileRange = array("avatar1.png","avatar2.png","avatar3.png","avatar4.png","avatar5.png","avatar6.png","avatar7.png","avatar8.png","avatar9.png","avatar10.png","avatar11.png");
		// $adminAvatar = base_url()."modules/profile/".array_rand($profileRange,1);
		// $adminRole = "Super Admin";

		// $checkEmail = $this->db->query("SELECT admin_email FROM administrator WHERE admin_email='$email'");

		// if(isset($_POST['enrollSuperAdmin']))
		// {
		// 	if($checkEmail->num_rows()>0)
		// 	{
		// 		echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

		// 		echo '<script type="text/javascript">';
		// 		echo 'setTimeout(function () { swal("Duplicate Email","Admin with same email already exist. Please login with your Credentials","error");';
		// 		echo '}, 100);</script>';

		// 		$this->load->view('onboarding/administrator/administrator_login');
		// 	}
		// 	else
		// 	{
		// 		$adminDetails = array(
		// 			'admin_name' => $superAdmin,
		// 			'admin_email' => $email,
		// 			'admin_contact' => $contact,
		// 			'admin_loginID' => $adminLoginId,
		// 			'admin_avatar' => $adminAvatar,
		// 			'admin_role' => $adminRole);
		// 		$this->db->insert('administrator',$adminDetails);

		// 		echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

		// 		echo '<script type="text/javascript">';
		// 		echo 'setTimeout(function () { swal("Registration Successful","New Admin with authorised access Registered.","success");';
		// 		echo '}, 100);</script>';

		// 		$this->load->view('onboarding/administrator/administrator_login');				
		// 	}
		// }

		echo "hi";
	}
}

?>