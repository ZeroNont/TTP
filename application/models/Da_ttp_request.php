<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('ttps_model.php');

class Da_ttp_request extends ttps_model
{
    public $reject_reason;
    
    function __construct()
    {
        parent::__construct();
    }

    function update_reject()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.reject_reason = ?
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->reject_reason,$this->Form_ID));
    } //เพิ่มเหตุผลในการปฏิเสธลงในตาราง approval

    function update_form()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.Status = ?
                WHERE req.Form_ID = ? "; 
        $this->db->query($sql, array($this->Status,$this->Form_ID));
    } //อัพเดทสถานะของฟอร์มที่ถูกยกเลิกโดยหัวหน้างาน

    
}