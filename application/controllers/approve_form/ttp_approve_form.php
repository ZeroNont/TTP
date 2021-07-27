<?php
/*
* Ttps_Controller
* Approve Form
* @input  -   
* @output -
* @author Apinya Phadungkit
* @Create Date 2564-7-27
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class ttp_approve_form extends MainController
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
        $this->output('consent/v_approve_form');
    }
    // function index

    function show_approve_form_list() 
    {
        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->HR_ID = $_SESSION["UsEmp_ID"];
        $this->mreq->Status = 2;
        $data['arr_req'] = $this->mreq->get_all_hr()->result();
        $this->output('consent/v_approve_form', $data);
    } //แสดงรายการคำขอทั้งหมดสำหรับhr

    function show_approve_form_plant() 
    {
        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->Approve_plant_ID = $_SESSION["UsEmp_ID"];
        $this->mreq->Status = 3;
        $data['arr_req'] = $this->mreq->get_all_plant()->result();
        $this->output('consent/v_approve_form_plant', $data);
    } //แสดงรายการคำขอทั้งหมดสำหรับ plant

    function show_approve_form_detail($id)
	{
        $this->load->model('M_ttp_approve_form', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_his'] = $this->mreq->get_history_approve($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        $this->output('consent/v_approve_form_detail',$data);
	} //แสดงรายละเอียดเพิ่มเติมของรายการคำขอ สำหรับ HR

    function show_approve_form_plant_detail($id)
	{
        $this->load->model('M_ttp_approve_form', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_his'] = $this->mreq->get_history_approve($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        $this->output('consent/v_approve_form_detail_plant',$data);
	} //แสดงรายละเอียดเพิ่มเติมของรายการคำขอ สำหรับ Plant

    function reject_form_HR()
    {   
        $this->load->model('Da_ttp_approve_form','dain');
        $this->dain->reject_reason =  $this->input->post('reject_reason');   
        $this->dain->Form_ID = $id; 
        $this->dain->update_reject();

        $this->dain->Status = -1;
        $this->dain->Form_ID = $id;   
        $this->dain->update_form();

        redirect('/approve_form/ttp_approve_form/show_approve_form_list');
    } //ปฏิเสธแบบฟอร์มสำหรับ HR

    function reject_form_Plant()
    {   
        $this->load->model('Da_ttp_approve_form','dain');
        $this->dain->reject_reason =  $this->input->post('reject_reason');   
        $this->dain->Form_ID = $id; 
        $this->dain->update_reject();

        $this->dain->Status = -2;
        $this->dain->Form_ID = $id;   
        $this->dain->update_form();

        redirect('/approve_form/ttp_approve_form/show_approve_form_list');
    } //ปฏิเสธแบบฟอร์มสำหรับ Plant

    function update_approve_form($id) 
    {
        $this->load->model('Da_ttp_approve_form', 'dreq');
        $this->dreq->Status = 3;
        $this->dreq->Form_ID = $id;   
        $this->dreq->update_form();
        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->Form_ID = $id;   
        $this->mreq->update_app();
        redirect('/approve_form/ttp_approve_form/show_approve_form_list');
    } //เปลี่ยนสถานะของคำขอที่ถูกอนุมัติโดย HR

    function update_approve_form_plant($id) 
    {
        $this->load->model('Da_ttp_approve_form', 'dreq');
        $this->dreq->Status = 4;
        $this->dreq->Form_ID = $id;   
        $this->dreq->update_form();
        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->Form_ID = $id;   
        $this->mreq->update_app_plant();
        redirect('/approve_form/ttp_approve_form/show_approve_form_plant');
    } //เปลี่ยนสถานะของคำขอที่ถูกอนุมัติโดย Plant



}
// 