<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }
    function is_logged_in(){
        if(!$this->session->userdata('Pk_id')){
            redirect(base_url().'Dealer/Login');
        }
    }
    function dashboard(){
        $this->load->view('main/dashboard');
    }
    public function accountEdit(){
        $this->load->view('main/AccountEdit');
    }
}
    ?>