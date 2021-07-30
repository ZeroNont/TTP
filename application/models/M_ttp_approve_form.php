<?php
/*
* M_ttp_approve_form
* Model approve form
* @input  id
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_ttp_approve_form.php');

class M_ttp_approve_form extends Da_ttp_approve_form
{

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
    * Function get_all
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                INNER JOIN dbmc.employee 
                ON  requested_form.Emp_ID = employee.Emp_ID ";

        $query = $this->db->query($sql);
        return $query;
    }//get_all ดึงข้อมูลที่อยู่ในตาราง requested_form ที่join กับตาราง employee 

    /*
    * Function get_all_hr
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_all_hr()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE form.Status = ?";

        $query = $this->db->query($sql,array($this->Status));
        return $query;
    }//get_all_hr ดึงข้อมูลที่อยู่ในตาราง requested_form ที่join กับตาราง approval และตาราง employee

    /*
    * Function get_all_plant
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_all_plant()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE app.Approve_plant_ID = ? AND form.Status = ?";

        $query = $this->db->query($sql,array($this->Approve_plant_ID,$this->Status));
        return $query;
    }//get_all_plant ดึงข้อมูลที่อยู่ในตาราง requested_form ที่join กับตาราง approval และตาราง employee

    /*
    * Function get_by_id
    * @input  id  
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_by_id($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                INNER JOIN ttps_database.form_file AS form
                ON  req.Form_ID = form.Form_ID
                WHERE req.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }//get_by_id ดึงข้อมูลที่อยู่ในตาราง requested_form ที่join กับตาราง form_file โดยที่ Form_ID ต้องทีค่าเท่ากับค่าในตัวแปร id ที่ถูกส่งมา

    /*
    * Function get_history_approve
    * @input  $id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_history_approve($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.Supervisor_ID = emp.Emp_ID
                WHERE app.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }//get_history_approve ใช้ดูประวัติว่าหัวหน้างานคนไหนเป็นผู้อนุมัติแบบฟอร์ม

    /*
    * Function get_history_approve_hr
    * @input  $id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_history_approve_hr($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.HR_ID = emp.Emp_ID
                WHERE app.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }//get_history_approve_hr ใช้ดูประวัติว่า HR คนไหนเป็นผู้อนุมัติแบบฟอร์ม

    /*
    * Function update_app
    * @input  - 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.HR_date = CURRENT_TIMESTAMP() , app.HR_ID = ?
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->HR_ID,$this->Form_ID));
    } //update_app อัพเดทข้อมูลวันที่ hr ทำการอนุมัติแบบฟอร์มในตาราง approval

    /*
    * Function update_app_plant
    * @input  - 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function update_app_plant()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.Approval_plant_date = CURRENT_TIMESTAMP()
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->Form_ID));
    } //update_app_plant อัพเดทข้อมูลวันที่ plant ทำการอนุมัติแบบฟอร์มในตาราง approval

    
    /*
    * Function get_history_user
    * @input  $id
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_history_user($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                INNER JOIN dbmc.employee AS emp
                ON  req.Emp_ID = emp.Emp_ID
                WHERE req.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }//get_history_user ใช้ดูประวัติว่าผู้ใช้งานคนไหนเป็นผู้ร้องขอแบบฟอร์ม
    
}