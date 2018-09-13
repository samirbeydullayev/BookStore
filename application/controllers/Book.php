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

		$where = array(
        "books.id" => $id
		);
		$result = $this->Books_model->get_detail($where);
		$categories = $this->Books_model->book_categories($where);

		$view_data =  new stdClass();
		$view_data->view_folder = "BookDetail_page";
		$view_data->book = $result;
		$view_data->categories = $categories;



		$this->load->view("$view_data->view_folder/index",$view_data);
		
	}

}

