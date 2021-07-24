
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Report_controller extends MainController
{

	function show_report($Enp_ID)
	{
		$this->load->model('M_ttp_Emp','meng');
		$this->meng->Emp_ID = $Enp_ID;
		$data['Emp_ID'] = $this->meng->get_emp()->row();
		$temp = $data['Emp_ID'];
		$this->session->set_userdata('UsEmp_ID', $temp->Emp_ID);
		$this->session->set_userdata('UsName_EN', $temp->Empname_eng." ".$temp->Empsurname_eng);
		$this->session->set_userdata('UsName_TH', $temp->Empname_th." ".$temp->Empsurname_th);
		$this->session->set_userdata('UsDepartment', $temp->Department);
		$this->load->model('M_ttp_report', 'ttp');
        $data['obj_department'] = $this->ttp->get_department()->result();
		$data['requested'] = $this->ttp->get_all_requested_form()->result();
		$data['approval'] = $this->ttp->get_all_approval()->result();
        $this->output('consent/v_report', $data);
	}

}
