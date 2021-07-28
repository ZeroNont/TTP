<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_ttp_request.php');

class M_ttp_request extends Da_ttp_request
{

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                INNER JOIN dbmc.employee 
                ON  requested_form.Emp_ID = employee.Emp_ID ";

        $query = $this->db->query($sql);
        return $query;
    }

    function get_all_sup()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE app.Supervisor_ID = ? AND form.Status = ?";

        $query = $this->db->query($sql,array($this->Supervisor_ID,$this->Status));
        return $query;
    }

    function get_by_id($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                INNER JOIN ttps_database.form_file AS form
                ON  req.Form_ID = form.Form_ID
                WHERE req.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_hr_no()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                WHERE req.HR_No LIKE 'HR%'
                ORDER BY req.HR_No DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query;
    }

    function update_app()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.Supervisor_date = CURRENT_TIMESTAMP()
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->Form_ID));
    } 
    
}