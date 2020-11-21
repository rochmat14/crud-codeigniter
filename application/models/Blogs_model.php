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

        public function get_blogs_id($id = FALSE)
        {
            $query = $this->db->get_where('news', array('id' => $id));

            return $query->row_array();
        }

        public function get_blogs_slug($slug)
        {
            $query = $this->db->get_where('news', array('slug' => $slug));

            return $query->row_array();
        }

        public function edit_blogs($id)
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug'  => $slug,
                'text'  => $this->input->post('text')
            );

            return $this->db->where('id', $id)->update('news', $data);
        }

        public function delete_blogs($id)
        {
            return $this->db->delete('news', array('id' => $id));
        }
    }