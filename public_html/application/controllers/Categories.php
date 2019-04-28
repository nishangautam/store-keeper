<?php
	class Categories extends CI_Controller{
		public function index(){

			
			$data['title']='Latest Categories';
			$data['categories']=$this->category_model->get_categories();
			$this->load->view('templates/header');
			$this->load->view('categories/index',$data);
			// print_r($data['categories']);
			$this->load->view('templates/footer');
		} 
		// public function view($slug= NULL){
		// 	$data['categories']=$this->category_model->get_categories($slug);
		// 	if(empty($data['categories'])){
		// 		show_404();
		// 	}
		// 	$data['title']= $data['categories']['title'];
		// 	$this->load->view('templates/header');
		// 	$this->load->view('categories/view',$data);
		// 	$this->load->view('templates/footer');
		// }
		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title']='Create Category';
			// $data['categories']=$this->category_model->get_categories();
			$this->form_validation->set_rules('name','Name','required');
			
			if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('categories/create',$data);
			$this->load->view('templates/footer');
			}else{
				//upload image
				
				$this->category_model->create_category();
				$this->session->set_flashdata('category_created', 'Your category is created.');
				redirect('categories');
			}
			
		}
		public function posts($id){
			$data['title']= $this->category_model->get_category($id)->name;
			$data['posts']=$this->post_model->get_posts_by_category($id);
			$this->load->view('templates/header');
			$this->load->view('posts/index',$data);
			$this->load->view('templates/footer');

		}
		public function delete($id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->category_model->delete_category($id);
			$this->session->set_flashdata('category_deleted', 'Your category is deleted.');
			// die();
			redirect('categories');
		}  
		public function edit($slug){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['categories']=$this->category_model->get_categories($slug);
			$data['categories']=$this->category_model->get_Categories();
			if(empty($data['categories'])){
				show_404();
			}
			$data['title']='Edit Category';
			$this->load->view('templates/header');
			$this->load->view('categories/edit',$data);
			$this->load->view('templates/footer');
		}
		public function update($id){ 
			$this->category_model->update_category();
			
			redirect('categories');
		}
	}