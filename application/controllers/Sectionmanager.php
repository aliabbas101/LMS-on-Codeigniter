<?php 


class Sectionmanager extends Secure_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('articlesmodel','posts');
	}
	public function index()
	{
		$sections=$this->posts->get_sections();
		$this->load->template('admin/section/dash_section',['sections'=>$sections]);
	}
	public function edit_section($id)
	{
       echo $id;
	}
	public function delete_section($id)
	{

	}

	public function add_section()
    {
    $config= [
         'upload_path'  => './uploads/covers',
         'allowed_types' => 'jpg|png|jpeg',
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
                
                $image_path=base_url("uploads/covers/".$data['raw_name'].$data['file_ext']);
                $post['cover']=$image_path;
                return  $this->_flashAndRedirect(
                    $this->posts->add_section($post),
                        'Section Added Successfully !',
                        "There was a problem in adding this section..."
            );
      }
      else
      {
        $upload_error= $this->upload->display_errors();
        $this->load->template('admin/section/add_section', ['upload_error' => $upload_error]);
      }
    
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
    return redirect('sectionmanager');
  }
}