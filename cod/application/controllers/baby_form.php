<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Baby_form extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
        }

        public function index() { 
		 
		echo "hello";
            
            $this->load->view("baby_form_select");
            
        }

	}
?>