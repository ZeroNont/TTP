
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Renewal_controller extends MainController
{

	
	function show_renewal()
	{
		$this->load->model('M_renewal', 'ttp');
        $data['arr_renew'] = $this->ttp->get_all()->result();
		$this->output('renewal/v_renewal',$data);
	}
	// function index()

	function show_reform($Form_ID)
    {
		$this->load->model('M_renewal', 'ttp');
        $data['arr_comp'] = $this->ttp->get_company()->result();
        $data['arr_plan'] = $this->ttp->get_plan()->result();
        $data['arr_supervisor'] = $this->ttp->get_supervisor()->result();
        $data['arr_formfile'] = $this->ttp->get_formfile()->result();
        $data['arr_renew'] = $this->ttp->get_bydate($Form_ID)->result();
        $this->output('renewal/v_renew_form', $data);
    
	} //show_table

	function update_date()
	{
		
		$this->load->model('Da_renewal', 'ttp');

		date_add($End_date,('Add_date'));
		$this->ttp->End_date = $this->input->post('End_date');
		$this->ttp->update();
		redirect('/Renewal/Renewal_controller/show_renewal');

		
	}
}
// 