<?php
/*
* Plant_input
* Plant Management
* @input  Emp_ID,plant_name,plant_No,plant_ID   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-22
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Plant_input extends MainController
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
	* insert
	* insert plant data into model
	* @input Emp_ID,plant_name,plant_No,plant_ID 
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-22
	*/
    function insert()
    {
        $this->load->model('Da_ttp_plant_list', 'ttp');
        $this->ttp->Emp_ID = $this->input->post('Emp_ID');
        $this->ttp->Plant_name = $this->input->post('Plant_name');
        $this->ttp->Plant_No = $this->input->post('Plant_No');
        $this->ttp->insert();
        redirect('Plant_management/Plant_list/index');
    }
    /*
	* edit
	* update plant data into model
	* @input Emp_ID,plant_name,plant_No,plant_ID 
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-22
	*/
    function edit()
    {
        $this->load->model('Da_ttp_plant_list', 'ttp');
        $this->ttp->Emp_ID = $this->input->post('Emp_ID');
        $this->ttp->Plant_name = $this->input->post('Plant_name');
        $this->ttp->Plant_No = $this->input->post('Plant_No');
        $this->ttp->Plant_ID = $this->input->post('Plant_ID');
        $this->ttp->update();
        redirect('Plant_management/Plant_list/index');
    }
}
// 