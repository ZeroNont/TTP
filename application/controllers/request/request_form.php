<?php
/*
* request_form
* Controller Request Form
* @input  - Form_ID   
* @output - Show Request Form List
          - Show Request Form Detail
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class request_form extends MainController
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
    * Function index
    * @input  -   
    * @output show v_request_form.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function index()
    {
        $this->output('consent/v_request_form');
    } // function index()

    /*
    * Function show_request_list
    * @input  -   
    * @output show v_request_form.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_request_form_list() 
    {
        $this->load->model('M_ttp_request', 'mreq');
        $this->mreq->Supervisor_ID = $_SESSION["UsEmp_ID"];
        $this->mreq->Status = 1;
        $data['arr_req'] = $this->mreq->get_all_sup()->result();
        $this->output('consent/v_request_form', $data);
    } //show request list แสดงายการคำขอทั้งหมด สำหรับหัวหน้างานคนนั้นๆ

    /*
    * Function show_request_detail
    * @input  $id   
    * @output show v_request_form_detail.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_request_form_detail($id)
	{
        $this->load->model('M_ttp_request', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        $this->output('consent/v_request_form_detail',$data);
	} //show request detail แสดงรายละเอียดเพิ่มเติมของรายการคำขอ

    /*
    * Function reject_form
    * @input  $id   
    * @output show_request_form_list.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function reject_form($id)
    {
        $this->load->model('Da_ttp_request','dain');
        $this->dain->reject_reason =  $this->input->post('reject_reason');  
        $this->dain->Form_ID = $id; 
        $this->dain->update_reject();

        // ปฏิเสธแล้วให้ Status = 0
        $this->dain->Status = 0;
        $this->dain->Form_ID = $id;   
        $this->dain->update_form();

        redirect('/request/request_form/show_request_form_list');
    } //reject form ใช้ในการปฏิเสธแบบฟอร์ม

    /*
    * Function update_request_form
    * @input  $id   
    * @output show_request_form_list.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_request_form($id) 
    {
        $this->load->model('Da_ttp_request', 'dreq');
        $this->dreq->Status = 2;
        $this->dreq->Form_ID = $id;   
        $this->dreq->update_form();
        $this->load->model('M_ttp_request', 'mreq');
        $this->mreq->Form_ID = $id;   
        $this->mreq->update_app();
        redirect('/request/request_form/show_request_form_list');
    } //update request form เปลี่ยนสถานะของคำขอที่ถูกอนุมัติแล้ว ให้มี Status = 2

}
// 