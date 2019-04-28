<?php
class Product extends CI_Controller{
	public function index(){
		$data['title']='Product';
		$data['product']=$this->product_model->get_product();
		// $data['category']=$this->category_model->get_category();
		$this->load->view('templates/header');
		$this->load->view('product/index',$data);
		$this->load->view('templates/footer');
	}
	public function create(){
		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$data['title']='Product Created.';
		$data['category']=$this->category_model->get_category();
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('product_name','Product_Name','required');
		$this->form_validation->set_rules('product_price','Product_Price','required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('product/create',$data);
			$this->load->view('templates/footer');
		}else{
			$this->product_model->create_product();
			redirect('product');
		}
	}
		public function delete($id){
			$this->product_model->delete_product($id);
			redirect('product');
		}
}