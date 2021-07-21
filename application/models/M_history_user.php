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
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Officer
                FROM requested_form
                WHERE Emp_id= $id";
        return $this->db->query($sql, array($this->Emp_id));
    }

    public function get_history_em()
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Officer
                FROM requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_ap()
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Officer
                FROM requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_sp()
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Officer
                FROM requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_history_hr()
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Officer
                FROM requested_form ";

        $query = $this->db->query($sql);
        return $query;
    }
}