<?php
	
	class Category_model extends CI_Model
	{
		
		public function __construct(){
			$this->load->database();
		}
		// public function get_category($slug = FALSE){
		// 	if($slug === FALSE){
		// 		$this->db->order_by('id','DESC');
				
		// 		$query =$this->db->get('category');
		// 		return $query->result_array();
		// 	}
		// 	$query=$this->db->get_where('category',array('slug' => $slug));
		// 	return $query->row_array();
		// }
		public function get_category(){
			$this->db->order_by('created_at','DESC');
			$query=$this->db->get('category');
			return $query->result_array();
		}

		public function create_category(){
			$data=array(
				'category_name' => $this->input->post('category_name')
			);
			return $this->db->insert('category',$data);
		}
		public function get_categories($id){
			$query= $this->db->get_where('category',array('id'=>$id));
			return $query->row();
		}
		public function delete_category($id){
			$this->db->where('id',$id);
			$this->db->delete('category');
			return true; 
		}
		public function update_category($data,$id){
			// $slug=url_title($this->input->post('id'));
			// $this->db->where('id',$id);
			// $data=array(
			// 	'name' => $this->input->post('name')
			// );
			// $this->db->where('id',$this->input->post('id'));
			// return $this->db->update('category',$data);
			if(!empty($data)&& !empty($id)){
				$update=$this->db->update('category',$data,array('id'=>$id));
				return $update?true:false;
			}else{
				return false;
			}
		}
		                                                                                                     
	}