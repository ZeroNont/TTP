<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once ('ttps_model.php');

class Da_ttp_request extends ttps_model
{
    public $reject_reason;
    
    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $sql = "INSERT INTO ttps_database.approval(reject_reason) 
                VALUES (?)";
        $this->db->query($sql, array($this->reject_reason));

    }

    // public function insert_approval()
    // {
    //     $sql = "INSERT INTO requested_form(Form_ID,Layout_location,Plan_location) 
    //             VALUES (?,?,?)";

    //     $this->db->query($sql, array($this->Form_ID, $this->Layout_location, $this->Plan_location));
    // }

    // public function update_request_form()
    // {
    //     $sql = "UPDATE requested_form
    //             SET fr_first_name = ?, fr_last_name = ?, fr_status = ?, fr_pf_id = ?
    //             WHERE fr_id = ? "; 
    //     $this->db->query($sql, array($this->fr_first_name, $this->fr_last_name, $this->fr_status, $this->fr_pf_id, $this->fr_id));
    // } 
}