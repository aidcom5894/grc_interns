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

	public function registerSA()
	{
		$this->load->model('AdministratorRegistration_Model');
		$this->AdministratorRegistration_Model->registerSuperAdmin();
	}
}

?>