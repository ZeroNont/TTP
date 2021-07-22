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
		$sql="SELECT*FROM user_login 
			WHERE User_login='$User_login' 
			AND Pass_login = '$Pass_login'
			";

		$query = $this->db->query($sql);
        return $query;
	}//end check_login

}