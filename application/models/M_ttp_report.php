<?php
/*
* ttps_database.requested_form, ttps_database.approval, dbmc.department, ttps_database.plant, dbmc.company, dbmc.employee, dbmc.sectioncode
* get data of report
* @author   Chakrit
* @Create Date 2564-07-25
*/ 

include_once("Da_ttp_report.php");

class M_ttp_report extends Da_ttp_report
{
    
    /*
    * get_department
    * get data department
    * @input    -
    * @output   data of department
    * @author   Chakrit
    * @Create Date 2564-07-25
    */
    public function get_department()
    {
        $sql = "SELECT *
                FROM dbmc.department";
        $query = $this->db->query($sql);
        return $query;
    }

    /*
    * get_all_requested_form
    * get data requested form
    * @input    -
    * @output   data of requested_form
    * @author   Chakrit
    * @Create Date 2564-07-25
    */
    public function get_all_requested_form()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form ";
        $query = $this->db->query($sql);
        return $query;
    }
    
    /*
    * get_form_by_id
    * get data requested form by Form_ID
    * @input    -
    * @output   data of requested_form by Form_ID
    * @author   Chakrit
    * @Create Date 2564-07-26
    */
    public function get_form_by_id()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form AS req
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = req.Form_ID
                INNER JOIN ttps_database.plant AS pla
                ON pla.Emp_ID = app.Approve_plant_ID
                INNER JOIN dbmc.company AS com
                ON com.Company_ID = req.Company_ID
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = req.Emp_ID
                WHERE req.Form_ID = ?";
        $query = $this->db->query($sql, array($this->Form_ID));
        return $query;
    }

    /*
    * get_form_to_excel
    * get data requested form to excel
    * @input    -
    * @output   data of requested form to excel
    * @author   Chakrit
    * @Create Date 2564-07-28
    */
    public function get_form_to_excel()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form AS req
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = req.Form_ID
                INNER JOIN ttps_database.plant AS pla
                ON pla.Emp_ID = app.Approve_plant_ID
                INNER JOIN dbmc.company AS com
                ON com.Company_ID = req.Company_ID
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = req.Emp_ID";
        $query = $this->db->query($sql);
        return $query;
    }
   
    /*
    * get_department_to_chart
    * get data department to chart
    * @input    Start date and End date
    * @output   data of department between Start date and End date
    * @author   Chakrit
    * @Create Date 2564-07-27
    */
    public function get_department_to_chart($Start_date, $End_date)
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form AS req
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = req.Emp_ID
                INNER JOIN dbmc.sectioncode AS sec
                ON sec.Sectioncode = emp.Sectioncode_ID
                WHERE req.Requested_date 
                BETWEEN '$Start_date' AND '$End_date'
                ORDER BY sec.Sectioncode";
        $query = $this->db->query($sql);
        return $query;
    }
}