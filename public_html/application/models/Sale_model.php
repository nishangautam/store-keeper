<?php
class Sale_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_sale($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('sale.sale_id','DESC');
			$this->db->join('customer','customer.customer_id=sale.customer_id');
			$this->db->join('product','product.product_id=sale.product_id');
			
			$query =$this->db->get('sale');
			return $query->result_array();
			}
			$query=$this->db->get_where('sale',array('slug' => $slug));
			return $query->row_array();


	}
	
	public function create_sale(){
		$slug=url_title($this->input->post('title'));
		$qty=$this->input->post('quantity');
		$price=$this->input->post('price');
		$amt=$this->input->post('final_amount');
		$amt=$price*$qty;
		
		// die();
		$data=array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'customer_id'=>$this->input->post('customer_id'),
			'product_id'=>$this->input->post('product_id'),
			'price'=>$this->input->post('price'),
			'quantity'=>$this->input->post('quantity'),
			'final_amount'=>$amt
			
		);
	return	$this->db->insert('sale',$data);

	}
}