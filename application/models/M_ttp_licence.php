<?php
include_once("Da_ttp_licence.php");

class M_ttp_licence extends Da_ttp_licence
{
    public function get_form($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form Where Emp_ID=$id AND Status=4 ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_employee($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.employee INNER JOIN dbmc.position Where Emp_ID=$id  ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_position_id($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN dbmc.position AS pos ON emp.Position_ID=pos.Position_ID Where Emp_ID=$id  ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_company()
    {
        $sql =
            "SELECT *
            FROM dbmc.company  ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_company_by_id($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.company AS com INNER JOIN ttps_database.requested_form AS req ON req.Company_ID=com.Company_ID WHERE req.Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_supervisor()
    {
        $sql =
        "SELECT *
        FROM dbmc.employee AS emp INNER JOIN dbmc.position AS pos where emp.Position_ID=pos.Position_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_supervisor_by_id($id)
    {
        $sql =
            "SELECT *
        FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS app  where Form_ID=$id AND emp.Emp_ID=app.Supervisor_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_plan_by_id($id)
    {
        $sql =
            "SELECT *
       FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS app INNER JOIN ttps_database.plant  where Form_ID=$id AND emp.Emp_ID=app.Approve_plant_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_plan()
    {
        $sql =
            "SELECT *
            FROM ttps_database.plant AS pla INNER JOIN dbmc.employee AS emp
            ON pla.Emp_ID = emp.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_status($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form req WHERE req.Emp_ID=$id AND req.Status<5 AND req.Form_count<3 AND CURDATE() <= End_date  
            LIMIT 0,30  ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_form_by_id($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form Where Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_file_by_id($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.form_file Where Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_sec()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN dbmc.sectioncode AS sec ON emp.Sectioncode_ID = sec.Sectioncode ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_approve()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.Approve_plant_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_HR()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.HR_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_Supervisor_ID()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.Supervisor_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_Prepare()
    {
        $sql =
        "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.requested_form AS sec ON emp.Emp_ID = sec.Emp_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    
}