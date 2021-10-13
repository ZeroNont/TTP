<?php
/*
* 62160102
* Controller
* @input  - 
* @output -
* @author Ponprapai
* @Create Date 2564-10-12
*/
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{

    /*
    * index
    * display page v_62160102
    * @input  - 
    * @output -
    * @author Ponprapai
    * @Create Date 2564-10-12
    */
    function index()
    {
        $this->output('consent/v_62160102');
    }
}