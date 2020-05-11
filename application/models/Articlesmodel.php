<?php

class Articlesmodel extends CI_Model
{
	public function posts_list($limit,$offset,$id=1)
	{
		$articles=$this->db
		            ->select(array('title','pid'))
		            ->from('posts')
		            ->where('sid',$id)
		            ->limit($limit,$offset)
		            ->get();
		return $articles->result();
	}
        public function get_section($pid)
        {
         $query= $this->db
                            ->select(array('sections.title','sections.sid'))
                            ->from('sections')
                            ->join('posts','posts.sid = sections.sid','left')
                            ->where('posts.pid',$pid)
                            ->get();
                            
          return $query->result();
                            
        }
	public function get_sections()
	{
         $query= $this->db
		             ->select(array('sid','title','description','cover'))
		             ->from('sections')
		             ->order_by('sid','DESC')
		             ->get();
		
           return $query->result();
		
	}
	public function get_post($id)
	{
         $query= $this->db
		             ->select(array('title','image','description','filelink','yt_frame','changelog','sid'))
		             ->from('posts')
		             ->where('pid',$id)
		             ->get();
		
           return $query->result();
	}
        public function get_related($pid,$sid)
        {
                 $query= $this->db
                                     ->select(array('pid','title','image','tagline'))
                                     ->from('posts')
                                     ->where('sid',$sid)
                                     ->where('pid !=',$pid)
                                     ->order_by('pid','DESC')
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
        
	public function get_posts($id)
	{
		$query= $this->db
		             ->select(array('pid','title','image','tagline'))
		             ->from('posts')
		             ->where('sid',$id)
		             ->order_by('pid','DESC')
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
		            ->select(array('title','id'))
		            ->from('articles')
		            ->where('id',$login_id)
		            ->get();
       return $query->num_rows();
    }
	public function add_article($array)
	{
		return $this->db->insert('posts',$array);
	}
	public function add_section($array)
	{
       return $this->db->insert('sections',$array);
	}
	public function find_post($post_id)
	{
       $sec_check=array('pid'=>$post_id);
       $result_article=$this->db
                       ->select(array('pid','title','description','image','filelink','yt_frame','tagline','sid'))
                       ->from('posts')
                       ->where($sec_check)
                       ->get();
       return $result_article->row();
	}
	public function update_post($pid,$array)
	{
       $post_info= array('pid'=>$pid);
       return $this->db
                ->where($post_info)
                ->update('posts', $array);
	}

	public function delete_post($post_id)
	{ 
		$user_info= array('pid'=>$post_id);
		return $this->db
		               ->where($user_info)
		               ->delete('posts');
	}
}