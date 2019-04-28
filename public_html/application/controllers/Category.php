<?php
class Category extends CI_Controller{
	public function index(){
		$data['title']='Category';
		$data['category']=$this->category_model->get_category();
		$this->load->view('templates/header');
		$this->load->view('category/index',$data);
		$this->load->view('templates/footer');
	}
	public function create(){
		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$data['title']='Create Category';
		$this->form_validation->set_rules('category_name','Category_Name','required');
		if($this->form_validation->run()===FALSE){
			$this->load->view('templates/header');
			$this->load->view('category/create',$data);
			$this->load->view('templates/footer');
		}else{
			$this->category_model->create_category();
			redirect('category');
		}
	}
	public function delete($id){
	$this->category_model->delete_category($id);
	redirect('category');
	}
}