<?php
/*
* Da_ttp_approve_form
* Model Approve Form
* @input  - 
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('ttps_model.php');

class Da_ttp_approve_form extends ttps_model
{
    public $app_reject_reason; //ตัวแปรเพื่อมารับค่า เหตุผลที่ปฏิเสธแบบฟอร์มคำขออนุญาต
    
    /*
    * Function __construct
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function __construct()
    {
        parent::__construct();
    }//__construct

    /*
    * Function update_reject
    * @input  app_reject_reason, app_form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_reject()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_reject_reason = ?
                WHERE app.app_form_id = ? "; 
        $this->db->query($sql, array($this->app_reject_reason,$this->app_form_id));
    } //เพิ่มเหตุผลในการปฏิเสธลงในตาราง approval

    /*
    * Function update_form
    * @input  req_status, req_hr_no, req_reject_count, req_form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.req_status = ? , req.req_hr_no = ? , req.req_reject_count = ?
                WHERE req.req_form_id = ? "; 
        $this->db->query($sql, array($this->req_status,$this->req_hr_no,$this->req_reject_count,$this->req_form_id));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย HR

    /*
    * Function update_form_plant
    * @input  req_status, req_reject_count, req_form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form_plant()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.req_status = ? , req.req_reject_count = ?
                WHERE req.req_form_id = ? "; 
        $this->db->query($sql, array($this->req_status,$this->req_reject_count,$this->req_form_id));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย Plant

    /*
    * Function update_app
    * @input  app_hr_id, app_form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_hr_date = CURRENT_TIMESTAMP() , app.app_hr_id = ?
                WHERE app.app_form_id = ? "; 
        $this->db->query($sql, array($this->app_hr_id,$this->app_form_id));
    } //update_app อัพเดทข้อมูลวันที่ hr ทำการอนุมัติแบบฟอร์มในตาราง approval

    /*
    * Function update_app_plant
    * @input  app_form_id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app_plant()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.app_approval_plant_date = CURRENT_TIMESTAMP()
                WHERE app.app_form_id = ? "; 
        $this->db->query($sql, array($this->app_form_id));
    } //update_app_plant อัพเดทข้อมูลวันที่ plant ทำการอนุมัติแบบฟอร์มในตาราง approval

    
}