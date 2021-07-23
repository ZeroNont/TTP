<?php
include_once("Da_ttp_licence.php");

class M_ttp_licence extends Da_ttp_licence
{
    public function get_company()
    {
        $sql =
        "SELECT *
            FROM dbmc.company";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_supervisor()
    {
        $sql =
        "SELECT *
        FROM dbmc.employee";
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
    public function get_status()
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form WHERE CURDATE() <= End_date  
            LIMIT 0,30";
        $query = $this->db->query($sql);
        return $query;
    }
}