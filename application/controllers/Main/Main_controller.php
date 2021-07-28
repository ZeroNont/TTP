<!--
    Main_controller
    controller of main page
    @input -
    @output -
    @author Nattakorn
    Create date 2564-07-16
    Update date 2564-07-18
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Main_controller extends MainController
{
	//แสดงหน้าจอหลัก
	function show_main()
	{
		
		$this->output('consent/v_main');
	}
	// function index()

}
// 