<?php 

class MY_Controller extends CI_Controller
{
   public function __construct() {
       parent::__construct();
    }
}

 
class Secure_Controller extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->library('session');
        $this->load->helper('url');
       

       if(! $this->session->userdata('user_id'))
   	    return redirect('login'); 
         
        
         $this->load->helper('form');
    }

    
}


?>