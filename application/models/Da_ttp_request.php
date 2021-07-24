<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'ttps_model.php';

class Da_ttp_request extends ttps_model
{
    
    public function __construct()
    {
        parent::__construct();
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