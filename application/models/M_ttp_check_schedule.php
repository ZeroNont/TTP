<!--
    M_ttp_check_schedule
    Model for schedule module
    @input -
    @output -
    @author Phatchara
    Create date 
    Update date 
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once("Da_ttp_check_schedule.php");


class M_ttp_check_schedule extends Da_ttp_check_schedule
{

	public function __construct()
	{
		parent::__construct();
	}

    public function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_by_id($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS requested
                WHERE requested.Emp_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    
    public function get_employee($id)
    {
        $sql = "SELECT *
        FROM dbmc.employee
        WHERE $id = employee.Emp_ID";

        $query = $this->db->query($sql);
        return $query;
    }
}