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

	public function addInterns()
	{
		$this->load->view('onboarding/administrator/add_interns');
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

	public function registerInterns()
	{
		$this->load->model('AdministratorRegistration_Model');
		$this->AdministratorRegistration_Model->enrollInterns();
	}

	public function internsLoginAction()
	{
		$this->load->model('InternOnboarding_Model');
		$this->InternOnboarding_Model->internsLogin();
	}
}

?>