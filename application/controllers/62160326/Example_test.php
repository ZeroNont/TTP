<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/../MainController.php");

class Example_test extends MainController
{

    function index()
    {
        $this->output('consent/v_62160326.html');
    }
}