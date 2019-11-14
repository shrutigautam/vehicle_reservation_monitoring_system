<?php 

class Model_userdashboard extends CI_Model
{
	public function book_parking($date,$time_from,$time_to,$parking_name,$amount,$name,$card_name,$card_no,$expire_date,$cvv)
	{
			$data=array('date'=>$date,'time_from'=>$time_from,'time_to'=>$time_to,'parking'=>$parking_name,'amount'=>$amount,'name'=>$name,'card_name'=>$card_name,'card_no'=>$card_no,'expire_date'=>$expire_date,'cvv'=>$cvv);

			$this->db->insert('book_parking',$data);
			$insertId = $this->db->insert_id();
			return $insertId;
	}

}
