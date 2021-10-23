<?php
/*
* Plant_list
* show plant detail to list
* @input  -
* @output Plant detail
* @author Jirayut Saifah
* @Create Date 2564-7-22
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Plant_list extends MainController
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
	* @input  -
	* @output -
	* @author Jirayut Saifah
	* @Create Date 2564-7-21
	*/
    function index()
    {
        $this->load->model('M_ttp_plant_list', 'ttp');
        $data['obj_plan'] = $this->ttp->get_plant()->result();
        $this->output('consent/v_plant_list', $data);
    }
   
}
// 