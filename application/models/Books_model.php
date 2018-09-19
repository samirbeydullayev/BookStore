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


    // CATEGORY BOOK-un getirilmesi iwleri
public function book_categories($where = array())
{
  $this->db->select("*");
  $this->db->from("category_to_book");
  $this->db->where($where);
            // $this->db->join("category_to_book","book_id = $this->table_name.id");
  $this->db->join("category","category.id = category_to_book.category_id");
  return $this->db->get()->result();
}


   // RELATED BOOK GETIRILMESI KITABIN DETAIL SEHIFESINDE

public function related_books($where = array(),$order =("id ASC"),$limit=array("start"=>0, "end" =>0))

{
 $this->db->select("*");
 $this->db->from($this->table_name);
 $this->db->where($where);
 $this->db->order_by($order);

 if(!empty($limit)){
  $this->db->limit($limit["start"],$limit["end"]);
}

return $this->db->get()->result();

}


 // Userin hesabina kitabin elave edilmesi

public function  buy_book($data=array())
{
  $this->db->insert("user_to_book",$data);
}

   // Userin kitab aldiqi tablenin  obwilikde getirilmesi

public function  user_book_table($where = array())
{

  $this->db->select("*");
  $this->db->where($where);
  $this->db->from("user_to_book");
  $this->db->join("$this->table_name","$this->table_name.id = user_to_book.book_id");
  return $this->db->get()->result();

}


 // Userin kitaba rey yazmasi ve vote vermesi

public function review_vote($data = array())
{
  return $this->db->insert("review",$data);
}


    // Bir kitabin altinda yazilan kommentler
public function one_book_review($where = array())
{
  $this->db->select("*");
  $this->db->from("review");
  $this->db->where($where);
  $this->db->join("users","users.id = review.user_id");
  return $this->db->get()->result();
}


public function book_search($match)
{
  $this->db->select("*");
  $this->db->from($this->table_name);
  $this->db->like("name",$match);
  return $this->db->get()->result();



  
}





}
