<?php

class Postmodel extends CI_Model
{
	public function post_list($limit,$offset)
	{
		$login_id=$this->session->userdata('user_id');
		$articles=$this->db
		            ->select(array('title','id'))
		            ->from('articles')
		            ->where('user_id',$login_id)
		            ->limit($limit,$offset)
		            ->get();
		return $articles->result();
	}
	public function get_posts()
	{
		$query= $this->db
		             ->select(array('id','title','body'))
		             ->from('articles')
		             ->order_by('id','DESC')
		             ->get();
		if($query->num_rows() > 0)
		{
           return $query->result();
		}
	    else
	    {
            return false;
	    }

	}
    public function num_rows()
    {
    	$login_id=$this->session->userdata('user_id');
    	$query= $this->db
		            ->select(array('title','pid'))
		            ->from('articles')
		            ->where('user_id',$login_id)
		            ->get();
       return $query->num_rows();
    }
	public function add_post($array)
	{
		return $this->db->insert('posts',$array);
	}
	public function find_post($post_id)
	{
       $sec_check=array('id'=>$post_id,'user_id'=>$this->session->userdata('user_id'));
       $result_article=$this->db
                       ->select(array('id','title','body'))
                       ->from('articles')
                       ->where($sec_check)
                       ->get();
       return $result_article->row();
	}
	public function update_article($article_id,$array)
	{
       $data = array(
        'title' => $array['title'],
        'body' => $array['body']
       );
       $user_info= array('id'=>$article_id,'user_id'=>$this->session->userdata('user_id'));
       return $this->db
                ->where($user_info)
                ->update('articles', $data);
	}

	public function delete_article($article_id)
	{ 
		$user_info= array('id'=>$article_id,'user_id'=>$this->session->userdata('user_id'));
		return $this->db
		               ->where($user_info)
		               ->delete('articles');
	}
}