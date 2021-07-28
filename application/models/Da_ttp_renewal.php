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
}