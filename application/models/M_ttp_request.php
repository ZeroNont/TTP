<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_ttp_request.php');

class M_ttp_request extends Da_ttp_request
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                INNER JOIN dbmc.employee 
                ON  requested_form.Emp_ID = employee.Emp_ID ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_by_id($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                INNER JOIN ttps_database.form_file
                ON  requested_form.Form_ID = form_file.Form_ID
                WHERE requested_form.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

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