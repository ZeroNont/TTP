<?php
/*
* Ttps_Controller
* Form Management
* @input  -   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-23
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class ttp_check_out extends MainController
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
	* @Create Date 2564-7-23
	*/
    function index()
    {
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_form'] = $this->ttp->get_form()->result();
        $this->output('consent/v_check_out', $data);
    }
    // function index()
    function insert()
    {
        $date = date("Y-m-d");
        $i = 326;
        $j = 1;
        $id = strtotime('now');
        $Layout_name =  $_FILES['Layout']['name'];
        $tmp_Layout =  $_FILES['Layout']['tmp_name'];
        $Plan_name =  $_FILES['Plan']['name'];
        $tmp_Plan =  $_FILES['Plan']['tmp_name'];

        $this->load->model('Da_ttp_licence', 'ttp');
        $this->ttp->Emp_ID = $i;
        $this->ttp->Form_ID = $id;
        $this->ttp->Item = $this->input->post('Item');
        $this->ttp->Start_date = $this->input->post('Start_date');
        $this->ttp->End_date = $this->input->post('End_date');
        $this->ttp->Requested_date = $date;
        $this->ttp->Reason = $this->input->post('Reason');
        $this->ttp->Officer = $this->input->post('Officer');
        $this->ttp->Tell = $this->input->post('Tell');
        $this->ttp->Supervisor = $this->input->post('Supervisor');
        $this->ttp->Company_ID = $this->input->post('Company_ID');
        $this->ttp->Approve_Plant = $this->input->post('Approve_Plant');
        $this->ttp->Form_count = $j;
        //echo $this->input->post('Company_ID');
        $this->ttp->insert_form();
        move_uploaded_file($tmp_Layout, 'assets/file/Layout/' . $Layout_name);
        $this->ttp->Layout_location = $Layout_name;
        move_uploaded_file($tmp_Plan, 'assets/file/Plan/' . $Plan_name);
        $this->ttp->Plan_location = $Plan_name;
        $this->ttp->insert_file();
        redirect('licence_form/licence_input/index');
    }
    // function index()

}
// 