<?php
class Purchase_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_purchase($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('purchase.purchase_id','DESC');
			$this->db->join('supplier','supplier.supplier_id=purchase.supplier_id');
			$this->db->join('product','product.product_id=purchase.product_id');
			
			$query =$this->db->get('purchase');
			return $query->result_array();
			}
			$query=$this->db->get_where('purchase',array('slug' => $slug));
			return $query->row_array();


	}
	public function create_purchase(){
		$slug=url_title($this->input->post('title'));
		$qty=$this->input->post('quantity');
		$price=$this->input->post('price');
		$amt=$this->input->post('final_amount');
		$amt=$price*$qty;
		$this->db->select('product_id,product_quantity');
		$this->db->from('product');
		$query = $this->db->get();
		$pro=$this->input->post('product_id');
		$oldqty=$this->input->post('product_quantity');
		$oldqty+=$qty;
		print_r($pro);
		print_r($oldqty);
		// var_dump($query);
		die();
		
		
		$data=array(
			'title'=>$this->input->post('title'),
			'slug'=>$slug,
			'supplier_id'=>$this->input->post('supplier_id'),
			'product_id'=>$this->input->post('product_id'),
			'price'=>$this->input->post('price'),
			'quantity'=>$this->input->post('quantity'),
			'final_amount'=>$amt
			
		);
	return	$this->db->insert('purchase',$data);
	

	}
}