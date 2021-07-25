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
        $this->output_login("login/v_user_login");
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
		//$this->meng->User_Role = $Enp_ID;
		//$data['User_Role'] = $this->meng->get_role()->row();
		//$tempRole = $data['User_Role'];
		$this->session->set_userdata('Usrole', $temp->User_Role);
		$this->main();

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
			echo json_encode($data);
			
		}else{
			$data = [];
			echo json_encode($data);
		}
	}
	public function main()
    {
        if (!empty($this->session->userdata('UsEmp_ID'))) {
			if($_SESSION['Usrole']==1){
            	redirect('Main/Main_controller/show_main', 'refresh');
			}else if($_SESSION['Usrole']==2){
				//redirect('Main/Main_controller/show_main', 'refresh');
			}else if($_SESSION['Usrole']==3){
				//redirect('Main/Main_controller/show_main', 'refresh');
			}else if($_SESSION['Usrole']==4){
				//
			}
        }
        // if
        else {
            redirect('Login/Login_controller/show_user_login', 'refresh');
        }
        // else
    }
    // public function main

    public function logout()
    {
        $this->session->unset_userdata('UsEmp_ID');
        $this->session->unset_userdata('UsName_EN');
        $this->session->unset_userdata('UsName_TH');
        $this->session->unset_userdata('UsDepartment');
        redirect('Login/Login_controller/show_user_login', 'refresh');
    }
	}//end login