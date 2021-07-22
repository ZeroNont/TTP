<?php
include_once("ttps_model.php");


class Da_ttp_plan_list extends ttps_model
{



    function construct()
    {
        parent::construct();
    }
    public function insert()
    {
        $sql = "INSERT INTO ttps_database.plant(Emp_ID,Plant_name,Plant_No) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->Emp_ID, $this->Plant_name, $this->Plant_No));
    }
}