<?php
	class Supplier extends CI_Controller{
		public function index(){
			$data['title']='Latest Supplier ';
			$data['supplier']=$this->supplier_model->get_supplier();
			$this->load->view('templates/header');
			$this->load->view('supplier/index',$data);
			$this->load->view('templates/footer');
		}
		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title']='Add Supplier ';
			$this->form_validation->set_rules('supplier_name','Supplier_Name','required');
			$this->form_validation->set_rules('supplier_address','Supplier_Address','required');
			$this->form_validation->set_rules('supplier_email','Supplier_Email','required');
			$this->form_validation->set_rules('supplier_contact','Supplier_Contact','required');
			if($this->form_validation->run()=== FALSE){
				$this->load->view('templates/header');
				$this->load->view('supplier/create',$data);
				$this->load->view('templates/footer');
			}else{
				$this->supplier_model->create_supplier();
				redirect('supplier');
			}
			
		}
		public function view($slug= Null){
			$data['supplier']=$this->supplier_model->get_supplier($slug);
			if(empty($data['post'])){
				show_404();
			}
			$data['title']=$data['supplier'] ['title'];
			$this->load->view('templates/header');
			$this->load->view('supplier/view',$data);
			$this->load->view('templates/footer');
		}
		public function delete($id){
			$this->supplier_model->delete_supplier($id);
			redirect('supplier');
		}
		public function edit($slug){
			$data['supplier']=$this->supplier_model->get_supplier($slug);
			if(empty($data['post'])){
				show_404();
			}
			
			$data['title']='Latest Supplier ';
			$this->load->view('templates/header');
			$this->load->view('supplier/edit',$data);
			$this->load->view('templates/footer');

		}
		public function update(){
			$this->supplier_model->update_supplier();
			redirect('supplier');
		}


}