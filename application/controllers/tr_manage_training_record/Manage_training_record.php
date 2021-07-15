<?php
/*
* Trs_Controller
* Form Management
* @input  -   
* @output -
* @author Kunanya Singmee
* @Create Date 2564-7-10
*/
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");


class Manage_training_record extends MainController {

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
	function index()
	{
		$this->output('/consent/tr_manage_training_record/v_manage_training_record');
	}
	// function index()
	function info_training_data()
	{
		$this->output('/consent/tr_manage_training_record/v_info_training_record');
	}
	// function create_training_data()
	function create_training_data()
	{
		$this->output('/consent/tr_manage_training_record/v_create_training_record');
	}
	// function create_training_data()
	function edit_training_data()
	{
		$this->output('/consent/tr_manage_training_record/v_edit_training_record');
	}
	// function create_training_data()
 
}
// 