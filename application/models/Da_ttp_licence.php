<?php
include_once("ttps_model.php");


class Da_ttp_licence extends ttps_model
{

    function construct()
    {
        parent::construct();
    }
    public function insert_form()
    {
        $sql = "INSERT INTO requested_form(Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Supervisor,Approve_Plant,Reason,Company_ID,Form_count) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->Emp_ID, $this->Start_date, $this->End_date, $this->Requested_date, $this->Item, $this->Tell, $this->Officer, $this->Supervisor, $this->Approve_Plant, $this->Reason, $this->Company_ID, $this->Form_count));
    }
    public function insert_file()
    {
        $sql = "INSERT INTO form_file(Form_ID,Layout_location,Plan_location) 
                VALUES (?,?,?)";

        $this->db->query($sql, array($this->Form_ID, $this->Layout_location, $this->Plan_location));
    }
}