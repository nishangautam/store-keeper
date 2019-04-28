<?php
class Supplier_model extends CI_Model{
	public function __construst(){
		$this->load->database();
	}
	public function get_supplier($slug=False){
		if($slug === FALSE){
				$this->db->order_by('supplier_id','DESC');
				$query=$this->db->get('supplier');
				return $query->result_array();
			}
			$query=$this->db->get_where('supplier',array('slug'=>$slug));
			return $query->row_array();
	}
	public function create_supplier(){
		$slug=url_title($this->input->post('title'));
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$slug,
				'supplier_name'=>$this->input->post('supplier_name'),
				'supplier_address'=>$this->input->post('supplier_address'),
				'supplier_email'=>$this->input->post('supplier_email'),
				'supplier_contact'=>$this->input->post('supplier_contact')
			);
			return $this->db->insert('supplier',$data);
	}
	public function delete_supplier($id){
			$this->db->where('supplier_id',$id);
			$this->db->delete('supplier');
			return true;
	}
	public function update_supplier(){
		$slug=url_title($this->input->post('title'));
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$slug,
				'supplier_name'=>$this->input->post('supplier_name'),
				'supplier_address'=>$this->input->post('supplier_address'),
				'supplier_email'=>$this->input->post('supplier_email'),
				'supplier_contact'=>$this->input->post('supplier_contact')
			);
			$this->db->where('supplier_id',$this->input->post('supplier_id'));
			return $this->db->update('supplier',$data);
	}
	
}