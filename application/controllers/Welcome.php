<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('product_form');		
	}

	public function check()
	{
		//check whether stripe token is not empty
		if(!empty($_POST['stripeToken']))
		{
			//get token, card and user info from the form
			$token  = $_POST['stripeToken'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$card_num = $_POST['card_num'];
			$card_cvc = $_POST['cvc'];
			$card_exp_month = $_POST['exp_month'];
			$card_exp_year = $_POST['exp_year'];
			
			//include Stripe PHP library
			require_once APPPATH."third_party/stripe/init.php";
			
			//set api key
			$stripe = array(
			  "secret_key"      => "sk_test_nnmQWZLnOjqPlHJgSeDFkXeJ",
			  "publishable_key" => "pk_test_sUecrNfyh01OK648Nn6jmVAO"
			);
			
			\Stripe\Stripe::setApiKey($stripe['secret_key']);
			
			//add customer to stripe
			$customer = \Stripe\Customer::create(array(
				'email' => $email,
				'source'  => $token
			));
			
			//item information
			$itemName = "Stripe Donation";
			$itemNumber = "PS123456";
			$itemPrice = 500;
			$currency = "usd";
			$orderID = "SKA92712382139";
			
			//charge a credit or a debit card
			$charge = \Stripe\Charge::create(array(
				'customer' => $customer->id,
				'amount'   => $itemPrice,
				'currency' => $currency,
				'description' => $itemNumber,
				'metadata' => array(
					'item_id' => $itemNumber
				)
			));
			
			//retrieve charge details
			$chargeJson = $charge->jsonSerialize();

			//check whether the charge is successful
			if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1)
			{
				//order details 
				$amount = $chargeJson['amount'];
				$balance_transaction = $chargeJson['balance_transaction'];
				$currency = $chargeJson['currency'];
				$status = $chargeJson['status'];
				$date = date("Y-m-d H:i:s");
			
				
				//insert tansaction data into the database
				$dataDB = array(
					'name' => $name,
					'email' => $email, 
					'card_num' => $card_num, 
					'card_cvc' => $card_cvc, 
					'card_exp_month' => $card_exp_month, 
					'card_exp_year' => $card_exp_year, 
					'item_name' => $itemName, 
					'item_number' => $itemNumber, 
					'item_price' => $itemPrice, 
					'item_price_currency' => $currency, 
					'paid_amount' => $amount, 
					'paid_amount_currency' => $currency, 
					'txn_id' => $balance_transaction, 
					'payment_status' => $status,
					'created' => $date,
					'modified' => $date,
					'card_brand' => $chargeJson['source']['brand']
				);

				if ($this->db->insert('orders', $dataDB)) {
					if($this->db->insert_id() && $status == 'succeeded'){


$new_pass = rand(11111111111111,999999999999999);



			$this->load->library('email');
// from address
$this->email->from('mahir.v@code.edu.az', 'Mahir Valiyev');
$this->email->to($_POST['email']); // to Email address
$this->email->cc('mahir.v@code.edu.az'); // cc Email address (optional)
$this->email->bcc('mahir.v@code.edu.az'); // BCC Email Address (optional)
 
$this->email->subject('Email Test'); // email Subject 
$this->email->message('Pasha Bank ViP Hesab uğurla əlavə olundu.'.$_POST['mobile'].' -ilə hesaba daxil ola bilərsiniz. İstifadəçi adı : '.$_POST['mobile'].'. Şifrə : '.$new_pass); // email Body or Message 
$this->email->send(); // send Email 






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
				// $new_pass = rand(11111111111111,999999999999999);
				// //Email content
				// $htmlContent = '<h1>Təbriklər!!!</h1>';
				// $htmlContent .= '<p>Pasha Bank ViP Hesab uğurla əlavə olundu.</p>'.$_POST['mobile'].' -ilə hesaba daxil ola bilərsiniz. İstifadəçi adı : '.$_POST['mobile'].'. Şifrə : '.$new_pass;

				// $this->email->to('mahir.v@code.edu.az');
				// $this->email->from('mahir.v@code.edu.az');
				// $this->email->subject('Pasha Bank ViP Hesab');
				// $this->email->message($htmlContent);

				// //Send email
				// $this->email->send();



				$data = array(
					'c_name' => $_POST['name'],
					// 'c_surname' => $surname,
					'c_email' => $_POST['email'],
					'c_mobile' => $_POST['mobile'],
					'c_fincode' => $_POST['fincode'],
					'c_password' => md5($new_pass),
					'c_image' => 'default_profile.jpg'
				);

				$this->db->insert('customers',$data);































						$data['insertID'] = $this->db->insert_id();
						$this->load->view('payment_success', $data);
						// redirect('Welcome/payment_success','refresh');
					}else{
						echo "Transaction has been failed";
					}
				}
				else
				{
					echo "not inserted. Transaction has been failed";
				}

			}
			else
			{
				echo "Invalid Token";
				$statusMsg = "";
			}
		}
	}

	public function payment_success()
	{
		$this->load->view('payment_success');
	}

	public function payment_error()
	{
		$this->load->view('payment_error');
	}

	public function help()
	{
		$this->load->view('help');
	}
}
