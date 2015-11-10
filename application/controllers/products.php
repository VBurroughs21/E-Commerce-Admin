<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
		
		$this->load->model('product');
		$this->session->set_userdata('data', $this->product->get_all());

		$this->load->view('index', $this->session->userdata('data'));
	}

	public function new_product()
	{
		
		
		
		$this->load->view('create');

	}

	public function edit($id)
	{
		$this->load->model('product');
		$this->session->set_userdata('edit', $this->product->get_product($id));
		$this->load->view('edit', $this->session->userdata('edit'));

	}

	public function show($id)
	{
		$this->load->model('product');
		$this->session->set_userdata('each', $this->product->get_product($id));

		$this->load->view('info', $this->session->userdata('each'));
	}

	public function create()
	{
		
		$this->load->model("product");

		$product_info = array(
			"name" => $this->input->post('name'),
			"description" => $this->input->post('desc'),
			"price" => $this->input->post('price')
		);

		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("desc", "Description", "trim|required");
		$this->form_validation->set_rules("price", "Price", "trim|required|numeric");
		
		if($this->form_validation->run() === FALSE) {
    		redirect(base_url('products/new_product'));
		} else {
		     $this->product->add($product_info);
		     redirect(base_url(' '));
		}
		
	}

	public function destroy($id)
	{
		$this->load->model('product');
		$this->product->delete_product($id);
		
		redirect(base_url(' '));
	}

	public function update($id)
	{
		$this->load->model('product');
		

		$update_info = array(
			"name" => $this->input->post('ename'),
			"description" => $this->input->post('edesc'),
			"price" => $this->input->post('eprice'),
			"id" => $id
		);

		$this->load->library("form_validation");
		$this->form_validation->set_rules("ename", "Name", "trim|required");
		$this->form_validation->set_rules("edesc", "Description", "trim|required");
		$this->form_validation->set_rules("eprice", "Price", "trim|required|numeric");
		
		if($this->form_validation->run() === TRUE) {
		     $this->product->edit_product($update_info);
		}
		redirect(base_url(' '));
		
	}
}



















