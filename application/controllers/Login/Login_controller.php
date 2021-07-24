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
    
	public function show_user_home(){
		$this->output("main/v_main");
		

	}
    public function login()
	{//login for admin
		$User_login = $this->input->POST('User_login');
		$Pass_login = $this->input->POST('Pass_login');
		
		$this->load->model('M_ttp_login','mlog');

		$userlogin = $this->mlog->check_login($User_login,$Pass_login)->result();

		if(count($userlogin)==1){
			$Enp_ID = $this->input->POST('Enp_ID');
			$_SESSION['user_login'] = $this->input->post('Enp_ID');
			echo true;
		}else{
			echo false;
		}
	}
        public function logout()
    {//logout to admin login page
        $this->session->sess_destroy();
        redirect('Login/Login_controller/show_user_login');
    }//end logout
	}//end login
