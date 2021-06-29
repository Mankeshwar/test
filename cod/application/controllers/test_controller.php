<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Test_controller extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Model_test');
        }

        public function index() { 
		  
             
           $this->load->view("view_form");
		
        }
		public function adddata()
		{
			//print_r($this->input->post());
			$data=array('arrival_date'=>$this->input->post('arrival_date'),
			'num_of_room'=>$this->input->post('num_of_room'),
			'phone'=>$this->input->post('phone'),
			'contact_us'=>$this->input->post('contact_us')
			//'term_condition'=>$this->input->post('term_condition')
			
			);	
			//print_r($data);die;
			$this->Model_test->adddata($data);
		
			//$this->Model_test->adddata($data);
		}

       
	}
?>