<?php

class Migration extends CI_Controller
{

        public function index()
        {
                if(!$this->session->userdata('logged_in')){
                                redirect('users/login');
                        }
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
                else{
                	echo "<script>alert('Migration Successfully ');</script>";
                	// echo "<a  href='../../'>Home Menu</a>";
                }
        }

}