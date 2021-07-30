<!--
    Da_ttp_renewal
    database for renewal
    @input -
    @output -
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<?php
include_once("ttps_model.php");


class Da_ttp_renewal extends ttps_model
{
    public $End_date;
    function construct()
    {
        parent::construct();
    }

    /*
    * update
    * update end date to database
    * @input End_date,Form_ID
    * @output End_date update
    * @author Nattkorn
    * @Create date 2564-07-19
    */
    function update()
    {
        $sql = "UPDATE ttps_database.requested_form 
        SET End_date = ?
        WHERE Form_ID = ?";
        $this->db->query($sql, array($this->End_date, $this->Form_ID));
    }

    public function update_form()
    {
        $sql = " UPDATE ttps_database.requested_form as up
        SET up.Form_count = ?
        WHERE Form_ID= ?";
        $this->db->query($sql, array($this->Form_count,$this->Form_ID));
    }

    public function update_status()
    {
        $sql = " UPDATE ttps_database.requested_form as up
        SET up.Status = ?
        WHERE Form_ID= ?";
        $this->db->query($sql, array($this->Status,$this->Form_ID));
    }

    public function insert_schedule()
    {
        $sql = "INSERT INTO ttps_database.schedule(Form_ID,Start_date,End_date) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->Form_ID,$this->Start_date, $this->End_date));
    }

/*
        public function update_sec()
        {
            $sql = " UPDATE ttps_database.schedule 
            SET Start_date = ? AND End_date = ?
            WHERE Form_ID= ?";
            $this->db->query($sql, array($this->Start_date,$this->End_date,$this->Form_ID));
        */
}