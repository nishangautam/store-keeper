<?php
	class Pages extends CI_Controller{
		public function view($page ='home'){
			if(!file_exists((APPPATH.'views/pages/'.$page.'.php'))){
				show_404();
			}
			$data['title']=ucfirst($page);
			$rowset['data'] =$this->product_model->get_product();
			$rowCount = count($rowset['data']);
     		$data['row']=$rowCount;
   //   		$rowset['data'] =$this->category_model->get_category();
			// $rowCount = count($rowset['data']);
			// var_dump($rowCount);die();
     		
   //   		$rowset['data'] =$this->purchase_model->get_purchase();
			// $rowCount = count($rowset['data']);
     		
   //   		$rowset['data'] =$this->customer_model->get_customer();
			// $rowCount = count($rowset['data']);
     		
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');
		}   
	}