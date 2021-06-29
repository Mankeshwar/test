<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Hello extends CI_Controller
{
    public function index()
    {
       
        $this->load->view('header');  
       $this->load->view('nav');     
       $this->load->view('concept');  
       $this->load->view('footer');  
       $this->load->view('index');

    }
  
} 
?>
   