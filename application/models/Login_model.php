<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $table_name = "users";

   public function __construct()
   {
   	parent::__construct();
   }

   public function insert($data = array())
   {
      return $this->db->insert($this->table_name,$data);
   }

   public function get($where)
   {
   	 return $this->db->where($where)->get($this->table_name)->row();
   }

   public function  update($where = array(),$data = array())
   {
   	return $this->db->where($where)->update($this->table_name,$data);
   }
	

}

