<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function home()
	{
		$this->load->Model('regmodel');
		$data['q']=$this->regmodel->view();
		$this->load->view("user/home",$data);
	}

	public function view()
	{

		$this->load->Model('regmodel');
		$data['q']=$this->regmodel->view();
		$this->load->view("user/view_details",$data);
	}

	public function test()
	{

		$this->load->Model('regmodel');
		
		$this->load->view("user/test");
	}
	public function details()
	{
		$id=$_REQUEST['id'];
		$this->load->Model('regmodel');
		$data['q']=$this->regmodel->select($id);
		$this->load->view('user/details',$data);
	}

	public function search()
	{
		 
		 $id=$this->input->get('search');
		 $this->load->Model('regmodel');
		 $data['q']=$this->regmodel->search($id);
		 $this->load->view("user/home", $data);
	}
	public function checkout()
	{
		$id=$_REQUEST['id'];
		$this->load->Model('regmodel');
		$data['q']=$this->regmodel->select($id);
		$this->load->view('user/checkout',$data);
	}
	public function pgRedirect()
	{
		$this->load->view("user/pgRedirect");
	}
	public function encdec_paytm()
	{
		$this->load->view("user/lib/encdec_paytm");
	}
	public function config_paytm()
	{
		$this->load->view("user/lib/config_paytm");
	}
	public function pgResponse()
	{
		$this->load->view("user/pgResponse");
	}
	public function index()
	{
		$this->load->view("user/login");
	}
	public function reg()
	{
		$this->load->view("user/registration");
	}
	public function test1()
	{
		$this->load->view("user/test1");
	}
	public function test2()
	{
		$this->load->view("user/test2");
	}



}
