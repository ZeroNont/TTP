<?php
/*
* Ttps_Controller
* Form Management
* @input  -   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-16
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class licence_input extends MainController
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /*
	* index
	* 
	* @input 
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-16
	*/
    function index()
    {
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_company'] = $this->ttp->get_company()->result();
        $data['obj_plan'] = $this->ttp->get_plan()->result();
        $data['obj_emp'] = $this->ttp->get_employee($id)->result();
        $data['obj_level'] = $this->ttp->get_position_id($id)->result();
        $data['obj_supervisor'] = $this->ttp->get_supervisor()->result();
        // print_r($data['obj_supervisor']);
        $this->output('consent/v_licence_form', $data);
    }
    function edit_form($id)
    {
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_form'] = $this->ttp->get_form_by_id($id)->result();
        $data['obj_file'] = $this->ttp->get_file_by_id($id)->result();
        $data['obj_company'] = $this->ttp->get_company()->result();
        $data['obj_plan'] = $this->ttp->get_plan()->result();
        $data['obj_supervisor'] = $this->ttp->get_supervisor()->result();
        $this->output('consent/v_form_edit', $data);
    }
    // function index()
    function insert()
    {
        $date = date("Y-m-d");
        
        $j = 1;
        $id = strtotime('now');
        $Layout_name =  $_FILES['Layout']['name'];
        $tmp_Layout =  $_FILES['Layout']['tmp_name'];
        $Plan_name =  $_FILES['Plan']['name'];
        $tmp_Plan =  $_FILES['Plan']['tmp_name'];

        $this->load->model('Da_ttp_licence', 'ttp');
        $this->ttp->Emp_ID = $this->input->post('Emp_ID');
        $i = $this->input->post('Emp_ID');
        $this->ttp->Item = $this->input->post('Item');
        $this->ttp->Start_date = $this->input->post('Start_date');
        $this->ttp->End_date = $this->input->post('End_date');
        $this->ttp->Requested_date = $date;
        $this->ttp->Reason = $this->input->post('Reason');
        $this->ttp->Officer = $this->input->post('Officer');
        $this->ttp->Tell = $this->input->post('Tell');
        $this->ttp->Supervisor_ID = $this->input->post('Supervisor');
        $this->ttp->Company_ID = $this->input->post('Company_ID');
        $this->ttp->Approve_Plant_ID = $this->input->post('Approve_Plant');
        $this->ttp->Form_count = $j;
        // echo $this->input->post('Emp_ID');
        // echo $this->input->post('Item');
        $this->ttp->insert_form();
        $this->ttp->insert_approve();
        move_uploaded_file($tmp_Layout, 'assets/file/Layout/' . $Layout_name);
        $this->ttp->Layout_location = $Layout_name;
        move_uploaded_file($tmp_Plan, 'assets/file/Plan/' . $Plan_name);
        $this->ttp->Plan_location = $Plan_name;
        $this->ttp->insert_file();
        $this->output('consent/v_licence_form', $i);
        // $this->output('consent/v_check_status', $i);
        // redirect('licence_form/licence_input/index');
    }
    // function index()

}
// 