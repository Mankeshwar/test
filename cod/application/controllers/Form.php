

<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Form extends CI_Controller {  
  
    public function index()  
    {  
       
        //$abc['test']="nikita";
        $cd['test']=['Home','About Us','Contact Us'];
           $this->load->view('header');  
        $this->load->view('nav',$cd);  
        $this->load->view('concept');  
        $this->load->view('footer'); 
        $this->load->view('index');
        
    }  
}     
?>  

