<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once 'Da_renewal.php';
class M_renewal extends Da_renewal
{

    public function __construct()
    {
        parent::__construct();
    }


    public function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                ORDER BY Requested_date ASC ";

        $query = $this->db->query($sql);
        return $query;
    }

    public function get_formfile()
    {
        $sql =
        "SELECT *
            FROM ttps_database.form_file";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_company()
    {
        $sql =
        "SELECT *
            FROM dbmc.company";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_supervisor()
    {
        $sql =
        "SELECT *
        FROM dbmc.employee";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_plan()
    {
        $sql =
            "SELECT *
            FROM ttps_database.plant AS pla INNER JOIN dbmc.employee AS emp
            ON pla.Emp_ID = emp.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_status()
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form WHERE CURDATE() <= End_date  
            LIMIT 0,30";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_bydate($Form_ID)
    {
        $sql =
            "SELECT * 
                FROM  ttps_database.requested_form
                
                WHERE  Form_ID=$Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    
    //public function get_by_id($bk_id)
   //{
        //$sql = "SELECT * 
               // FROM {$this->db_name}.ossd_book
             
				//WHERE bk_id=$bk_id";
        //$query = $this->db->query($sql);
        //return $query;
    //}
}