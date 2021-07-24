<?php
include_once("Da_ttp_Emp.php");

class M_ttp_Emp extends Da_ttp_Emp
{
    public function get_name_emp()
    {
        $sql =
            "SELECT *
        FROM dbmc.employee
        WHERE Emp_ID = ?";
        $query = $this->db->query($sql, array($this->Emp_ID));
        return $query;
    }
    
}