<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
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


}
