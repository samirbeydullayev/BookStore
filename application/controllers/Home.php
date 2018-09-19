<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->model("Books_model");
		$this->load->helper('text');
		
	}

    // KITABLARIN GETIRILMESI HALI ////OBWILIKDE  MAIN MENU

	public function index()
	{ 

		// $df = array_values($_SESSION["items"]);

  //   print_r($df["0"]);
  //   die();
		
		$where = array(
			"isActive" => 1

		);
		$result = $this->Books_model->get_all($where);
	// ******************************************



		$view_data =  new stdClass();
		$view_data->view_folder = "Home_page";
		$view_data->books = $result;


		$this->load->view("$view_data->view_folder/index",$view_data);
	}

    // KITABLARIN GETIRILMESI HALI ////OBWILIKDE  MAIN MENU -son





 // *********************************************************************
 // *******************************************************************
    // BASKET WITH AJAX

	public function basket_add()
	{   
		$user = $this->session->userdata("user");
		$bookid = $this->input->post("bookid");


		$result = $this->Books_model->get(
			array(
				"id" => $bookid
			)
		);




		if (isset($user)) {

					// $sessionArray = array_values($_SESSION["items"]);

			$exists = false;
			foreach ($_SESSION["items"] as $item ) {
				if ($item->id == $result->id) {
					$exists = true;
					break;
				} 
			}

			if(!$exists){
				array_push($_SESSION["items"], $result); 
				$render_page = $this->load->view("Home_page/render","",TRUE);
				echo json_encode($render_page);
			}else{
				echo json_encode("dont_same");
			}

		} else {

			echo json_encode("error");
		}

	}

	public function basket_remove()
	{

		$bookid = $this->input->post("bookid");

		$result = $this->Books_model->get(
			array(
				"id" => $bookid
			)
		);


		if( isset( $_SESSION["items"])){

			$array = array_values($_SESSION["items"]);

			foreach ($array as $item) {
				if($item->id==$result->id){
					$elem = $item;
					break;
				}	
			}
			$key  =array_search($elem,$array);

			unset($array["$key"]);

			$_SESSION["items"] = $array;
			$render = $this->load->view("Home_page/mini_render_page","",TRUE);
			echo json_encode($render);

		}
	}

	public function book_search()
	{
		$input_value = $this->input->post("value");



		$match = $input_value;

		$result = $this->Books_model->book_search($match);
		header('Content-Type: application/json');
		echo json_encode($result);
		 



		
    
	}

	 // *********************************************************************
 // *******************************************************************
    // BASKET WITH AJAX -END











}
