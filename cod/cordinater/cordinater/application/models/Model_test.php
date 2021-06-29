<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Model_test extends CI_Model {  
 
   function __construct()  
    {  
      //call model constructor  
       parent::__construct();  
    }     
	
  
		 public function adddata($userData)  
       {  
	      
			return ($this->db->insert('tour',$userData))?1:0;
          
          
        } 
		
}  
?> 


 