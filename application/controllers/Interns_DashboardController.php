<?php 

defined('BASEPATH') OR exit ('no direct script access allowed');

/**
 * 
 */
class Interns_DashboardController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function showinternsProfile()
	{
		$this->load->view('interns/interns_profile');
	}
}


?>