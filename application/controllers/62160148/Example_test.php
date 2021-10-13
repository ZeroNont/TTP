<!-- 
/*
* 62160148
* Controller Example_test
* @input  - 
* @output -
* @author Chakrit Boonprasert
* @Create Date 13-10-2564
*/
-->

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{

    /*
    * index
    * call function index and display v_62160148
    * @input  - 
    * @output -
    * @author Chakrit Boonpraert
    * @Create Date 13-10-2564
    */
    function index()
    {
        $this->output('consent/v_62160148');
    }
}
