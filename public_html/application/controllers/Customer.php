<?php
	class Customer extends CI_Controller{
		public function index(){
			$data['title']='Latest Customer ';
			$data['customer']=$this->customer_model->get_customer();
			 
			$this->load->view('templates/header');
			$this->load->view('customer/index',$data);
			$this->load->view('templates/footer');
		}
		public function view($slug= Null){
			$data['customer']=$this->customer_model->get_customer($slug);
			if(empty($data['customer'])){
				show_404();
			}
			$data['title']= $data['customer'] ['title'];

			$this->load->view('templates/header');
			$this->load->view('customer/view',$data);
			$this->load->view('templates/footer');

		}
		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title']='Add Customer ';
			$this->form_validation->set_rules('customer_name','Customer_Name','required');
			$this->form_validation->set_rules('customer_name','Customer_Address','required');
			$this->form_validation->set_rules('customer_name','Customer_Email','required');
			$this->form_validation->set_rules('customer_name','Customer_Contact','required');
			if($this->form_validation->run()=== FALSE){

			$this->load->view('templates/header');
			$this->load->view('customer/create',$data);
			$this->load->view('templates/footer');
			}else{
				$this->customer_model->create_customer();
				redirect('customer');
			}
		}
		
		public function delete($id){
			$this->customer_model->delete_customer($id);
			redirect('customer');
		}
		public function edit($slug){
			$data['customer']=$this->customer_model->get_customer($slug);
			if(empty($data['post'])){
				show_404();
			}
			$data['title']='Latest Customer '; 
			$this->load->view('templates/header');
			$this->load->view('customer/edit',$data);
			$this->load->view('templates/footer');

		}
		public function update(){
			$this->customer_model->update_customer();
			// redirect('customer');
		}


}