<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller 
{

	public function book_parking()
	{
		$date=$this->input->post("booking_date");
		$time_from=$this->input->post("booking(from)");
		$time_to=$this->input->post("booking(to)");
		$parking_name=$this->input->post("parking_name");
		
		$amount=$this->input->post("amount");
		$name=$this->input->post("name");
		$card_name=$this->input->post("card_name");
		$card_no=$this->input->post("card_no");
		$expire_date=$this->input->post("exp_date");
		$cvv=$this->input->post("cvv");
		$this->load->model('Model_userdashboard');
		$data=$this->Model_userdashboard->book_parking($date,$time_from,$time_to,$parking_name,$amount,$name,$card_name,$card_no,$expire_date,$cvv);
		// echo $data;
		echo "successfully booked";
	}
}