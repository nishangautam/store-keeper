<?php 
class Purchase extends CI_Controller{
function __construct() {
        parent::__construct();
        
    }
	public function index(){
		$data['title']='Purchase';
		$data['purchase']=$this->purchase_model->get_purchase();
		$this->load->view('templates/header');
		$this->load->view('purchase/index',$data);
		$this->load->view('templates/footer');
	}
	public function purchase(){
		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$data['title']='Purchase From Supplier';
		$data['category']=$this->category_model->get_category();
		$data['supplier']=$this->supplier_model->
		$data['product']=$this->
		$this->form_validation->set_rules('title','Title','required');
		if($this->form_validation->run() === FALSE){

		$this->load->view('templates/header');
		$this->load->view('purchase/purchase',$data);
		$this->load->view('templates/footer');
	}else{
		// $qty=$this->input->post('product_quantity');
		// $price=$this->input->post('product_price');
		// $amt=$this->input->post('final_amount');
		// $amt=$price*$qty;
	
		// print_r($qty);
		// die();
		
		$this->purchase_model->create_purchase();
		redirect('purchase');
	}

	}
}