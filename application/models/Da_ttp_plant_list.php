<!-- 
Table Name:ttps_database.requested_form
Describtion:Requested Form
@author:Jirayut
@Create Date:16/07/2021


 -->
<?php
include_once("ttps_model.php");


class Da_ttp_plant_list extends ttps_model
{
    // Table Name:ttps_database.plant
    // Describtion:Approve Plant management
    // @author:Jirayut
    // @Create Date:20/07/2021


    function construct()
    {
        parent::construct();
    }
    public function insert()
    {
        $sql = "INSERT INTO ttps_database.plant(Emp_ID,Plant_name,Plant_No) 
                VALUES (?,?,?)";
        $this->db->query($sql, array($this->Emp_ID, $this->Plant_name, $this->Plant_No));
    }
    // *insert
    // *insert approve plant in database
    // *@input Emp_ID,Plant_name,Plant_No
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021
    public function update()
    {
        $sql = "UPDATE ttps_database.plant 
        SET Emp_ID=?,Plant_name=?,Plant_No=?
        WHERE Plant_ID=?;";
        $this->db->query($sql, array($this->Emp_ID, $this->Plant_name, $this->Plant_No, $this->Plant_ID));
    }
    // *update
    // *update approve plant in database
    // *@input Emp_ID,Plant_name,Plant_No
    // *@output -
    // *@author Jirayut Saifah
    // *@Create Date 20/07/2021

}