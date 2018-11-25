<?php 


class User extends CI_Controller{



	public function index(){
		$this->load->view('user_profile');
	}

	public function all_request(){

		$user_data = $this->session->userdata('user_data');

		$data['all_request'] = $this->db->where('r_request_owner',$user_data[0]['c_id'])->get('request')->result_array();
		$this->load->view('all_request',$data);
	}


	public function send_request(){

		$user_data = $this->session->userdata('user_data');

		$r_title = strip_tags($_POST['r_title']);
		$textarea1 = strip_tags($_POST['textarea1']);

		$data = array(
			'r_request_owner' => $user_data[0]['c_id'],
			'r_fincode' => $user_data[0]['c_fincode'],
			'r_title' => $r_title,
			'r_desc'  => $textarea1,
			'r_status' => 0,
			'r_vip_status' => 1,
			'r_email' => $user_data[0]['c_email'],
			'r_create_date' => date('Y-m-d H:i:s')
		);

		$this->db->insert('request',$data);
		redirect(base_url('User/'));




	}




	public function send_form(){

		$data = array(
			'r_request_owner' => $_POST['fincode'],
			'r_fincode' => $_POST['fincode'],
			'r_title' => $_POST['title'],
			'r_desc'  => $_POST['desc'],
			'r_status' => 0,
			'r_vip_status' => 0,
			'r_email' => $_POST['email'],
			'r_create_date' => date('Y-m-d H:i:s')
		);


$this->load->library('email');
// from address
$this->email->from('mahir.v@code.edu.az', 'Pasha Bank');
$this->email->to($_POST['email']); // to Email address
$this->email->cc('mahir.v@code.edu.az'); // cc Email address (optional)
$this->email->bcc('mahir.v@code.edu.az'); // BCC Email Address (optional)
 
$this->email->subject('Investisiya'); // email Subject 
$this->email->message('Müraciət uğurla göndərildi. Geri dönüş ediləcək'); // email Body or Message 
$this->email->send(); // send Email 








		$this->db->insert('request',$data);
		redirect(base_url('User/'));

	}























}






?>