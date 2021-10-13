<!-- 
/*
* 62160095
* Controller
* @input  - 
* @output -
* @author Niphat
* @Create Date 2564-10-13
*/
-->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{

    /*
    * index
    * display page v_62160095
    * @input  - 
    * @output -
    * @author Niphat
    * @Create Date 2564-10-13
    */
    function index()
    {
        $this->output('consent/v_62160095');
    }
}