<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('index');
	}

	public function login(){
		$this->load->View('login');
	}

	public function register(){
		$this->load->view('register');
	}

	public function form(){
		$this->load->view('form');
	}

	public function lists(){
		$data['all_request'] = $this->db->order_by('r_id','DESC')->where('r_vip_status',1)->get('request')->result_array();
		$this->load->view('list',$data);
	}

}
