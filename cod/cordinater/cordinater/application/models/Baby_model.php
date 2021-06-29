<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Baby_model extends CI_Model {  
 
   function __construct()  
    {  
      //call model constructor  
       parent::__construct();  
    }     
          
    public function userList()  
       {  
           $query = $this->db->get('baby'); 
		    return $query->result();
          
        }  
		
		
		 public function saveData($userData)  
       {  
	        //print_r($userData);
	        //die('model');
			//$data = array('name'=>$userData['name'],mea);
			return ($this->db->insert('baby',$userData))?1:0;
           //
          
        } 
		public function deleterecords($id)
		{

		//$query=$this->db->query("delete  from baby where id='".$id."'");
                 $this -> db -> where('id', $id);
                 $this -> db -> delete('baby');
		}
		public function displayrecordsById($id)
		{
			//$data = array('name'=>$id['name']);
			//$query=$this->db->query("select * from baby where id='".$id."'");
		//print_r($displayrecordsById);
         
			 $q = $this ->db->select('name,meaning,gender,religion');
			 $this->db->from('baby_form');
			 $this->db->where('id', $id);
			 return $this->db->get()->row();
			 //echo $this->db->last_query();
		}
	
 public	function updaterecords($data)
	{
		//print_r($name,$meaning,$gender,$religion);die;
		// echo "update baby SET name='$data[name]',meaning='$data[name]',gender='$data[name]',religion='$data[name]' where id='".$data[id]."'";
		// die;
$query=$this->db->query("update baby SET name='$data[name]',meaning='$data[meaning]',gender='$data[gender]',religion='$data[religion]' where id='".$data['id']."'");


}			

		
}  
?> 


 