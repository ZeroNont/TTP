<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once("Da_ttp_login.php");


class M_ttp_login extends Da_ttp_login {

	public function __construct()
	{
		parent::__construct();
	}
	public function check_login($User_login,$Pass_login)
	{//check username and password in database
		$sql="SELECT CONCAT(emp.Empname_eng,' ',emp.Empsurname_eng) 
			FROM ttps_database.user_login AS ulog 
			INNER JOIN dbmc.employee AS emp 
			ON ulog.Enp_ID = emp.Emp_ID
			WHERE User_login='$User_login' 
			AND Pass_login = '$Pass_login'
			";

		$query = $this->db->query($sql);
        return $query;
	}//end check_login
	
}