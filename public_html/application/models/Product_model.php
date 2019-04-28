<?php
class Product_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_product($slug = FALSE){
		if($slug === FALSE){

			$this->db->order_by('product.product_id','DESC');
			$this->db->join('category','category.category_id=product.category_id');
			$query =$this->db->get('product');
			return $query->result_array();
		}
		$query=$this->db->get_where('product',array('slug' => $slug));
			return $query->row_array();
	}
	public function create_product(){
		$slug=url_title($this->input->post('title'));
		$data=array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'product_name'=>$this->input->post('product_name'),
			'product_price'=>$this->input->post('product_price'),
			'category_id'=>$this->input->post('category_id')
			
		);
		return $this->db->insert('product',$data);
	}
	
	public function delete_product($id){
		$this->where('product_id',$id);
		$this->db->delete('product');
		return true;
	}
}