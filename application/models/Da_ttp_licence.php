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
        $sql = "INSERT INTO ttps_database.requested_form(Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count) 
                VALUES (?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->Emp_ID, $this->Start_date, $this->End_date, $this->Requested_date, $this->Item, $this->Tell, $this->Officer, $this->Reason, $this->Company_ID, $this->Form_count));
    }
    public function update_form($id)
    {
        $sql = " UPDATE ttps_database.requested_form
        SET Emp_ID=?,Start_date=?,End_date=?,Requested_date=?,Item=?,Tell=?,Officer=?,Reason=?,Company_ID=?,Form_count=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Emp_ID, $this->Start_date, $this->End_date, $this->Requested_date, $this->Item, $this->Tell, $this->Officer, $this->Reason, $this->Company_ID, $this->Form_count));
    } 
    public function insert_approve()
    {
        $sql = "INSERT INTO ttps_database.approval(Supervisor_ID,Approve_Plant_ID) 
                VALUES (?,?)";
        $this->db->query($sql, array($this->Supervisor_ID, $this->Approve_Plant_ID));
    }
    public function update_approve($id)
    {
        $sql = " UPDATE ttps_database.approval
        SET Supervisor_ID=?,Approve_Plant_ID=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Supervisor_ID, $this->Approve_Plant_ID));
    } 
    public function insert_file()
    {
        $sql = "INSERT INTO ttps_database.form_file(Layout_location,Plan_location) 
                VALUES (?,?)";

        $this->db->query($sql, array($this->Layout_location, $this->Plan_location));
    }
    public function update_file($id)
    {
        $sql = " UPDATE ttps_database.form_file
        SET Layout_location=?,Plan_location=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Layout_location, $this->Plan_location));
    } 
    public function check_out()
    {
        $sql = " UPDATE ttps_database.requested_form
        SET Status=?
        WHERE Form_ID=?;";
        $this->db->query($sql, array($this->Status, $this->Form_ID));
    }
    public function status_print()
    {
        $sql = " UPDATE ttps_database.requested_form
        SET print_status=?
        WHERE Form_ID=?;";
        $this->db->query($sql, array($this->print_status, $this->Form_ID));
    } 
}