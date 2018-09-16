<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model("Books_model");


	}

	public function index($id)
	{ 


		 // DETAIL SEHIFESINDE 1 KITABIN GETIRILMESI
		$where = array(
			"books.id" => $id
		);
		$result = $this->Books_model->get_detail($where);

       // CATEGORIYANIN GETIRILMESI
		$category_where = array(
			"book_id"  => $id
		);
		$categories = $this->Books_model->book_categories($category_where);

         // AUTHORU EYNI OLAN KITABLARIN GETIRILMESI
		$related_where = array(
			"id !=" => $id,
			"author_id" => $result->author_id
		);
		$limit= array(
			"start" =>4,
			"end"  => 0
		);
		$related_books = $this->Books_model->related_books($related_where,("rand()"),$limit);





		$view_data =  new stdClass();
		$view_data->view_folder = "BookDetail_page";
		$view_data->book = $result;
		$view_data->categories = $categories;
		$view_data->related_books = $related_books;





		$this->load->view("$view_data->view_folder/index",$view_data);
		
	}

   // USERIN KITAB ELAVE ETME MERHELESI
	public function  user_buy_books()
	{   

		$user = $this->session->userdata("user");

		$user_book_tables = $this->Books_model->user_book_table();


		$isbn = $this->input->post("isbn");

		$where = array(
			"isbn" =>  $isbn
		);
		$buy_book = $this->Books_model->get($where);

		if ($user) {

		 // KITABIN ELAVE EDILMESI ani
			$exsits = true;
			foreach ($user_book_tables as $ubt ) {
				if ($ubt->user_id==$user->id && $ubt->book_id==$buy_book->id) {
					$exsits = false;
					break;
				}       
			}
			if ($exsits) {



				$data = array(
					"user_id" =>$user->id,
					"book_id" => $buy_book->id
				);



				$result = $this->Books_model->buy_book($data);


				if (!$result) {
					echo json_encode("success");

				} else {
					echo json_encode("error");

				}



			} else {
				echo json_encode("same_book"); 

			}






		} else {
			echo json_encode("user_error");
		}

	}
	public function my_books()
	{
		$user = $this->session->userdata("user");

		 $where = array(
         "user_id"  => $user->id
		 );

		 $my_books = $this->Books_model->user_book_table($where);



        $view_data =  new stdClass();
		$view_data->view_folder = "MyBooks_page";
		$view_data->my_books = $my_books;
		$this->load->view("$view_data->view_folder/index",$view_data);
		
	}

}

