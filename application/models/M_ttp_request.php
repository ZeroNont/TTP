<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once 'Da_ttp_request.php';

class M_ttp_request extends Da_ttp_request
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $sql = "SELECT Form_ID, Item, Start_date, End_date, Supervisor
                FROM requested_form";

        $query = $this->db->query($sql);
        return $query;
    }
    
}