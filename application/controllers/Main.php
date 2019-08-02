<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    function dashboard(){
        $this->load->view('main/dashboard');
    }
}
    ?>