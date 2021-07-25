<?php
include_once("Da_ttp_report.php");

class M_ttp_report extends Da_ttp_report
{
    public function get_department()
    {
        $sql = "SELECT *
            FROM dbmc.department";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_all_requested_form()
    {
        $sql = "SELECT * 
                    FROM ttps_database.requested_form";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_all_approval()
    {
        $sql = "SELECT * 
                    FROM ttps_database.approval";
        $query = $this->db->query($sql);
        return $query;
    }

}