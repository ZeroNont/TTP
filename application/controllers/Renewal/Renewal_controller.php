
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Renewal_controller extends MainController
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/*
	* index
	* 
	* @input 
	* @output 
	* @author 	Kunanya Singmee
	* @Create Date 2564-7-10
	*/
	function show_renewal()
	{
		$this->load->model('M_renewal', 'ttp');
        $data['arr_renew'] = $this->ttp->get_all()->result();
		$this->output('renewal/v_renewal',$data);
	}
	// function index()

	function show_re_form()
	{
		$this->output('renewal/v_renew_form');
	}

}
// 