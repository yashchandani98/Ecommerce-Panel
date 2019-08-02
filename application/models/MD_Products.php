<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MD_Products extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function insertProduct($prodName,$prodSize,$prodColour,$origRate,$finRate,$prodCat,$prodBrand,$mode,$shortDesc,$longDesc){
        $ProductId=mt_rand(1000000000, 9999999999);
        $data=array('Product_id'=>$ProductId,'Product_name'=>$prodName,'Fk_id'=>$this->session->userdata('Pk_id'),'Short_desc'=>$shortDesc
        ,'Long_desc'=>$longDesc,'Original_rate'=>$origRate,'Discounted_rate'=>$finRate,'Mode'=>$mode,'Category_id'=>$prodCat,'Size'=>$prodSize,'Colour'=>$prodColour);
        $this->db->insert('tbl_products',$data);
        return $this->db->insert_id();
    }
    public function insertProductImages($insert){
        $this->db->insert_batch('tbl_product_image',$insert);
    }
    public function insertProductRequest($data){
        $this->db->insert('tbl_products_request',$data);
    }
}