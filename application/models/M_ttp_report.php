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
}