<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Test_model extends CI_Model {

        public function test($data) {
            return ($this->db->insert('baby',$data))?1:0;
            
        }
		function deleterecords($id)
	{
	$this->db->query("delete  from users where user_id='".$id."'");
	}	

    }
    