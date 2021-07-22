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
        $id = '326';
        $this->load->model('M_history_user', 'ttp');
        $data['em_form'] = $this->ttp->get_history_em($id)->result();
        $this->output('consent/v_history_user', $data);
    }// function show_history_em()

    function show_history_supervisor(){
        $id = '003' ;
        $this->load->model('M_history_user', 'ttp');
        $data['sp_form'] = $this->ttp->get_history_sp($id)->result();
        $this->output('consent/v_history_supervisor', $data);
    } // function show_history_supervisor()

    function show_history_appplant(){
        $id = '002' ;
        $this->load->model('M_history_user', 'ttp');
        $data['ap_form'] = $this->ttp->get_history_ap($id)->result();
        $this->output('consent/v_history_approveplant', $data);
    } // function show_history_appplant()

    function show_history_hr(){
        $this->load->model('M_history_user', 'ttp');
        $data['hr_form'] = $this->ttp->get_history_hr()->result();
        $this->output('consent/v_history_HR', $data);
    } // function show_history_hr()

    public function show_history_detail($id)
	{
        $this->load->model('M_ttp_history_user', 'ttp');
        $data['arr_form'] = $this->ttp->get_by_id($id)->result()();
        $data['arr_list'] = $this->ttp->get_form_list()->result();
        $data['arr_approval'] = $this->ttp->get_approval()->result();
        $data['arr_file'] = $this->ttp->get_form_file()->result();
        $this->output('consent/v_history_detail');
	}// function show_history_detail()

}