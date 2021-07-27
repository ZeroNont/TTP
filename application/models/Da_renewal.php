
<?php
include_once("ttps_model.php");


class Da_renewal extends ttps_model
{
    public $End_date;
    function construct()
    {
        parent::construct();
    }

    function update()
    {
        $sql = "UPDATE ttps_database.requested_form 
        SET End_date = ?
        WHERE Form_ID = ?";
        $this->db->query($sql, array($this->End_date, $this->Form_ID));
    }
}