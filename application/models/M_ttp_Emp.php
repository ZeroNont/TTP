<?php
include_once("Da_ttp_Emp.php");

class M_ttp_Emp extends Da_ttp_Emp
{
    public function get_name_emp()
    {
        $sql =
            "SELECT *
        FROM dbmc.employee
        WHERE Emp_ID = ?";
        $query = $this->db->query($sql, array($this->Emp_ID));
        return $query;
    }
    public function get_emp()
    {
        $sql = "SELECT * 
    FROM dbmc.employee AS emp
    INNER JOIN dbmc.group_secname AS gsec 
    ON gsec.Sectioncode = emp.Sectioncode_ID
    INNER JOIN dbmc.position AS pos
    ON pos.Position_ID = emp.Position_ID
    INNER JOIN dbmc.sectioncode AS sec
    ON sec.Sectioncode = emp.Sectioncode_ID
    WHERE emp.Emp_ID=?";
$query = $this->db->query($sql,array($this->Emp_ID));
return $query;
    }
}
