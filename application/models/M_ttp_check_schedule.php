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
                FROM ttps_database.requested_form
                WHERE Emp_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }
}