<?php
include_once("Da_ttp_history.php");

class M_ttp_history extends Da_ttp_history
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
                WHERE Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_em($id)
    {
            $sql = "SELECT * 
                    FROM ttps_database.requested_form 
                    WHERE Emp_ID = $id";
            $query = $this->db->query($sql);
            return $query;
    }

    public function get_history_ap($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form 
                WHERE Approve_Plant = $id";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_sp($id)
    {
        $sql = "SELECT *
                    FROM ttps_database.requested_form 
                    WHERE Supervisor = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_hr()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_form_list($id)
    {
        $sql = "SELECT * 
                FROM (ttps_database.requested_form AS request
                INNER JOIN dbmc.employee AS emp ON request.Emp_ID = emp.emp_ID)
                INNER JOIN ttps_database.approval AS approval ON request.Form_ID = approval.Form_ID
                WHERE approval.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    // public function get_approval()
    // {
    //     $sql = "SELECT * 
    //             FROM ttps_database.approval 
    //             INNER JOIN ttps_database.requested_form
    //             ON  approval.Form_ID = requested_form.Form_ID ";
    //     $query = $this->db->query($sql);
    //     return $query;
    // }

    public function get_form_file()
    {
        $sql = "SELECT * 
                FROM ttps_database.requested_form 
                INNER JOIN ttps_database.form_file
                ON  requested_form.Form_ID = form_file.Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

}