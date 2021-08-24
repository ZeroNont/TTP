<?php
/*
* MainCcontroller
* @input  -
* @output -
* @author Jiratyut Saifah
* @Update Date 2563-09-1
*/

defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('excel');
		date_default_timezone_set('Asia/Bangkok');
	}

	public function header()
	{
		$this->load->view('includes/template/header');
	}

	public function javascript()
	{
		$this->load->view('includes/template/javascript');
	}

	public function footer()
	{
		$this->load->view('includes/template/footer');
	}

	public function topbar()
	{
		$this->load->view('includes/template/topbar');
	}

	public function sidebar()
	{
		if($_SESSION["Usrole"]==1){
			$this->load->model('M_ttp_request', 'mreq');
			$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
			$this->mreq->req_status = 1;
			$data['arr_req'] = sizeof( $this->mreq->get_all_sup()->result() );
			$this->load->view('includes/template/sidebar',$data);
		}else if($_SESSION["Usrole"]==2){
			$this->load->model('M_ttp_request', 'mreq');
			$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
			$this->mreq->req_status = 1;
			$data['arr_req_supervisor'] = sizeof( $this->mreq->get_all_sup()->result() );
			$this->load->view('includes/template/sidebar',$data);
		}else if($_SESSION["Usrole"]==3){
			$this->load->model('M_ttp_approve_form', 'mreq');
			$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
			$this->mreq->req_status = 2;
			$data['arr_req_hr'] = sizeof( $this->mreq->get_all_hr()->result() );
			$this->load->view('includes/template/sidebar',$data);
		}else if($_SESSION["Usrole"]==4){
			$this->load->model('M_ttp_approve_form', 'mreq');
			$this->mreq->app_supervisor_id = $_SESSION["UsEmp_ID"];
			$this->mreq->req_status = 3;
			$data['arr_req_plant'] = sizeof( $this->mreq->get_all_plant()->result() );
			$this->load->view('includes/template/sidebar',$data);
		}
		else{
			$this->load->view('includes/template/sidebar');
		}
	
	
	}

	public function output($body, $data = '')
	{
		$this->header();
		$this->sidebar($data);
		$this->topbar();
		$this->load->view($body, $data);
		$this->javascript();
		$this->footer();
	}public function output_login($body, $data = '')
	{
		
		$this->header();
		$this->load->view($body, $data);
		$this->javascript();
		$this->footer();
	}

}
?>