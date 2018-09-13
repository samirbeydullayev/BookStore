<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_model extends CI_Model {

      public $table_name = "books";
       
       public function __construct()
        {
        	parent::__construct();
        	
        }

         // KITABLARIN HAMISIN GETIRIR
        public function get_all($where=array())
        {
            $this->db->select("*");
            $this->db->from($this->table_name);
            $this->db->where($where);
            // $this->db->join("authors","authors.id = $this->table_name.author_id");
           return $this->db->get()->result();
        }



             // bIR KITAB GETIRIR
      public function get($where)
   {
     return $this->db->where($where)->get($this->table_name)->row();
   }



    // Kitabi detaili
   // Authorunda getirilmesi
   public function get_detail($where = array())
   {
           $this->db->select("*");
            $this->db->from($this->table_name);
            $this->db->where($where);
            $this->db->join("authors","authors.id = $this->table_name.author_id");
           return $this->db->get()->row();
   }


    // CATEGORY BOOK
   public function book_categories($where = array())
   {
            $this->db->select("*");
            $this->db->from($this->table_name);
            $this->db->where($where);
            $this->db->join("category_to_book","book_id = $this->table_name.id");
            $this->db->join("category","category.id = category_to_book.category_id");
           return $this->db->get()->result();

   }






 
 
  
	

	

}
