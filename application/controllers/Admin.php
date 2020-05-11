<?php 

class Admin extends Secure_Controller
{
	 public function __construct()
   {
    parent::__construct();
     $this->load->model('articlesmodel','posts');
   }
   public function dashboard()
   {
        
        $this->load->library('pagination');
         $config = [
                  'base_url' => base_url('admin/dashboard'),
                  'per_page' => 5,
                  'total_rows'=> $this->posts->num_rows(),
                  'full_tag_open'=> "<ul class='pagination'>",
                  'full_tag_close' => '</ul>',
                  'first_tag_open' => '<li>',
                  'first_tag_close' => '</li>',
                  'next_tag_open' => '<li>',
                  'next_tag_close'=> '</li>',
                  'prev_tag_open' => '<li>',
                  'prev_tag_close' => '</li>',
                  'num_tag_open' => '<li>',
                  'num_tag_close' => '</li>',
                  'cur_tag_open' => "<li class='active'><a>",
                  'cur_tag_close' => '</a></li>'
                 ];
      $post = $this->input->post();
      $this->pagination->initialize($config);
      $sections=$this->posts->get_sections();
      if(! isset($post['selected_section']) )
      {
         $post['selected_section']=1;
      }
      $posts=$this->posts->posts_list($config['per_page'],$this->uri->segment(3),$post['selected_section']);
   	  $this->load->template('admin/dashboard',['posts'=>$posts,'sections'=>$sections]);
   }

  public function add_post()
  {

      $config= [
         'upload_path'  => './uploads',
         'allowed_types' => 'jpg|gif|png|jpeg',
         'encrypt_name' => TRUE
      ];
      $this->load->library('upload',$config);
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
      if($this->form_validation->run('add_post_rules') && $this->upload->do_upload())
      {
                $post = $this->input->post();
                unset($post['submit']);
                $data=$this->upload->data();
                
                $image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);
                $post['image']=$image_path;
                return  $this->_flashAndRedirect(
                $this->posts->add_article($post),
                'Post Added Successfully !',
                "There was a problem adding this post"
            );
      }
      else
      {
         $sections=$this->posts->get_sections();

        $upload_error= $this->upload->display_errors();
        $this->load->template('admin/add_article', ['sections'=>$sections, 'upload_error' => $upload_error]);
      }
      
  }
  
  public function edit_post($post_id)
  {
   $result=$this->posts->find_post($post_id);
   //form populated
    $sections=$this->posts->get_sections();
   $this->load->template('admin/edit_post',['post'=>$result,'sections'=>$sections]);
  }

  public function update_post($article_id)
  {
    $this->load->library('form_validation');
    if($this->form_validation->run('add_post_rules'))
    {
          $config= [
           'upload_path'  => './uploads',
           'allowed_types' => 'jpg|png|jpeg'
          ];
          $this->load->library('upload',$config);
          $this->load->library('form_validation');
          $post=$this->input->post();
          if($this->upload->do_upload())
          {
              $data=$this->upload->data();
              $image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);
              $post['image']=$image_path;
          }
         unset($post['submit']);
     
         return   $this->_flashAndRedirect(
                  $this->posts->update_post($article_id,$post),
                  'Post Updated Successfully !',
                  'There was problem updating post...'    
         );
    }
    else
    {
        $this->load->view('admin/edit_post');
    }
  }
  public function delete_post($post_id)
  {    
   return $this->_flashAndRedirect(
                  $this->posts->delete_post($post_id),
                 'Article deleted Successfully !',
                 'The article could not be deleted...'   
            );
  }

  private function _flashAndRedirect($successful, $smsg, $fmsg)
  {
       if($successful)
       {
         $this->session->set_flashdata('feedback',$smsg);
         $this->session->set_flashdata('feedback_class','alert-success'); 
       }
       else
       {
          $this->session->set_flashdata('feedback',$fmsg);
          $this->session->set_flashdata('feedback_class','alert-danger');
       }
    return redirect('admin/dashboard');
  }

}

