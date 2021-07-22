<?php
/*
* Ttps_Controller
* Form Management
* @input  -   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-22
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class plan_input extends MainController
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
	* 
	* @input 
	* @output 
	* @author 	Jirayut Saifah
	* @Create Date 2564-7-22
	*/

    function insert()
    {
        $this->load->model('Da_ttp_plan_list', 'ttp');
        $this->ttp->Emp_ID = $this->input->post('Emp_ID');
        $this->ttp->Plant_name = $this->input->post('Plant_name');
        $this->ttp->Plant_No = $this->input->post('Plant_No');
        $this->ttp->insert();
        redirect('plan_management/plan_list/index');
    }
}
// 