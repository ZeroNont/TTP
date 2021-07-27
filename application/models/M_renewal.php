<!--
    M_renewal
    select to get data
    @input -
    @output -
    @author Nattakorn
    Create date 2564-07-19
    Update date 2564-07-27
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('Da_renewal.php');
class M_renewal extends Da_renewal
{

    public function __construct()
    {
        parent::__construct();
    }

    //เอาค่าทั้งหมด
    public function get_all()
    {
        $sql = "SELECT *
                FROM ttps_database.requested_form
                ORDER BY Requested_date ASC ";

        $query = $this->db->query($sql);
        return $query;
    }

    //เอาค่าจากตารางformfile
    public function get_formfile()
    {
        $sql =
        "SELECT *
            FROM ttps_database.form_file";
        $query = $this->db->query($sql);
        return $query;
    }

    //เอาค่าจากตารางcompany
    public function get_company()
    {
        $sql =
        "SELECT *
            FROM dbmc.company";
        $query = $this->db->query($sql);
        return $query;
    }

    //เอาค่าจากตาราง supervisor 
    public function get_supervisor()
    {
        $sql =
        "SELECT *
        FROM dbmc.employee";
        $query = $this->db->query($sql);
        return $query;
    }
    //เอาค่าจากแพลน
    public function get_plan()
    {
        $sql =
            "SELECT *
            FROM ttps_database.plant AS pla INNER JOIN dbmc.employee AS emp
            ON pla.Emp_ID = emp.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    //เอาคาสเตตัส
    public function get_status()
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form As stat 
            WHERE CURDATE() <= End_date  AND stat.Status = 4 
           
            LIMIT 0,30";
        $query = $this->db->query($sql);
        return $query;
    }

    //เอาค่าเฉพาะวันที่
    public function get_bydate($Form_ID)
    {
        $sql =
            "SELECT * 
                FROM  ttps_database.requested_form
                
                WHERE  Form_ID=$Form_ID ";
        $query = $this->db->query($sql);
        return $query;
    }

    
    
}