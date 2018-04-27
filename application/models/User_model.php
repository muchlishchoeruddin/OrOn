<?php 

/**
* 
*/
class User_model extends CI_Model
{
	function tampildata(){
		$query = $this->db->get("user");
		return $query;
	}
}

 ?>