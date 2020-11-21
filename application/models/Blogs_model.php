<?php

    Class Blogs_model extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }
        
        public function get_blogs()
        {
            $query = $this->db->get('news');

            return $query->result_array();
        }

        public function create_blogs()
        {
            $this->load->helper('url');
            
            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug'  => $slug,
                'text'  => $this->input->post('text')
            );
            
            return $this->db->insert('news', $data);
        }
    }