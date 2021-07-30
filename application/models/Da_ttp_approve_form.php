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
    public $reject_reason; //ตัวแปรเพื่อมารับค่า เหตุผลที่ปฏิเสธแบบฟอร์มคำขออนุญาต
    
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
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_reject()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.reject_reason = ?
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->reject_reason,$this->Form_ID));
    } //เพิ่มเหตุผลในการปฏิเสธลงในตาราง approval

    /*
    * Function update_form
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.Status = ? , req.HR_No = ?
                WHERE req.Form_ID = ? "; 
        $this->db->query($sql, array($this->Status,$this->HR_No,$this->Form_ID));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย HR

    /*
    * Function update_form_plant
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_form_plant()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.Status = ? 
                WHERE req.Form_ID = ? "; 
        $this->db->query($sql, array($this->Status,$this->Form_ID));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดย Plant

    
}