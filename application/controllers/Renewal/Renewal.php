<!--
	/*
    * Renewal_controller
    * display for edit End date
    * @input Form_ID
    * @output -
    * @author Nattakorn
    * Create date 2564-07-19
    * Update date 2564-07-27
	/*
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Renewal extends MainController
{

	/*
	* show_renewal
	* show list of request form
	* @input -
	* @output list of request form
	* @author 	Nattakorn
	* @Create Date 2564-7-19
	*/
	function show_renewal()
	{
		$this->load->model('M_ttp_renewal', 'ttp');
		$id = $_SESSION["UsEmp_ID"];
		// $this->ttp->Status = 4;
		$data['arr_renew'] = $this->ttp->get_all($id)->result();
		$data['arr_sec'] = $this->ttp->get_schedule($id)->result();
		$data['arr_supervisor'] = $this->ttp->get_supervisor()->result();
		$this->output('consent/v_renewal', $data);
	}

	/*
	* show_reform
	* show page of edit renew date
	* @input Add_date
	* @output End_date update
	* @author 	Nattakorn
	* @Create Date 2564-7-19
	*/
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

	/*
	* update_date
	* change date from database
	* @input Add_date
	* @output End_date update
	* @author 	Nattakorn
	* @Create Date 2564-7-19
	*/
	function update_date()
	{

		$this->load->model('Da_ttp_renewal', 'ttp');
		$Form_ID = $this->input->post('Form_ID');
		//	$set_date = $this->input->post('datefilter');
		$new_startdate = $this->input->post('set_Enddate');
		//	echo $set_date;
		$date = $this->input->post('datefilter');
		if ($date == "") {
			$date1 = $this->input->post('Start_date');
			$date2 =   $this->input->post('End_date');
			$start_date = date("Y-m-d", strtotime($date1));
			$end_date = date("Y-m-d", strtotime($date2));

			echo $start_date . "____" . $end_date . "____1";
		} else {
			$start_date = substr($date, 0, 10);
			$start_date = date("Y-m-d", strtotime($start_date));
			$end_date = substr($date, 12, 21);
			$end_date = date("Y-m-d", strtotime($end_date));
			echo $start_date . "____" . $end_date . "____2";
		}

		//$add_date = $this->input->post('Add_date');
		//บวกวันที่ 
		//$date1 = str_replace('-', '/', $set_date);
		//$Update = date('Y-m-d',strtotime($date1 . "+".$add_date." days"));
		$this->ttp->req_end_date = $end_date;
		$this->ttp->req_form_id = $Form_ID;
		$num = $this->input->post('Form_count');
		$status = $this->input->post('Status');
		$num = $num + 1;
		$status = 1;
		// $this->ttp->Emp_ID;

		$this->ttp->req_form_count = $num;
		$this->ttp->req_status = $status;
		$this->ttp->update_form(); //+1ให้กับฟอร์มที่ID ตรงกัน
		$this->ttp->update_status(); //ขอวันเสร็จเปลี่ยนสถานะ
		$this->ttp->update(); //อัพเดทวันที่

		//เก็บประวัติการต่ออายุในแต่ละครั้ง

		$this->ttp->sch_start_date = $new_startdate;
		$this->ttp->sch_end_date = $end_date;
		$this->ttp->sch_form_id = $Form_ID;
		$this->ttp->insert_schedule();
		//$this->ttp->update_sec();
		redirect('/Check_status/Check_status/home');
	}
}
// 