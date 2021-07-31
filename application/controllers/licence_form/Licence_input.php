<?php
/*
* Licence_input
* Form Management
* @input  Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-16
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Licence_input extends MainController
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
	* Show a form to get information 
	* @input 
	* @output employee,plant,company detail
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-16
	*/
    function index()
    {
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_company'] = $this->ttp->get_company()->result();
        $data['obj_plan'] = $this->ttp->get_plant()->result();
        $data['obj_emp'] = $this->ttp->get_employee($id)->result();
        $data['obj_level'] = $this->ttp->get_position_id($id)->result();
        $data['obj_supervisor'] = $this->ttp->get_supervisor()->result();
        $this->load->model('M_ttp_Employee', 'det');
        $data['detail'] = $this->det->get_emp_detail($id)->result();
        // print_r($data['obj_supervisor']);
        // print_r($data['detail']);
        // echo $data['detail'][0]->Emp_ID;
        $this->output('consent/v_licence_form', $data);
    }
    /*
	* edit_form
	* show form detail 
	* @input  Form_ID
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-22
	*/
    function edit_form($id)
    {
        // echo $id;
        $k = $_SESSION['UsEmp_ID'];
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_form'] = $this->ttp->get_form_by_id($id)->result();
        $data['obj_file'] = $this->ttp->get_file_by_id($id)->result();
        $data['obj_company'] = $this->ttp->get_company()->result();
        $data['obj_com'] = $this->ttp->get_company_by_id($id)->result();
        $data['obj_plan'] = $this->ttp->get_plant()->result();
        $data['obj_level'] = $this->ttp->get_position_id($k)->result();
        $data['obj_app'] = $this->ttp->get_plant_by_id($id)->result();
        $data['obj_supervisor'] = $this->ttp->get_supervisor()->result();

        // echo $id;
        // print_r($data['obj_file']);
        $data['obj_sup'] = $this->ttp->get_supervisor_by_id($id)->result();
        // print_r($data);
        $this->load->model('M_ttp_Employee', 'det');
        $data['detail'] = $this->det->get_emp_detail($k)->result();
        $this->output('consent/v_form_edit', $data);
    }
    /*
	* insert
	* insert form data into model
	* @input  Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-16
	*/


    function insert()
    {
        $date = date("Y-m-d");
        $status = 1;
        $j = 1;
        $id = $_SESSION['UsEmp_ID'];
        $Layout_name =  $_FILES['Layout']['name'];
        $tmp_Layout =  $_FILES['Layout']['tmp_name'];
        $Plan_name =  $_FILES['Plan']['name'];
        $tmp_Plan =  $_FILES['Plan']['tmp_name'];

        $this->load->model('Da_ttp_licence', 'ttp');
        $this->ttp->Emp_ID = $id;
        // $i = $this->input->post('Emp_ID');
        $this->ttp->Item = $this->input->post('Item');
        $this->ttp->Start_date = $this->input->post('Start_date');

        $this->ttp->Requested_date = $date;
        $this->ttp->Reason = $this->input->post('Reason');
        $this->ttp->Officer = $this->input->post('Officer');
        $this->ttp->Tell = $this->input->post('Tell');
        $this->ttp->Supervisor_ID = $this->input->post('Supervisor');
        $this->ttp->Company_ID = $this->input->post('Company_ID');
        $this->ttp->Approve_Plant_ID = $this->input->post('Approve_Plant');
        $this->ttp->Form_count = $j;
        $this->ttp->Status = $status;
        $set_date =  $this->input->post('Start_date');
        $add_date =  $this->input->post('End_date');
        //บวกวันที่ 
        $date1 = str_replace('-', '/', $set_date);
        $Update = date('Y-m-d', strtotime($date1 . "+" . $add_date . " days"));
        $this->ttp->End_date = $Update;

        $this->ttp->insert_form();
        $this->ttp->insert_approve();


        move_uploaded_file($tmp_Layout, 'assets/file/Layout/' . $Layout_name);
        $this->ttp->Layout_location = $Layout_name;
        move_uploaded_file($tmp_Plan, 'assets/file/Plan/' . $Plan_name);
        $this->ttp->Plan_location = $Plan_name;
        $this->ttp->insert_file();

        // echo  $id;
        $this->load->model('M_ttp_licence', 'get');
        $data['obj_status'] = $this->get->get_status($id)->result();
        // // print_r($_SESSION['Emp_ID']);
        $data['form'] = $this->get->get_form_id()->result();
        $form_id = $data['form'][0]->Form_ID;
        $this->ttp->Form_ID = $data['form'][0]->Form_ID;
        $this->ttp->End_date = $data['form'][0]->End_date;
        $this->ttp->Start_date = $data['form'][0]->Start_date;
        $this->ttp->insert_date($form_id);
        $this->output('consent/v_check_status', $data);
        // $this->output('consent/v_check_status', $i);
        // redirect('licence_form/licence_input/index');
    }
    /*
	* edit
	* update form data into model 
	* @input  Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-22
	*/
    function edit()
    {
        $date = date("Y-m-d");


        $id = $_SESSION['UsEmp_ID'];
        $Layout_name =  $_FILES['Layout']['name'];
        $tmp_Layout =  $_FILES['Layout']['tmp_name'];
        $Plan_name =  $_FILES['Plan']['name'];
        $tmp_Plan =  $_FILES['Plan']['tmp_name'];
        $num = 1;
        $this->load->model('Da_ttp_licence', 'ttp');
        $this->ttp->Emp_ID = $id;
        $j =   $this->input->post('count');
        $k  = $this->input->post('form');
        // $i = $this->input->post('Emp_ID');
        $this->ttp->Item = $this->input->post('Item');
        $this->ttp->Start_date = $this->input->post('Start_date');

        $this->ttp->Requested_date = $date;
        $this->ttp->Reason = $this->input->post('Reason');
        $this->ttp->Officer = $this->input->post('Officer');
        $this->ttp->Tell = $this->input->post('Tell');
        $this->ttp->Supervisor_ID = $this->input->post('Supervisor');
        $this->ttp->Company_ID = $this->input->post('Company_ID');
        $this->ttp->Approve_Plant_ID = $this->input->post('Approve_Plant');
        $this->ttp->Form_count =   $j + 1;
        $set_date =  $this->input->post('Start_date');
        $add_date =  $this->input->post('End_date');
        //บวกวันที่ 
        $date1 = str_replace('-', '/', $set_date);
        $Update = date('Y-m-d', strtotime($date1 . "+" . $add_date . " days"));
        $this->ttp->End_date = $Update;
        $this->ttp->Status = $num;
        $this->ttp->Form_ID = $this->input->post('form');
        $this->ttp->update_date($k);
        $this->ttp->status_update($k);
        $this->ttp->update_form($k);
        $this->ttp->update_approve($k);
        move_uploaded_file($tmp_Layout, 'assets/file/Layout/' . $Layout_name);
        $this->ttp->Layout_location = $Layout_name;
        move_uploaded_file($tmp_Plan, 'assets/file/Plan/' . $Plan_name);
        $this->ttp->Plan_location = $Plan_name;
        $this->ttp->Form_ID = $this->input->post('from');
        $this->ttp->update_file($k);

        // echo  $id;
        $this->load->model('M_ttp_licence', 'get');
        $data['obj_status'] = $this->get->get_status($id)->result();
        // // print_r($_SESSION['Emp_ID']);
        $this->output('consent/v_check_status', $data);
        // $this->output('consent/v_check_status', $i);
        // redirect('licence_form/licence_input/index');
    }
}
// 