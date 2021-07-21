<?php
include_once("Da_ttp_plan_list.php");

class M_ttp_plan_list extends Da_ttp_plan_list
{
    public function get_plan()
    {
        $sql = "SELECT * 
                FROM  plant INNER JOIN employee
                ON  plant.Emp_ID = employee.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
}
