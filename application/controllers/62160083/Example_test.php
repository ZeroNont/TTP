<!--
/*
* 62160083
* Controller
* @input  -
* @output -
* @author Natthanit
* @Create Date 2564-10-12
*/
-->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{

    /*
    * index
    * display page v_62160083
    * @input  -
    * @output -
    * @author Natthanit
    * @Create Date 2564-10-12
    */
    function index()
    {
        $this->output('consent/v_62160083');
    }
}
