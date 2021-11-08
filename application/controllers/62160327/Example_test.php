-<!--
    Form_62160327
    Controller for v_form_62160327
    @input -
    @output -
    @author Thitima Popila 
    Create date 2564-10-13  
    Update date 
-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{
 /*
	* index
	* call v_form_62160327
	* @input 	-
	* @output 	-
	* @author 	Thitima Popila
	* @Create   Date 2564-10-13   
	* @Update   Date 
	*/
    function index()
    {
        $this->output('consent/v_62160327');
    }
}
       