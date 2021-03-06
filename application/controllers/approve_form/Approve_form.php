<?php
/*
* Approve Form
* Controller for Approve Form 
* @author Apinya Phadungkit
* @Create Date 2564-7-27
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Approve_form extends MainController
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
	* Show page approve form
	* @input  -
	* @output -
	* @author Apinya Phadungkit
	* @Create Date 2564-7-18
	*/
    function index()
    {
        $this->output('consent/v_approve_form');
    }
    // function index

    /*
    * show_approve_form_list
    * Display view approve form list for HR
    * @input  -  
    * @output show v_approve_form.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_approve_form_list() 
    {
        $this->load->model('M_ttp_request', 'msup');
        $this->msup->app_supervisor_id = $_SESSION["UsEmp_ID"];
        $this->msup->req_status = 1;
        $data['arr_req'] = $this->msup->get_all_sup()->result();

        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->req_status = 2;
        $data['arr_req'] = $this->mreq->get_all_hr()->result();

        $this->output('consent/v_approve_form', $data);
    } //แสดงรายการคำขอทั้งหมดสำหรับhr

    /*
    * show_approve_form_plant
    * Display view approve form list for plant
    * @input  -  
    * @output show v_approve_form_plant.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_approve_form_plant() 
    {
        $this->load->model('M_ttp_request', 'msup');
        $this->msup->app_supervisor_id = $_SESSION["UsEmp_ID"];
        $this->msup->req_status = 1;
        $data['arr_req'] = $this->msup->get_all_sup()->result();
        
        $this->load->model('M_ttp_approve_form', 'mreq');
        $this->mreq->app_approve_plant_id = $_SESSION["UsEmp_ID"];
        $this->mreq->req_status = 3;
        $data['arr_req'] = $this->mreq->get_all_plant()->result();
        $this->output('consent/v_approve_form_plant', $data);
    } //แสดงรายการคำขอทั้งหมดสำหรับ plant

    /*
    * show_approve_form_detail
    * Display view approve form detail HR
    * @input  id 
    * @output show v_approve_form_detail.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_approve_form_detail($id)
	{
        $this->load->model('M_ttp_approve_form', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_his'] = $this->mreq->get_history_approve($id)->row();
        $data['arr_user'] = $this->mreq->get_history_user($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        $this->output('consent/v_approve_form_detail',$data);
	} //แสดงรายละเอียดเพิ่มเติมของรายการคำขอ สำหรับ HR

    /*
    * show_approve_form_plant_detail
    * Display view approve form detail plant
    * @input  id 
    * @output show v_approve_form_detail_plant.php
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function show_approve_form_plant_detail($id)
	{
        $this->load->model('M_ttp_approve_form', 'mreq');
        $data['arr_req'] = $this->mreq->get_by_id($id)->row();
        $data['arr_his'] = $this->mreq->get_history_approve($id)->row();
        $data['arr_his_hr'] = $this->mreq->get_history_approve_hr($id)->row();
        $data['arr_user'] = $this->mreq->get_history_user($id)->row();
        $data['arr_emp'] = $this->mreq->get_all()->row();
        $this->output('consent/v_approve_form_detail_plant',$data);
	} //แสดงรายละเอียดเพิ่มเติมของรายการคำขอ สำหรับ Plant

    /*
    * reject_form_HR
    * Get reject form by HR and update data
    * @input  id 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function reject_form_HR($id)
    {   
        $this->load->model('Da_ttp_approve_form','dain');
        $this->dain->app_reject_reason =  $this->input->post('app_reject_reason');   
        $this->dain->app_form_id = $id; 
        $this->dain->update_reject();

        $count =  $this->input->post('req_reject_count');
        $this->dain->req_reject_count = $count+1;
        $this->dain->req_status = -1;
        $this->dain->req_form_id = $id;   
        $this->dain->update_form();

        redirect('/approve_form/Approve_form/show_approve_form_list');
    } //ปฏิเสธแบบฟอร์มสำหรับ HR

    /*
    * reject_form_Plant
    * Get reject form by Plant and update data
    * @input  id 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function reject_form_Plant($id)
    {   
        $this->load->model('Da_ttp_approve_form','dain');
        $this->dain->app_reject_reason =  $this->input->post('app_reject_reason');   
        $this->dain->app_form_id = $id; 
        $this->dain->update_reject();

        $count =  $this->input->post('req_reject_count');
        $this->dain->req_reject_count = $count+1;
        $this->dain->req_status = -2;
        $this->dain->req_form_id = $id;   
        $this->dain->update_form();

        redirect('/approve_form/Approve_form/show_approve_form_list');
    } //ปฏิเสธแบบฟอร์มสำหรับ Plant

    /*
    * update_approve_form
    * Get approve form by HR and update data
    * @input  form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_approve_form($form_id) 
    {
        $this->load->model('M_ttp_request','mreq');
        $data['HR_No'] = $this->mreq->get_hr_no()->row();
        $temp = $data['HR_No'];
        if(sizeof($data['HR_No']) != 0){
            $HR = substr($temp->req_hr_no,7);
            $HR_no = intval($HR)+1;
            $Year = substr($temp->req_hr_no,2,4);
            if($Year == date("Y")){
                if(intval($HR) < 9){
                    $HR_No = "HR".date("Y")."-00".$HR_no;
                }
                //if 
                else if(intval($HR) < 99){
                $HR_No = "HR".date("Y")."-0".$HR_no;
                }
                // else if
                
                else if(intval($HR) < 999){
                $HR_No = "HR".date("Y")."-".$HR_no;
                }
                // else if
            }//if Year
            else{
                $HR_No = "HR".date("Y")."-001";
            }//else Year
        }//if size of
        else{
            $HR_No = "HR".date("Y")."-001";
        }
    
        $this->load->model('Da_ttp_approve_form', 'dapp');
        $this->dapp->app_hr_id = $_SESSION["UsEmp_ID"]; 
        $this->dapp->app_form_id = $form_id;         
        $this->dapp->update_app();
        
        //อัพเดท status ในตาราง requested_form ให้เป็น 3
        $this->load->model('Da_ttp_approve_form', 'dreq');
        $this->dreq->req_status = 3;
        $this->dreq->req_form_id = $form_id;   
        $this->dreq->req_hr_no = $HR_No; 
        $this->dreq->update_form();
        
        redirect('/approve_form/Approve_form/show_approve_form_list');
    } //เปลี่ยนสถานะของคำขอที่ถูกอนุมัติโดย HR

    /*
    * update_approve_form_plant
    * Get approve form by Plant and update data
    * @input  id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_approve_form_plant($id) 
    {
        $this->load->model('Da_ttp_approve_form', 'dreq');
        $this->dreq->req_status = 4;
        $this->dreq->req_form_id = $id;    
        $this->dreq->update_form_plant();

        $this->load->model('Da_ttp_approve_form', 'dreq');
        $this->dreq->app_form_id = $id;  
        $this->dreq->update_app_plant();
        redirect('/approve_form/Approve_form/show_approve_form_plant');
    } //เปลี่ยนสถานะของคำขอที่ถูกอนุมัติโดย Plant

}
