<?php
include_once("Da_ttp_licence.php");

class M_ttp_Emp extends Da_ttp_Emp
{
    public function get_name_emp()
    {
        $sql =
            "SELECT *
        FROM dbmc.employee";
        $query = $this->db->query($sql);
        return $query;
    }
    
}