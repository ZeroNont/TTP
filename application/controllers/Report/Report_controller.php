
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Report_controller extends MainController
{

	function show_report()
	{
		$this->load->model('M_ttp_report', 'ttp');
		$data['requested'] = $this->ttp->get_all_requested_form()->result();
        $this->output('consent/v_report', $data);
	}

	function get_report()
	{
		$this->load->model('M_ttp_report', 'ttp');
		$data = $this->ttp->get_department_to_chart()->result();
		echo json_encode($data);
	}

	public function show_report_detail()
	{
		$Form_ID = $this->input->get('Form_ID');
		$this->load->model('M_ttp_report', 'ttp');
		$this->ttp->Form_ID = $Form_ID;
		$data['Form_data'] = $this->ttp->get_form_by_id()->row();
		$this->output('consent/v_report_detail', $data);
	}

}
