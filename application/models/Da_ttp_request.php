<?php
/*
* Da_ttp_request
* Model Request Form
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

class Da_ttp_request extends ttps_model
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
    } //update_reject เพิ่มเหตุผลในการปฏิเสธลงในตาราง approval

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
                SET req.Status = ?
                WHERE req.Form_ID = ? "; 
        $this->db->query($sql, array($this->Status,$this->Form_ID));
    } //update_form อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดยหัวหน้างาน

    
}