<?php

class User extends MY_Controller
{
    public function __construct()
    {
     	parent::__construct();
        $this->load->model('articlesmodel','posts');  
        $_SESSION['title']="Ali Abbas Blogs";
    }
	public function index()
	{
	  $sections=$this->posts->get_sections();
   	  $this->load->view('public/blog1',['sections'=>$sections]);
          
	   
	}
	public function post($id=0)
	{
	  $details=$this->posts->get_post($id);
          $section_name=$this->posts->get_section($id);
          $_SESSION['title']=$details[0]->title;
          $related_posts=$this->posts->get_related($id,$details[0]->sid);
	  if(sizeof($details) == 0 )
	  {
	  	  echo "<h1>No Content found !</h1>";
	  }
	  else
	  {	
   	      $this->load->view('public/post',['details'=>$details,'section_name'=>$section_name,'related'=>$related_posts]);
	  }
	}
	public function fetchRecords($id)
	{
      $result= $this->posts->get_posts($id);
      echo json_encode($result);
	}

	public function fetchsections($id=0)
	{
      $sections=$this->posts->get_sections();
   	  $this->load->view('public/blog1',['sections'=>$sections]);
	}
}

