<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class UI_Controllers extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function loadAdminSignup()
	{
		$this->load->view('onboarding/administrator/administrator_signup');
	}

	public function loadLoginPage()
	{
		$this->load->view('onboarding/administrator/administrator_login');
	}

	public function internsLogin()
	{
		$this->load->view('interns/interns_onboarding');
	}

	public function verifyInternsProfile()
	{
		$this->load->view('uiPages/publicVerification');
	}
	
}


?>