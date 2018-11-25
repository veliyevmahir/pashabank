<?php 


class Panel extends CI_Controller{

	public function panel_all_news(){
		$data['all_all_request'] = $this->db->join('customers','customers.c_id = request.r_request_owner ','left')->order_by('r_id','DESC')->get('request')->result_array();
		$this->load->view('panel_all_request',$data);
	}

	public function panel_new_request(){
		$data['all_new_request'] = $this->db->join('customers','customers.c_id = request.r_request_owner ','left')->where('r_status',0)->order_by('r_id','DESC')->get('request')->result_array();
		$this->load->view('panel_new_request',$data);
	}

	public function panel_seen_request(){
		$data['all_new_request'] = $this->db->join('customers','customers.c_id = request.r_request_owner ','left')->where('r_status',1)->order_by('r_id','DESC')->get('request')->result_array();
		$this->load->view('panel_seen_request',$data);
	}

	public function panel_accepted_request(){
		$data['all_new_request'] = $this->db->join('customers','customers.c_id = request.r_request_owner ','left')->where('r_status',3)->order_by('r_id','DESC')->get('request')->result_array();
		$this->load->view('panel_accepted_request',$data);
	}


	public function panel_removed_request(){
		$data['all_new_request'] = $this->db->join('customers','customers.c_id = request.r_request_owner ','left')->where('r_status',2)->order_by('r_id','DESC')->get('request')->result_array();
		$this->load->view('panel_removed_request',$data);
	}


	public function payments(){
		$data['all_payments'] = $this->db->order_by('id','DESC')->get('orders')->result_array();
		$this->load->view('payment_data',$data);
	}

	public function delete($id){
		$data = array(
			'r_status' => 2
		);

		$this->db->where('r_id',$id)->update('request',$data);
		redirect(base_url('Panel/panel_all_news'));
	}

	public function success($id){
		$data = array(
			'r_status' => 3
		);

		$this->db->where('r_id',$id)->update('request',$data);
		redirect(base_url('Panel/panel_all_news'));
	}





}







?>