
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Report_controller extends MainController
{

	function show_report()
	{
		$this->load->model('M_ttp_report', 'ttp');
        $data['obj_department'] = $this->ttp->get_department()->result();
		$data['requested'] = $this->ttp->get_all_requested_form()->result();
		$data['approval'] = $this->ttp->get_all_approval()->result();
        $this->output('consent/v_report', $data);
	}

}
