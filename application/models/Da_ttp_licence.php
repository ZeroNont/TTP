<?php
include_once("ttps_model.php");


class Da_ttp_licence extends ttps_model
{
    // Table Name:ttps_database.requested_form
    // Describtion:Requested Form
    // @author:Jirayut
    // @Create Date:16/07/2021
    function construct()
    {
        parent::construct();
    }
    public function insert_form()
    {
        $sql = "INSERT INTO ttps_database.requested_form(Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count,Status) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->Emp_ID, $this->Start_date, $this->End_date, $this->Requested_date, $this->Item, $this->Tell, $this->Officer, $this->Reason, $this->Company_ID, $this->Form_count, $this->Status));
    }
    // *insert_form
    // *insert form in database
    // *@input Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function update_form($id)
    {
        $sql = " UPDATE ttps_database.requested_form
        SET Emp_ID=?,Start_date=?,End_date=?,Requested_date=?,Item=?,Tell=?,Officer=?,Reason=?,Company_ID=?,Form_count=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Emp_ID, $this->Start_date, $this->End_date, $this->Requested_date, $this->Item, $this->Tell, $this->Officer, $this->Reason, $this->Company_ID, $this->Form_count));
    }
    // *update_form
    // *update form to database
    // *@input Emp_ID,Start_date,End_date,Requested_date,Item,Tell,Officer,Reason,Company_ID,Form_count
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function insert_approve()
    {
        $sql = "INSERT INTO ttps_database.approval(Supervisor_ID,Approve_Plant_ID) 
                VALUES (?,?)";
        $this->db->query($sql, array($this->Supervisor_ID, $this->Approve_Plant_ID));
    }
    // *insert_approve
    // *insert approval in database
    // *@input Supervisor_ID,Approve_Plant_ID
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function update_approve($id)
    {
        $sql = " UPDATE ttps_database.approval
        SET Supervisor_ID=?,Approve_Plant_ID=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Supervisor_ID, $this->Approve_Plant_ID));
    }
    // *update_approve
    // *update approve to database
    // *@input Supervisor_ID,Approve_Plant_ID
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function insert_file()
    {
        $sql = "INSERT INTO ttps_database.form_file(Layout_location,Plan_location) 
                VALUES (?,?)";

        $this->db->query($sql, array($this->Layout_location, $this->Plan_location));
    }
    // *insert_file
    // *insert file in database
    // *@input Layout_location,Plan_location
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function update_file($id)
    {
        $sql = " UPDATE ttps_database.form_file
        SET Layout_location=?,Plan_location=?
        WHERE Form_ID=$id;";
        $this->db->query($sql, array($this->Layout_location, $this->Plan_location));
    }
    // *update_file
    // *update file to database
    // *@input Layout_location,Plan_location
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function check_out()
    {
        $sql = " UPDATE ttps_database.requested_form
        SET Status=?
        WHERE Form_ID=?;";
        $this->db->query($sql, array($this->Status, $this->Form_ID));
    }
    // *check_out
    // *update status in database
    // *@input Status
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function status_print()
    {
        $sql = " UPDATE ttps_database.requested_form
        SET print_status=?
        WHERE Form_ID=?;";
        $this->db->query($sql, array($this->print_status, $this->Form_ID));
    }
    public function status_update()
    {
        $sql = " UPDATE ttps_database.requested_form
        SET Status=?
        WHERE Form_ID=?";
        $this->db->query($sql, array($this->Status, $this->Form_ID));
    }
    // *status_print
    // *update status in database
    // *@input print_status
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021
}