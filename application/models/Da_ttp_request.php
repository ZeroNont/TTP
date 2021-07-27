<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('ttps_model.php');

class Da_ttp_request extends ttps_model
{
    public $reject_reason;
    
    function __construct()
    {
        parent::__construct();
    }

    function insert_reason()
    {
        $sql = "INSERT INTO ttps_database.approval(reject_reason) 
                VALUES (?)";
        $this->db->query($sql, array($this->reject_reason));

    }

    function update_form()
    {
        $sql = "UPDATE ttps_database.requested_form AS req
                SET req.Status = ?
                WHERE req.Form_ID = ? "; 
        $this->db->query($sql, array($this->Status,$this->Form_ID));
    } 

    
}