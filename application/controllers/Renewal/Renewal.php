<!--
    Renewal_controller
    display for edit End date
    @input Form_ID
    @output -
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Renewal extends MainController
{

	//โชว์ลิสต์รายการที่แก้ได้
	function show_renewal()
	{
		$this->load->model('M_ttp_renewal', 'ttp');
		$id = $_SESSION["UsEmp_ID"];
       // $this->ttp->Status = 4;
        $data['arr_renew'] = $this->ttp->get_all($id)->result();
		$data['arr_schedule'] = $this->ttp->get_schedule($id)->result();
		$this->output('consent/v_renewal',$data);
	}

	//โชว์หน้าแก้ไขวัน
	function show_reform($Form_ID)
    {
		$this->load->model('M_ttp_renewal', 'ttp');
        $data['arr_comp'] = $this->ttp->get_company()->result();
        $data['arr_plan'] = $this->ttp->get_plan()->result();
        $data['arr_supervisor'] = $this->ttp->get_supervisor()->result();
        $data['arr_formfile'] = $this->ttp->get_formfile()->result();
        $data['arr_renew'] = $this->ttp->get_bydate($Form_ID)->result();
        $this->output('consent/v_renew_form', $data);
    
	}

	//อัพเดทวันลงดาต้าเบส
	function update_date()
	{
		
		$this->load->model('Da_ttp_renewal', 'ttp');    
		$Form_ID = $this->input->post('Form_ID');
		$set_date = $this->input->post('set_Enddate');
		$add_date = $this->input->post('Add_date');
		//บวกวันที่ 
		$date1 = str_replace('-', '/', $set_date);
		$Update = date('Y-m-d',strtotime($date1 . "+".$add_date." days"));
		$this->ttp->End_date = $Update;
		$this->ttp->Form_ID = $Form_ID;
		$num =$this->input->post('Form_count');
		$status = $this->input->post('Status');
		 $num=$num+1;
		 $status = 1;
		// $this->ttp->Emp_ID;
	
		$this->ttp->Form_count=$num;
		$this->ttp->Status=$status;
		$this->ttp->update_form();
		$this->ttp->update_status();
		$this->ttp->update();
		
		
		$new_startdate=$this->ttp->End_date;
		$this->ttp->Start_date=$set_date;
		$this->ttp->End_date=$new_startdate;
		$this->ttp->Form_ID=$Form_ID;
		$this->ttp->insert_schedule();
		//$this->ttp->update_sec();
		redirect('/Renewal/Renewal/show_renewal');
	
		

		
	}

	
}
// 