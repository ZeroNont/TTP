<!--
    M_ttp_history
    Model for history module
    @input -
    @output -
    @author Phatchara
    Create date 
    Update date 
-->
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
                FROM ttps_database.requested_form AS requested
                INNER JOIN dbmc.employee AS emp
                ON requested.Emp_ID = emp.Emp_ID";

        $query = $this->db->query($sql);
        return $query;
    }
    
    public function get_by_id($id)
    {
            $sql = "SELECT *
                    FROM ttps_database.requested_form AS requested
                    WHERE requested.Form_ID = $id";
            $query = $this->db->query($sql);
            return $query;

    }

    public function get_history_em($id)
    {
            $sql = "SELECT * 
                    FROM ttps_database.requested_form AS requested
                    WHERE requested.Emp_ID = $id";
            $query = $this->db->query($sql);
            return $query;
    }

    public function get_form_list()
    {
        $sql = "SELECT * 
        FROM ttps_database.requested_form AS req
        INNER JOIN dbmc.employee AS emp
        ON  req.Emp_ID = emp.Emp_ID 
        INNER JOIN ttps_database.approval 
        ON  req.Form_ID = approval.Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_form_file($id)
    {
        $sql = "SELECT * 
                FROM ttps_database.form_file
                where $id = form_file.Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

}