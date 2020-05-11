<?php
class MY_Loader extends CI_Loader
{
	 public function template($template_name,$array)
    {
         $this->view('template/admin_header');
         $this->view($template_name,$array);
         $this->view('template/admin_footer');
    }

}