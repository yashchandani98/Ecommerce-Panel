<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRegister extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->is_logged_in();   
    }
    function is_logged_in(){
        if($this->session->userdata('Pk_id')){
            redirect(base_url().'Dealer/Dashboard');
        }
    }
	public function index(){
		$this->load->view('LoginRegister/Login');
    }
    public function register(){
        $business_details = $this->MD_LoginRegister->getBusinessCategory();
        $city_details = $this->MD_LoginRegister->getCity();
        $data['business_details']=!empty($business_details)?$business_details:'[]';
        $data['city_details']=!empty($city_details)?$city_details:'[]';
        $this->load->view('LoginRegister/Register',$data);
    }
    public function registerDealer(){
        $dealerName=$this->input->post('dealername');
        $dealerEmail=trim($this->input->post('email'));
        $businessName=$this->input->post('businessName');
        $businesscategory=$this->input->post('businesscategory');
        $city=$this->input->post('city');
        $phone=$this->input->post('phone');
        $pan=$this->input->post('pan');
        $gst=$this->input->post('gst');
        $password=$this->input->post('password');
        $this->form_validation->set_rules('dealername', 'Dealer Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('businessName', 'Business Name', 'required');
        $this->form_validation->set_rules('businesscategory', 'Business Category', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('pan', 'Phone', 'required');
        $this->form_validation->set_rules('gst', 'GST', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url() . 'Dealer/Register');
            exit();
        }
        else{
        $registerResult = $this->MD_LoginRegister->registerDealer($dealerName,$dealerEmail,$businessName,$businesscategory,$city,$phone,$pan,$gst,$password);
        $this->session->set_flashdata('success', 'Your Registration request has been submitted successfully!');
        redirect(base_url() . 'Dealer/Register');
        }
    }
    public function loginCheck(){
        $dealerid=trim($this->input->post('dealerid'));
        $dealerpwd=trim($this->input->post('pwd'));
        $this->form_validation->set_rules('dealerid', 'Dealer Id', 'required|trim');
        $this->form_validation->set_rules('pwd', 'Password', 'required|trim');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url() . 'Dealer/Login');
            exit();
        }else{
            $user_details = $this->MD_LoginRegister->loginCheck($dealerid,$dealerpwd);
        if(!empty($user_details)){
            foreach($user_details as $row){
                if($row->Approved==1){
                    $arr=array(
                        'Pk_id'=>$row->Pk_id,
                        'Dealer_id'=>$row->Dealer_id,
                        'Business_name'=>$row->Business_name,
                        'Dealer_name'=>$row->Dealer_name,
                        'Email'=>$row->Email,
                        'Phone'=>$row->Phone,
                        'Pan_card'=>$row->Pan_card,
                        'Gst_number'=>$row->Gst_number,
                        'Mode'=>$row->Mode,
                        'Date_registered'=>$row->Date_registered,
                        'City_id'=>$row->City_id,
                        'Business_category_id'=>$row->Business_category_id
                    );
                    //$this->session->set_userdata('Pk_id', $row->Pk_id);
                    $this->session->set_userdata($arr);
                    //<?=$this->session->userdata('Pk_id')
                    redirect(base_url() . 'Dealer/Dashboard');
                }   
                else if($row->Approved==0){
                    $this->session->set_flashdata('error', "Your Request has not been approved yet!");
                    redirect(base_url() . 'Dealer/Login');
                }
                else{
                    $this->session->set_flashdata('error', "Something went Wrong!");
                    redirect(base_url() . 'Dealer/Login');
                }
            }
        }
        else{
            $this->session->set_flashdata('error', 'Invalid Dealer Id or Password. Please enter correct login credentials..');
            redirect(base_url() . 'Dealer/Login');
        }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url() . 'Dealer/Login');
    }
}
?>