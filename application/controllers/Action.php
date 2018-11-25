<?php



class Action extends CI_Controller{



	public function register(){

		$name = strip_tags($_POST['name']);
		$surname = strip_tags($_POST['surname']);
		$email = strip_tags($_POST['email']);
		$mobile = strip_tags($_POST['mobile']);
		$fincode = strip_tags($_POST['fincode']);
		$password = strip_tags($_POST['password']);


		$dir = 'upload/Customer/';
		$config['upload_path']   = $dir;
		$config['max_size']     = '8000';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$this->upload->initialize($config);

		if(!empty($name) && !empty($surname) && !empty($mobile) && !empty($fincode) && !empty($password)){



				// $this->load->library('email');

				// //SMTP & mail configuration
				// $config = array(
				//     'protocol'  => 'smtp',
				//     'smtp_host' => 'ssl://smtp.gmail.com',
				//     'smtp_port' => 465,
				//     'smtp_user' => 'mahir.v@code.edu.az',
				//     'smtp_pass' => '?-?-?!?!0510',
				//     'mailtype'  => 'html',
				//     'charset'   => 'utf-8'
				// );
				// $this->email->initialize($config);
				// $this->email->set_mailtype("html");
				// $this->email->set_newline("\r\n");

				// //Email content
				// $htmlContent = '<h1>Sending email via SMTP server</h1>';
				// $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

				// $this->email->to('mahir.v@code.edu.az');
				// $this->email->from('mahir.v@code.edu.az');
				// $this->email->subject('Pasha Bank test MEssage');
				// $this->email->message($htmlContent);

				// //Send email
				// $this->email->send();


			$this->load->library('email');
// from address
$this->email->from('mahir.v@code.edu.az', 'Mahir Valiyev');
$this->email->to('mahir.v@code.edu.az'); // to Email address
$this->email->cc('mahir.v@code.edu.az'); // cc Email address (optional)
$this->email->bcc('mahir.v@code.edu.az'); // BCC Email Address (optional)
 
$this->email->subject('Email Test'); // email Subject 
$this->email->message('Testing the email class.'); // email Body or Message 
$this->email->send(); // send Email 


			if($this->upload->do_upload('image')) {

				$profil_img = $this->upload->data('file_name');
				$data = array(
					'c_name' => $name,
					'c_surname' => $surname,
					'c_email' => $email,
					'c_mobile' => $mobile,
					'c_fincode' => $fincode,
					'c_password' => md5($password),
					'c_image' => $profil_img
				);

				$this->db->insert('customers',$data);
				$this->session->set_userdata('success_register','Təbriklər. Uğurla qeydiyyatdan keçdiniz !');
				redirect(base_url('Home/login'));
				
			}else{

				$data = array(
					'c_name' => $name,
					'c_surname' => $surname,
					'c_email' => $email,
					'c_mobile' => $mobile,
					'c_fincode' => $fincode,
					'c_password' => md5($password),
					'c_image' => 'default_profile.jpg'
				);

				$this->db->insert('customers',$data);
				$this->session->set_userdata('success_register','Təbriklər. Uğurla qeydiyyatdan keçdiniz !');
				redirect(base_url('Home/login'));
				
			}








		}else{
			$this->session->set_userdata('failed_register','Səhvlik var. Xanaları boş buraxmayın!');
			redirect(base_url('Home/register'));
		}

	}





	public function login(){





		$emailornumber = strip_tags($_POST['emailornumber']);
		$password = strip_tags($_POST['password']);

		$login_check = $this->db->where('c_mobile',$emailornumber)->where('c_password',md5($password))->get('customers')->result_array();

		if($login_check){
			$_SESSION['user_login'] = TRUE;

			$this->session->set_userdata('user_data',$login_check);

			redirect(base_url('User/'));
		}else{
			$this->session->set_userdata('failed_login','Səhvlik var. Şifrə və ya nömrəni yenidən yoxlayın!');
			redirect(base_url('Home/login'));
		}




	}



	public function logout(){
		if(isset($_SESSION['user_login']))
            unset($_SESSION['user_login']);
        redirect(base_url('Home/login'));
	}






}










?>