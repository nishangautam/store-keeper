<?php 
	class Customer_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_customer($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('customer_id','DESC');
				$query=$this->db->get('customer');
				return $query->result_array();
			}
			$query=$this->db->get_where('customer',array('slug'=>$slug));
			return $query->row_array();
		}
		public function create_customer(){
			$slug=url_title($this->input->post('title'));
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$slug,
				'customer_name'=>$this->input->post('customer_name'),
				'customer_address'=>$this->input->post('customer_address'),
				'customer_email'=>$this->input->post('customer_email'),
				'customer_contact'=>$this->input->post('customer_contact')
			);
			return $this->db->insert('customer',$data);
		}
		public function delete_customer($id){
			$this->db->where('customer_id',$id);
			$this->db->delete('customer');
			return true;
		}
		public function update_customer(){
			$slug=url_title($this->input->post('title'));
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$slug,
				'customer_name'=>$this->input->post('customer_name'),
				'customer_address'=>$this->input->post('customer_address'),
				'customer_email'=>$this->input->post('customer_email'),
				'customer_contact'=>$this->input->post('customer_contact')
			);
			$this->db->where('customer_id',$this->input->post('customer_id'));
			return $this->db->update('customer',$data);
		}
}