<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");
class Login_controller extends MainController
{
    public function __construct()
	{
		parent::__construct();
		$this->load->library('excel');
		date_default_timezone_set('Asia/Bangkok');
	}//function construct
    public function show_user_login()
    {//show login
        $this->load->view("login/v_user_login");
    }//end show_admin_login
    
	public function show_user_home($Enp_ID){
		$this->load->model('M_ttp_Emp','meng');
		$this->meng->Emp_ID = $Enp_ID;
		$data['Emp_ID'] = $this->meng->get_emp()->row();
		$temp = $data['Emp_ID'];
			$this->session->set_userdata('UsEmp_ID', $temp->Emp_ID);
            $this->session->set_userdata('UsName_EN', $temp->Empname_eng." ".$temp->Empsurname_eng);
            $this->session->set_userdata('UsName_TH', $temp->Empname_th." ".$temp->Empsurname_th);
            $this->session->set_userdata('UsDepartment', $temp->Department);
		$this->output("main/v_main");

	}
    public function login()
	{//login for admin
		$User_login = $this->input->POST('User_login');
		$Pass_login = $this->input->POST('Pass_login');
		
		$this->load->model('M_ttp_login','mlog');

		$userlogin = $this->mlog->check_login($User_login,$Pass_login)->row();
		// print_r($userlogin);
		if(count($userlogin)==1){
			// $result = implode($userlogin);
			$data = $userlogin;
			$status = true ;
			echo json_encode($data,$status);
		}else{
			$status = false ;
			echo json_encode($status);
		}
	}
        public function logout()
    {//logout to admin login page
        $this->session->sess_destroy();
        redirect('Login/Login_controller/show_user_login');
    }//end logout
	}//end login

