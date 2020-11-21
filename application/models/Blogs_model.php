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
    }