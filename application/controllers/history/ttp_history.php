<!--
    ttp_history
    Controller for history schedule module
    @input -
    @output -
    @author Phatchara
    Create date 
    Update date 
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class ttp_history extends MainController
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
	* show_history_em
	* 
	* @input 
	* @output 
	* @author 	Phatchara Khongthandee
	* @Create Date 2564-7-19
	*/
 
    function index()
    {
        $this->output('consent/v_history_user');
    }
    // function index()
    
    function show_history_employee(){
        $id = $_SESSION['UsEmp_ID'];
        $this->load->model('M_ttp_history', 'ttp');
        $data['em_form'] = $this->ttp->get_history_em($id)->result();
        $this->output('consent/v_history_user', $data);
    }// function show_history_em()

    public function show_history_detail($id)
	{
        $this->load->model('M_ttp_history', 'ttp');
        $data['arr_form'] = $this->ttp->get_by_id($id)->row();
        $data['arr_list'] = $this->ttp->get_form_list()->row();
        $data['arr_file'] = $this->ttp->get_form_file($id)->result();
        $this->output('consent/v_history_detail', $data);
	}// function show_history_detail()

}