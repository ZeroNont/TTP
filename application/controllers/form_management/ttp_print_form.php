<?php
/*
* Ttps_Controller
* Form Management
* @input  -   
* @output -
* @author Jirayut Saifah
* @Create Date 2564-7-24
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class ttp_print_form extends MainController
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
	* @Create Date 2564-7-24
	*/
    function print_form($id)
    {
        $this->load->model('M_ttp_licence', 'ttp');
        $data['obj_form'] = $this->ttp->get_form_by_id($id)->result();
        $data['obj_dep'] = $this->ttp->get_sec()->result();
        $data['obj_app'] = $this->ttp->get_approve()->result();
        $data['obj_hr'] = $this->ttp->get_HR()->result();
        $data['obj_sup'] = $this->ttp->get_Supervisor_ID()->result();
        $data['obj_pre'] = $this->ttp->get_Prepare()->result();
        $this->output('consent/v_print_form', $data);
        // print_r($data);
    }
}
// 