<?php
include_once("Da_ttp_licence.php");

class M_ttp_licence extends Da_ttp_licence
{

    // Table Name:ttps_database.requested_form
    // Describtion:Requested Form
    // @author:Jirayut
    // @Create Date:16/07/2021



    public function get_form($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form Where Emp_ID=$id AND Status=4 ";
        $query = $this->db->query($sql);
        return $query;
    }

    // *get_form
    // *get form form database
    // *@input Emp_ID
    // *@output requested form if Emp_ID = $id and Status=4
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021
    public function get_form_id()
    {
        $sql =
        "SELECT *
            FROM ttps_database.requested_form ORDER BY Form_ID DESC
LIMIT 1  ";
        $query = $this->db->query($sql);
        return $query;
    }

    // *get_form_id
    // *get form data form database
    // *@input Emp_ID
    // *@output last requested form 
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function get_employee($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.employee INNER JOIN dbmc.position Where Emp_ID=$id  ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_employee
    // *get employee detail form database
    // *@input Emp_ID
    // *@output employee detail if Emp_ID = $id 
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function get_position_id($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN dbmc.position AS pos ON emp.Position_ID=pos.Position_ID Where Emp_ID=$id  ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_position_id
    // *get position detail form database
    // *@input Emp_ID
    // *@output position detail if Emp_ID = $id 
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function get_company()
    {
        $sql =
            "SELECT *
            FROM dbmc.company  ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_company
    // *get company detail form database
    // *@input -
    // *@output company detail 
    // *@author Jirayut Saifah
    // *@Create Date 17/07/2021

    public function get_company_by_id($id)
    {
        $sql =
            "SELECT *
            FROM dbmc.company AS com INNER JOIN ttps_database.requested_form AS req ON req.Company_ID=com.Company_ID WHERE req.Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }

    // *get_company_by_id
    // *get company detail form database
    // *@input Form_ID
    // *@output company detail if Form_ID = $id 
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_supervisor()
    {
        $sql =
            "SELECT *
        FROM dbmc.employee AS emp INNER JOIN dbmc.position AS pos where emp.Position_ID=pos.Position_ID";
        $query = $this->db->query($sql);
        return $query;
    }

    // *get_supervisor
    // *get supervisor detail form database
    // *@input -
    // *@output supervisor detail 
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_supervisor_by_id($id)
    {
        $sql =
            "SELECT *
        FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS app ON emp.Emp_ID = app.Supervisor_ID  WHERE app.Form_ID=$id  ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_supervisor_by_id
    // *get supervisor detail form database
    // *@input Form_ID
    // *@output supervisor detail if Form_ID=$id
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_plant_by_id($id)
    {
        $sql =
            "SELECT *
       FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS app INNER JOIN ttps_database.plant  where Form_ID=$id AND emp.Emp_ID=app.Approve_plant_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_plant_by_id
    // *get plant detail form database
    // *@input Form_ID
    // *@output plant detail if Form_ID=$id
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_plant()
    {
        $sql =
            "SELECT *
            FROM ttps_database.plant AS pla INNER JOIN dbmc.employee AS emp
            ON pla.Emp_ID = emp.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_plant
    // *get plant detail form database
    // *@input Form_ID
    // *@output plant detail 
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_history_by_id($id)
    {
        $sql =
        "SELECT *
            FROM ttps_database.requested_form AS req INNER JOIN ttps_database.schedule AS sch
            ON req.Form_ID = sch.Form_ID WHERE req.Form_ID = $id ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_plant
    // *get plant detail form database
    // *@input Form_ID
    // *@output plant detail 
    // *@author Jirayut Saifah
    // *@Create Date 18/07/2021

    public function get_status($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form req WHERE req.Emp_ID=$id AND req.Status < 5 AND req.Form_count <= 3  AND CURDATE() <= End_date 
            LIMIT 0,30  ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_status
    // *get form datail form database
    // *@input Emp_ID
    // *@output Form detail if form status < 5 and form has not expired.
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function get_form_by_id($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.requested_form Where Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_form_by_id
    // *get form datail form database
    // *@input Form_ID
    // *@output Form detail if Form_ID is match
    // *@author Jirayut Saifah
    // *@Create Date 19/07/2021

    public function get_file_by_id($id)
    {
        $sql =
            "SELECT *
            FROM ttps_database.form_file Where Form_ID=$id ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_file_by_id
    // *get file location  form database
    // *@input Form_ID
    // *@output file location if Form_ID is match
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function get_sec()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN dbmc.sectioncode AS sec ON emp.Sectioncode_ID = sec.Sectioncode ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_sec
    // *get sectioncode  form database
    // *@input -
    // *@output section detail 
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function get_approve()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.Approve_plant_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_approve
    // *get approve detail  form database
    // *@input -
    // *@output approve detail
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function get_HR()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.HR_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_HR
    // *get HR detail form database
    // *@input -
    // *@output HR detail 
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function get_Supervisor_ID()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.approval AS sec ON emp.Emp_ID = sec.Supervisor_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_Supervisor_ID
    // *get Supervisor detail  form database
    // *@input -
    // *@output Supervisor detail
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

    public function get_Prepare()
    {
        $sql =
            "SELECT *
            FROM dbmc.employee AS emp INNER JOIN ttps_database.requested_form AS sec ON emp.Emp_ID = sec.Emp_ID";
        $query = $this->db->query($sql);
        return $query;
    }
    // *get_Prepare
    // *get requester detail  form database
    // *@input -
    // *@output requester detail 
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021
}