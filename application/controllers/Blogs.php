<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('blogs_model');
		$this->load->helper('url_helper');
	}
	
	public function index()
	{
		$data['blogs'] = $this->blogs_model->get_blogs();

		$this->load->view('layouts/header');
		$this->load->view('blogs/index', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('layouts/footer');
	}

	public function show($slug)
	{
		$data['blogs_item'] = $this->blogs_model->get_blogs_slug($slug);

		$this->load->view('blogs/show', $data);
	}

	public function contact($halaman = FALSE)
	{
		if($halaman === FALSE)
		{
			redirect('error_404');
		}
		
		$this->load->view('contact/'.$halaman);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'TITLE', 'required');
		$this->form_validation->set_rules('text', 'TEXT', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('blogs/create');
		}
		else
		{
			$this->blogs_model->create_blogs();

			redirect('blogs');
		}
	}

	public function edit($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('title', 'TITLE', 'required');
		$this->form_validation->set_rules('text', 'TEXT', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$data['blogs_item'] = $this->blogs_model->get_blogs_id($id);

			$this->load->view('blogs/edit', $data);
		}
		else{
			$this->blogs_model->edit_blogs($id);

			redirect('blogs');
		}
	}

	public function delete($id)
	{
		$this->blogs_model->delete_blogs($id);

		redirect('blogs');
	}
}
