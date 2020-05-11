<?php

class Loginmodel extends CI_Model
{
	public function login_valid($username, $password)
	{
      $q= $this->db
            ->where(['uname'=>$username,'pass'=>$password])
            ->get('users');
               //SELECT * FROM USERS WHERE uname='$username' and pass='$password'
	
	  if($q-> num_rows())
	  {
	  	   return $q->row()->uid;
	  }
	  else
	  {
	  	   return false;
	  }
	}
}