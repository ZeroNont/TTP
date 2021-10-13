<?php
/*
* 62160015
* Example_tast
* @input  -   
* @output -
* @author Pontakon
* @Create Date 13-10-2564
*/
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_tast extends MainController
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
    * 62160015
    * Example_tast_62160015
    * @input  -   
    * @output -
    * @author Pontakon
    * @Create Date 13-10-2564
    */
    function index()
    {
         $this->output('consent/v_62160015');
    }
    // function index
}