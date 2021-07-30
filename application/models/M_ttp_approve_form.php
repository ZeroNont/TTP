<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_ttp_approve_form.php');

class M_ttp_approve_form extends Da_ttp_approve_form
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

    function get_all_hr()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE form.Status = ?";

        $query = $this->db->query($sql,array($this->Status));
        return $query;
    }

    function get_all_plant()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS form
                INNER JOIN ttps_database.approval AS app
                ON app.Form_ID = form.Form_ID
                INNER JOIN dbmc.employee AS emp
                ON form.Emp_ID = emp.Emp_ID 
                WHERE app.Approve_plant_ID = ? AND form.Status = ?";

        $query = $this->db->query($sql,array($this->Approve_plant_ID,$this->Status));
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

    function get_history_approve($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.Supervisor_ID = emp.Emp_ID
                WHERE app.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_history_approve_hr($id)
    {
        $sql = "SELECT *
                FROM ttps_database.approval AS app
                INNER JOIN dbmc.employee AS emp
                ON  app.HR_ID = emp.Emp_ID
                WHERE app.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }

    function update_app()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.HR_date = CURRENT_TIMESTAMP() , app.HR_ID = ?
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->HR_ID,$this->Form_ID));
    } 

    function update_app_plant()
    {
        $sql = "UPDATE ttps_database.approval AS app
                SET app.Approval_plant_date = CURRENT_TIMESTAMP()
                WHERE app.Form_ID = ? "; 
        $this->db->query($sql, array($this->Form_ID));
    } 

    function get_history_user($id)
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form AS req
                INNER JOIN dbmc.employee AS emp
                ON  req.Emp_ID = emp.Emp_ID
                WHERE req.Form_ID = $id";
        $query = $this->db->query($sql);
        return $query;
    }
    
}