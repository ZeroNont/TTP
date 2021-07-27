<?php
include_once("Da_ttp_report.php");

class M_ttp_report extends Da_ttp_report
{
    public function get_department()
    {
        $sql = "SELECT *
                FROM dbmc.department";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_all_requested_form()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form";
        $query = $this->db->query($sql);
        return $query;
    }

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

    public function get_department_to_chart()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form AS req
                INNER JOIN dbmc.employee AS emp
                ON emp.Emp_ID = req.Emp_ID
                INNER JOIN dbmc.sectioncode AS sec
                ON sec.Sectioncode = emp.Sectioncode_ID
                ORDER BY sec.Sectioncode";
        $query = $this->db->query($sql);
        return $query;
    }
}