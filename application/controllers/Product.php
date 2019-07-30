<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
	public function add(){
		$this->load->view('main/ProductRegister');
    }
    public function register(){
        $prodName = $this->input->post('prodName');
        $prodSize = $this->input->post('prodSize');
        $prodColour = $this->input->post('prodColour');
        $origRate = $this->input->post('origRate');
        $finRate = $this->input->post('finRate');
        $prodCat = $this->input->post('prodCat');
        $prodBrand = $this->input->post('prodBrand');
        $mode = $this->input->post('mode');
        $shortDesc = $this->input->post('shortDesc');
        $longDesc = $this->input->post('longDesc');
        $this->form_validation->set_rules('prodName', 'Product Name', 'required');
        $this->form_validation->set_rules('prodSize', 'Product Size', 'required');
        $this->form_validation->set_rules('prodColour', 'Product Colour', 'required');
        $this->form_validation->set_rules('prodCat', 'Product Category', 'required');
        $this->form_validation->set_rules('finRate', 'Rate', 'required');
        $this->form_validation->set_rules('prodBrand', 'Product Brand', 'required');
        $this->form_validation->set_rules('mode', 'Mode', 'required');
        $this->form_validation->set_rules('shortDesc', 'Short Description', 'required');
        $this->form_validation->set_rules('longDesc', 'Long Description', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url() . 'Product/Add');
            exit();
        }
        else{
            $lastId=$this->MD_Products->insertProduct($prodName,$prodSize,$prodColour,$origRate,$finRate,$prodCat,$prodBrand,$mode,$shortDesc,$longDesc);
            $data=array('Fk_id'=>$lastId);
            $this->MD_Products->insertProductRequest($data);
            if(!empty($_FILES['prodImages']['name'])){
                $number=sizeof($_FILES['prodImages']['tmp_name']);
                $files=$_FILES['prodImages'];
                for($i=0;$i<$number;$i++){
                    if($_FILES['prodImages']['error'][$i]!=0){
                        $this->form_validation->set_message('prodImages','There was a Problem while uploading file');
                        return FALSE;
                    }
                }
                $config['upload_path'] = FCPATH.'uploads/';
                $config['allowed_types']='jpg|jpeg|png';
                $insert=array();
                //$config['encrypt_name']=true;
                for($i=0;$i<$number;$i++){
                    $name=rand(100000,999999).$files['name'][$i];
                    $_FILES['prodImages']['name']=$name;
                    $_FILES['prodImages']['type']=$files['type'][$i];
                    $_FILES['prodImages']['tmp_name']=$files['tmp_name'][$i];
                    $_FILES['prodImages']['error']=$files['error'][$i];
                    $_FILES['prodImages']['size']=$files['size'][$i];
                    $this->upload->initialize($config);
                    if($this->upload->do_upload('prodImages')){
                        $data = $this->upload->data();
                        $insert[$i]['Fk_id']=$lastId;
                        $insert[$i]['Image']=$data['full_path'];
                        $insert[$i]['Status']=1;
                        // chmod($fullPath,0777);
                        // echo '<pre>';
                        // print_r($data);
                        // echo '</pre>';
                    }
                }
                $this->MD_Products->insertProductImages($insert);
            }
            $this->session->set_flashdata('success', 'Your Product request has been submitted successfully!');
            redirect(base_url() . 'Product/Add');   
        }
    }
}