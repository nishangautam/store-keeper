<?php 
class Sale extends CI_Controller{
function __construct() {
        parent::__construct();
        
    }
	public function index(){
		$data['title']='Sale';
		$data['sale']=$this->sale_model->get_sale();
		$this->load->view('templates/header');
		$this->load->view('sale/index',$data);
		$this->load->view('templates/footer');
	}
	public function sale(){
		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$data['title']='Sale From Customer';
		$data['category']=$this->category_model->get_category();
		$data['customer']=$this->customer_model->get_customer();
		$data['product']=$this->product_model->get_product();
		$this->form_validation->set_rules('title','Title','required');
		if($this->form_validation->run() === FALSE){

		$this->load->view('templates/header');
		$this->load->view('sale/sale',$data);
		$this->load->view('templates/footer');
	}else{
		// $qty=$this->input->post('product_quantity');
		// $price=$this->input->post('product_price');
		// $amt=$this->input->post('final_amount');
		// $amt=$price*$qty;
	
		// print_r($qty);
		// die();
		
		$this->sale_model->create_sale();
		redirect('sale');
	}

	}
}