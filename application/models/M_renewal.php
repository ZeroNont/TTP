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
                FROM requested_form";

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