<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends Admin_Controller 
{
	public function index()
	{
		$this->load->view("vehicle");
	}
}
?>