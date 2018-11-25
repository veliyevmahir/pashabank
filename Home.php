<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($lang = '')
	{
		$this->lang->load('content',$lang == '' ? 'az' : $lang);
		$lang_segment = $this->uri->segment(3);
		if($lang_segment == ''){
			$lang_segment = 'az';
		}
		$_SESSION['language'] = $lang_segment;

		if($_SESSION['language'] == ''){
			$_SESSION['language'] = 'az';
		}


		$data['all_places'] = $this->db->order_by('p_id','DESC')->
		join('places_metro','places_metro.metro_id = places.p_metro')
		->get('places')->result_array();
        // print_r('<pre>');
        // print_r($data['all_places']);
// exit();

		$data['all_metro'] = $this->db->get('places_metro')->result_array(); 
		$data['all_rayon'] = $this->db->get('places_country')->result_array(); 

        $data['all_menu'] = $this->db->get('place_kitchen')->result_array();
        $data['all_businnes_center'] = $this->db->get('places_businnes_center')->result_array();
        $data['all_type'] = $this->db->get('place_type')->result_array();

        $data['all_settlement'] = $this->db->get('p_settlement')->result_array();
        $data['all_language'] = $this->db->get('places_language')->result_array();
        $data['all_organization'] = $this->db->get('places_organization')->result_array();

		$this->load->view('index',$data);
	}


	public function menu($lang='',$places_id){

        $this->lang->load('content',$lang == '' ? 'az' : $lang);
        $lang_segment = $this->uri->segment(3);
        if($lang_segment == ''){
            $lang_segment = 'az';
        }
        $_SESSION['language'] = $lang_segment;

        if($_SESSION['language'] == ''){
            $_SESSION['language'] = 'az';
        }

		$data['all_menu_names'] = $this->db->get('places_menu_names')->result_array();
		$data['all_places_menus'] = $this->db->where('menu_place_id',$places_id)->get('places_menu')->result_array();
		$data['places_data'] = $this->db
->join('places_metro','places_metro.metro_id = places.p_metro', 'left')
		->join('places_country','places_country.country_id = places.p_country', 'left')
        ->join('place_type','place_type.type_id = places.p_type')
		->where('p_id',$places_id)->get('places')->row();
		$this->load->view('menu',$data);
	}

	public function details($lang,$places_id){

		$this->lang->load('content',$lang == '' ? 'az' : $lang);
		$lang_segment = $this->uri->segment(3);
		if($lang_segment == ''){
			$lang_segment = 'az';
		}
		$_SESSION['language'] = $lang_segment;

		if($_SESSION['language'] == ''){
			$_SESSION['language'] = 'az';
		}

		$data['places_data'] = $this->db->

		where('p_id',$places_id)
        ->join('places_microcountry','places_microcountry.micro_id = places.p_microcountry','left')
		->join('places_music','places_music.music_id = places.p_music', 'left')
		->join('places_language','places_language.language_id = places.p_foreign_language', 'left')
		->join('place_kitchen','place_kitchen.kitchen_id = places.p_kitchen', 'left')
		->join('places_organization','places_organization.organization_id = places.p_organization_skills', 'left')
		->join('place_type','place_type.type_id = places.p_type', 'left')
		->join('places_metro','places_metro.metro_id = places.p_metro', 'left')
		->join('places_country','places_country.country_id = places.p_country', 'left')
		->join('p_settlement','p_settlement.settlement_id = places.p_settlement', 'left')
		->join('places_shopping_center','places_shopping_center.shopping_id = places.p_shopping_center', 'left')
		->join('places_businnes_center','places_businnes_center.businnes_id = places.p_businnes_center', 'left')
		->join('places_menu_names','places_menu_names.menu_name_id = places.p_menu')

		->get('places')->row();

		$data['all_music'] = $this->db->get('places_music')->result_array();
		$data['all_menu_names'] = $this->db->get('places_menu_names')->result_array();
		$data['all_lang'] = $this->db->get('places_language')->result_array();
		$data['all_organization'] = $this->db->get('places_organization')->result_array();
		$data['all_kitchen'] = $this->db->get('place_kitchen')->result_array();
		$data['all_type'] = $this->db->get('place_type')->result_array();
        $data['all_settlement'] = $this->db->get('p_settlement')->result_array();


		$this->load->view('restaurant_details',$data);
	}




   








	public function gallery($lang='',$place_id){


        $this->lang->load('content',$lang == '' ? 'az' : $lang);
        $lang_segment = $this->uri->segment(3);
        if($lang_segment == ''){
            $lang_segment = 'az';
        }
        $_SESSION['language'] = $lang_segment;

        if($_SESSION['language'] == ''){
            $_SESSION['language'] = 'az';
        }



$data['places_data'] = $this->db
->join('places_metro','places_metro.metro_id = places.p_metro', 'left')
        ->join('places_country','places_country.country_id = places.p_country', 'left')
        ->join('place_type','place_type.type_id = places.p_type')
        ->where('p_id',$place_id)->get('places')->row();

	    // $data['places_data'] = $this->db->where('p_id',$place_id)->get('places')->row();
	    $data['single_place_data'] = $this->db->where('g_p_name',$place_id)->get('place_gallery')->result_array();
	    $this->load->view('gallery',$data);
    }




    public function search($lang = ''){


        $this->lang->load('content',$lang == '' ? 'az' : $lang);
        $lang_segment = $this->uri->segment(3);
        if($lang_segment == ''){
            $lang_segment = 'az';
        }
        $_SESSION['language'] = $lang_segment;

        if($_SESSION['language'] == ''){
            $_SESSION['language'] = 'az';
        }


	    $cafe_name = strip_tags($_POST['cafe_name']);

	    $data['all_places'] = $this->db->like('p_name_az',$cafe_name)->join('places_metro','places_metro.metro_id = places.p_metro')->get('places')->result_array();
        $this->load->view('index',$data);

    }






    public function all_search($lang = ''){


       $this->lang->load('content',$lang == '' ? 'az' : $lang);
       $lang_segment = $this->uri->segment(3);
       if($lang_segment == ''){
           $lang_segment = 'az';
       }
       $_SESSION['language'] = $lang_segment;

       if($_SESSION['language'] == ''){
           $_SESSION['language'] = 'az';
       }

    	$wifi = $this->input->post('wifi');
    	$metro = $_POST['metro'];
    	$rayon = $_POST['rayon'];
    	$no_smoking = $this->input->post('no_smoking');
    	$smoking = $this->input->post('smoking');
    	$food_delivery = $this->input->post('food_delivery');

        $pay_with_plastic_card = $this->input->post('pay_with_plastic_card');

    	$p_romantic_dinner = $this->input->post('p_romantic_dinner');
    	$kondisioner = $this->input->post('kondisioner');
        $deposit = $this->input->post('deposit');
        $fun = $this->input->post('fun');



        $big_holding = $this->input->post('big_holding');
        $summer_terrace = $this->input->post('summer_terrace');
        $country_side = $this->input->post('country_side');

        $cafe_type = $_POST['cafe_type'];
        $come_with_small_pets = $this->input->post('come_with_small_pets');
        $pay_with_bank_card = $this->input->post('pay_with_bank_card');
        $come_with_big_pet = $this->input->post('come_with_big_pet');
        $settlement = $_POST['settlement'];
        $pay_order_with_card = $this->input->post('pay_order_with_card');
        $parking = $this->input->post('parking');
        $language = $_POST['language'];
        $organization = $this->input->post('organization');

        
        if($organization > 0){
            $this->db->where('p_organization_skills', $organization);

        }else{

        }



        if($settlement > 0){
            $this->db->where('p_type', $settlement);

        }else{

        }

        if($language > 0){
            $this->db->where('p_language', $language);

        }else{

        }

        if($cafe_type > 0){
            $this->db->where('p_type', $cafe_type);

        }else{

        }

        if($parking == 1){
            $this->db->where('p_park', $parking);

        }

        
        if($pay_order_with_card == 1){
            $this->db->where('p_delivery_pay_plastic_card', $pay_order_with_card);

        }

        if($come_with_small_pets == 1){
            $this->db->where('p_come_with_small_pet', $come_with_small_pets);

        }

        if($pay_with_bank_card == 1){
            $this->db->where('p_big_holding', $pay_with_bank_card);

        }

        if($come_with_big_pet == 1){
            $this->db->where('p_come_with_great_pet', $come_with_big_pet);

        }


        if($big_holding == 1){
            $this->db->where('p_big_holding', $fun);

        }

                if($summer_terrace == 1){
            $this->db->where('p_summer_terrace', $summer_terrace);

        }

                if($country_side == 1){
            $this->db->where('p_country_side', $country_side);

        }




        if($fun == 1){
            $this->db->where('p_fun', $fun);

        }

        if($deposit == 1){
            $this->db->where('p_deposit', $deposit);
        }

        if($pay_with_plastic_card == 1){
            $this->db->where('p_pay_by_plastic_card',$pay_with_plastic_card);
        }else{

        }

    	if($wifi == 1){
    		$this->db->where('p_wifi', $wifi);
    	}else{

    	}

    	if($kondisioner == 1){
    		$this->db->where('p_conditioners',$kondisioner);
    	}else{
    		
    	}

    	if($metro){
    		$this->db->where('p_metro', $metro);
    	}else{
    		// echo "metro yoxdur";
    	}

    	if($rayon > 0){
    		$this->db->where('p_country', $rayon);
    	}else{

    	}

    	if($smoking == 1){
    		// echo "";
    		$this->db->where('p_cigaret', $smoking);
    	}else{
    		// echo "";
    	}

    	if($food_delivery == 1){
    		$this->db->where('p_food_delivery',1);
    	}else{

    	}

    	if($p_romantic_dinner == 1){
    		$this->db->where('p_romantic_dinner',1);
    	}else{

    	}

    	$data['all_places'] = $this->db->join('places_metro','places_metro.metro_id = places.p_metro')->get('places')->result_array();
$data['all_metro'] = $this->db->get('places_metro')->result_array(); 
		$data['all_rayon'] = $this->db->get('places_country')->result_array(); 

        $data['all_metro'] = $this->db->get('places_metro')->result_array(); 
        // $data['all_rayon'] = $this->db->get('places_country')->result_array(); 

        $data['all_menu'] = $this->db->get('place_kitchen')->result_array();
        $data['all_businnes_center'] = $this->db->get('places_businnes_center')->result_array();



       $this->load->view('index',$data);












//
//
//        $food_delivery = $_POST['food_delivery'];
//        $smoking = $_POST['smoking'];
//        $wifi = $_POST['wifi'];
//        $metro = $_POST['metro'];
//        $rayon = $_POST['rayon'];
//
//        if($wifi == 1){
//            $this->db->where('p_wifi', $wifi);
//        }else{
//            $this->db->where('p_wifi', 2);
//        }
//
//        if($metro){
//            $this->db->where('p_metro', $metro);
//        }else{
//
//        }
//
//        if($rayon){
//            $this->db->where('p_country', $rayon);
//        }else{
//
//        }
//
//        $data['all_places'] = $this->db->join('places_metro','places_metro.metro_id = places.p_metro')->get('places')->result_array();
//
//
//        $this->load->view('index',$data);


    }




























































































































}
