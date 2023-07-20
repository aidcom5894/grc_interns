<?php 

defined('BASEPATH') OR exit('no direct script access allowed');

/**
 * 
 */
class InternOnboarding_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function internsLogin()
	{
		if(isset($_POST['internsLogin']))
		{
			$internsID = $_POST['internsLoginID'];
			$internsEmail = $_POST['internsLoginEmail'];
			$internsPassword = $_POST['internsPassword'];

			$checkDetails = $this->db->query("SELECT interns_id,intern_email,interns_password FROM interns WHERE interns_id='$internsID' AND intern_email='$internsEmail' AND interns_password='$internsPassword'");

			if($checkDetails->num_rows()>0)
			{
				$_SESSION['internName'] = $internsID;
				
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Intern Authorised","Interns authorised successfully. You can now access your Dashboard.","success");';
				echo '}, 100);</script>';

				$this->load->view('dashboard/interns/internsDashboard');
			}


			else
				
			{
				echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

				echo '<script type="text/javascript">';
				echo 'setTimeout(function () { swal("Authorisation Failed!","No Interns Registered with the provided Credentials. Please provide Correct Credentials.","error");';
				echo '}, 100);</script>';

				$this->load->view('dashboard/interns/interns_login');
			}
		}
	}
}

?>