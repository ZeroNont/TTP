<?php
include_once("Da_history_user.php");

class M_history_user extends Da_history_user
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $sql = "SELECT *
                FROM requested_form";

        $query = $this->db->query($sql);
        return $query;
    }
    
    public function get_by_id($id)
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Supervisor, Tell, Reason
                FROM requested_form
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
                FROM requested_form 
                WHERE Approve_Plant = $id";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_sp($id)
    {
        $sql = "SELECT *
                    FROM requested_form 
                    WHERE Supervisor = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_hr()
    {
        $sql = "SELECT *
                FROM requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_form_list()
    {
        $sql = "SELECT * 
                FROM requested_form 
                INNER JOIN employee
                ON  requested_form.Emp_ID = employee.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_approval()
    {
        $sql = "SELECT * 
                FROM approval 
                INNER JOIN requested_form
                ON  approval.Form_ID = requested_form.Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_form_file()
    {
        $sql = "SELECT * 
                FROM requested_form 
                INNER JOIN form_file
                ON  requested_form.Form_ID = form_file.Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }



}