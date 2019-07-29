<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class MD_LoginRegister extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function loginCheck($id,$pwd){
        $this->db->select('*');
        $this->db->from('tbl_dealer');
        $this->db->where('Dealer_id', $id);
        $this->db->where('Pwd', base64_encode($pwd));
        $this->db->join('tbl_dealer_request', 'tbl_dealer.Pk_id = tbl_dealer_request.Fk_id');
        $user_details=$this->db->get()->result();
        return $user_details;
    }
    public function getBusinessCategory(){
        $this->db->select('*');
        $this->db->from('tbl_business_category');
        $this->db->where('Status', 1);
        $business_details=$this->db->get()->result();
        return $business_details;
    }
    public function getCity(){
        $this->db->select('*');
        $this->db->from('tbl_city');
        $city_details=$this->db->get()->result();
        return $city_details;
    }
    public function registerDealer($dealerName,$dealerEmail,$businessName,$businesscategory,$city,$phone,$pan,$gst,$password){
        $dealerId=mt_rand(100000, 999999);
        $data=array('Dealer_id'=>$dealerId,'Business_name'=>$businessName,'Business_category_id'=>$businesscategory,
        'City_id'=>$city,'Dealer_name'=>$dealerName,'Email'=>$dealerEmail,'Phone'=>$phone,'Pan_card'=>$pan,'Gst_number'=>$gst,'Pwd'=>base64_encode($password));
        $this->db->insert('tbl_dealer',$data);
        $insertedId=$this->db->insert_id();
        $data=array('Fk_id'=>$insertedId);
        $this->db->insert('tbl_dealer_request',$data);
        return 1;
    }
}