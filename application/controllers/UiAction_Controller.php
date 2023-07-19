<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class UiAction_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function adminDashboard()
	{
		$this->load->view('onboarding/administrator/administrator_dashboard');
	}

	public function loadAdminProfile()
	{
		$this->load->view('onboarding/administrator/administrator_profileView');
	}

	public function profileSettingPage()
	{
		$this->load->view('onboarding/administrator/administrator_profile_settings');
	}

	public function registerSA()
	{
		$this->load->model('AdministratorRegistration_Model');
		$this->AdministratorRegistration_Model->registerSuperAdmin();
	}

	public function adminLoginCheck()
	{
		$this->load->model('AdministratorRegistration_Model');
		$this->AdministratorRegistration_Model->loginSA();
	}

	public function saLogout()
	{
		$this->load->model('AdministratorRegistration_Model');
		$this->AdministratorRegistration_Model->adminLogout();
	}
}

?>