<?php
include_once("Da_ttp_plan_list.php");

class M_ttp_plan_list extends Da_ttp_plan_list
{
    public function get_plan()
    {
        $sql =
            "SELECT * 
                FROM  ttps_database.plant AS pla 
                INNER JOIN dbmc.employee AS emp
                ON  pla.Emp_ID = emp.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
}