<?php
/*
* M_ttp_request
* Model Request Form
* @input  id
* @output - 
* @author Apinya Phadungkit
* @Create Date 2564-7-18
* @Update Date 2564-7-28
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_ttp_request.php');

class M_ttp_request extends Da_ttp_request
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
    }

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
    * Function get_all_sup
    * @input  -   
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_all_sup()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE app.Supervisor_ID = ? AND form.Status = ?";

        $query = $this->db->query($sql,array($this->Supervisor_ID,$this->Status));
        return $query;
    }//get_all_sup ดึงข้อมูลที่อยู่ในตาราง requested_form ที่join กับตาราง approval และตาราง employee

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
    * Function get_hr_no
    * @input  - 
    * @output -
    * @author Apinya Phadungkit
    * @Create Date 2564-7-18
    * @Update Date 2564-7-28
    */
    function get_hr_no()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                WHERE req.HR_No LIKE 'HR%'
                ORDER BY req.HR_No DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query;
    }//get_hr_no ดึงข้อมูล HR_No ที่อยู่ในตาราง requested_form

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
                SET app.Supervisor_date = CURRENT_TIMESTAMP()
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->Form_ID));
    } //update_app อัพเดทข้อมูลในตาราง approval

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
    } //get_history_user ใช้ดูประวัติว่าผู้ใช้งานคนไหนเป็นผู้ร้องขอแบบฟอร์ม
    
}