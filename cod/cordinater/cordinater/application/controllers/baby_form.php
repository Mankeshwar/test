<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Baby_form extends CI_Controller {

        public function __construct() {
            parent::__construct();
            //$this->load->model('Test_model');
             $this->load->model("Baby_model");  
        }

        public function index() { 
		   $data['results'] =  $this->Baby_model->userList();
		// print_r( $data['results']);
		// die;
		echo "hello";
            
            $this->load->view("baby_form_select",$data);
            
        }

        function savingdata() { 
		  
            $data = array(
                        'name' => $this->input->post('name'),
                        'meaning' => $this->input->post('meaning'),
                        'gender' => $this->input->post('gender'),
                        'religion' => $this->input->post('religion')
            );   
            //print_r($data);
              $this->Baby_model->saveData($data);
            //redirect("baby_form/index");
        }
		function deletedata()
		{
			
			$id=$this->input->get('id');
	        $this->Baby_model->deleterecords($id);
	
	        echo "Date deleted successfully !";
		}
		
		function updateForm()
		{
				//print_r($this->input->get());die;
			$id = $this->input->get('id');
			
			$data['results']= $this->Baby_model->displayrecordsById($id);
			
			
			$this->load->view('edit',$data);

			
		}
		
		function updateData()
		{
			//print_r($this->input->post());	
		 //die;
			  if($this->input->post('update'))
			 {
				 $data = array(
                        'name' => $this->input->post('name'),
                        'meaning' => $this->input->post('meaning'),
                        'gender' => $this->input->post('gender'),
                        'religion' => $this->input->post('religion'),
						'id' =>$this->input->post('id')
                    );   
				 $this->Baby_model->updaterecords($data);
				// echo "Date updated successfully !”;
		
			 }
		}
	}
?>