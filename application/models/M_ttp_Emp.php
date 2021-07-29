<?php
include_once("Da_ttp_Emp.php");

class M_ttp_Emp extends Da_ttp_Emp
{//class M_ttp_emp

/*
* get_name_emp
* get name
* @input  -
* @output - 
* @author 
* @Create 
*/    
    public function get_name_emp()
    {
        $sql =
            "SELECT *
        FROM dbmc.employee
        WHERE Emp_ID = ?";
        $query = $this->db->query($sql, array($this->Emp_ID));
        return $query;
    }
    /*
* get_emp_detail
* get emp detail in database
* @input  -
* @output - 
* @author Jirayut Saifah
* @Create Date 2564-07-29
*/
    public function get_emp_detail($id)
    {
        $sql =
        "SELECT *
        FROM dbmc.employee  AS emp INNER JOIN dbmc.company AS com
        WHERE Emp_ID = $id AND emp.Company_ID=com.Company_ID";
        $query = $this->db->query(
            $sql,
            array()
        );
        return $query;
    }

/*
* get_emp
* get Emp_ID in database
* @input  -
* @output - 
* @author Niphat Kuhokciw
* @Create Date 2564-07-28
*/
    public function get_emp()
    {//get Emp_ID
        $sql = "SELECT * 
            FROM dbmc.employee AS emp
            INNER JOIN dbmc.group_secname AS gsec 
            ON gsec.Sectioncode = emp.Sectioncode_ID
            INNER JOIN dbmc.position AS pos
            ON pos.Position_ID = emp.Position_ID
            INNER JOIN dbmc.sectioncode AS sec
            ON sec.Sectioncode = emp.Sectioncode_ID
            INNER JOIN ttps_database.user_login AS ulog
            ON emp.Emp_ID = ulog.Enp_ID
            WHERE emp.Emp_ID=?";
        $query = $this->db->query($sql,array($this->Emp_ID));
        return $query;
    }//end get_emp
}//end class M_ttp_emp