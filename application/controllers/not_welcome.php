<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class not_welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('not_welcome_message');
	}
}
