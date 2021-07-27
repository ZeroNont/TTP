<?php
/*
* Ttps_Controller
* Request
* @input  -   
* @output -
* @author Apinya Phadungkit
* @Create Date 2564-7-18
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class ttp_request extends MainController
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
	* @author 	Apinya Phadungkit
	* @Create Date 2564-7-18
	*/
    function index()
    {
        $this->output('consent/v_request');
    }
    // function index()

    function show_request_list() 
    {
        $this->load->model('M_ttp_request', 'mreq');
        $this->mreq->Supervisor_ID = $_SESSION["UsEmp_ID"];
        $this->mreq->Status = 1;
        $data['arr_req'] = $this->mreq->get_all_sup()->result();
        $this->output('consent/v_request', $data);
    }

    function show_request_detail($id)
	{
        $this->load->model('M_ttp_request', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        // $data['arr_file'] = $this->mreq->get_form_file()->result();
        $this->output('consent/v_request_detail',$data);
	}

    function reject_form($id)
    {
   
        $this->load->model('Da_ttp_request','dain');
        $this->dain->reject_reason =  $this->input->post('reject_reason');  
        $this->dain->insert_reason();

        $this->dain->Status = 0;
        $this->dain->Form_ID = $id;   
        $this->dain->update_form();


        redirect('/request/ttp_request/show_request_list');
    }//function insert friend

    function update_request_form($id) 
    {
        $this->load->model('Da_ttp_request', 'dreq');
        $this->dreq->Status = 2;
        $this->dreq->Form_ID = $id;   
        $this->dreq->update_form();
        $this->load->model('M_ttp_request', 'mreq');
        $this->mreq->Form_ID = $id;   
        $this->mreq->update_app();
        redirect('/request/ttp_request/show_request_list');
    }



}
// 