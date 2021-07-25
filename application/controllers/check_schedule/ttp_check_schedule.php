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

class ttp_check_schedule extends MainController
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
	* 
	* 
	* @input 
	* @output 
	* @author 	Phatchara Khongthandee
	* @Create Date 2564-7-19
	*/
 
    function show_check_schedule()
    {
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_ttp_check_schedule', 'ttp');
        $data['arr_schedule'] = $this->ttp->get_by_id($id)->result();
        $this->output('consent/v_check_schedule', $data);
    }// function show_check_schedule()()

}