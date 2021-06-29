 <?php 
     defined('BASEPATH') OR exit('No direct script access allowed'); 
    class Test_model extends CI_Model 
    {
        
        public function test() {
               
           return ($this->db->insert('baby',$data))?1:0; 
            
        }
        
    }
    