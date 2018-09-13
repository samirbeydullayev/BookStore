<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model("Login_model");
		
	}

	public function sign_up()
	{
		$view_data =  new stdClass();

		$view_data->view_folder = "Login_page";

		$this->load->view("$view_data->view_folder/index",$view_data);	
	}




	public function sign_post()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]',array("min_length" => "{field} minimum 3 xarakter olmalidir"));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('con_password', 'Confirm  Password', 'trim|required|min_length[5]|matches[password]');



		$alert = array(
			'required' => "<b>{field}</b>  must be fill required",
			'min_length' => "<b>{field}</b>  must be fill required",



		);

		$this->form_validation->set_message($alert);


		if ($this->form_validation->run() == FALSE) {


			$view_data =  new stdClass();
			$view_data->form_error = true;
			$view_data->view_folder = "Login_page";

			$this->load->view("$view_data->view_folder/index",$view_data);

		} else {

			$data = array(

				"username"   =>   $this->input->post("username"),
				"email"      =>   $this->input->post("email"),
				"password"   =>   sha1(md5($this->input->post("password"))),
				"isActive"   =>   1,
				"createdAt"  =>   date("Y-m-d  H:i:s")

			);

			$result = $this->Login_model->insert($data);

			if ($result) {	
				



				$alert = array(
					"type"    => "success",
					"title"   => "Congrulations",
					"subject" =>  "You have successfully registered and logged in"


				);

				$this->session->set_flashdata("alert", $alert);
				redirect("Home/index");
			} else {


				$alert = array(
					"type"    => "error",
					"title"   => "Errors",
					"subject" =>  "You don't have successfully registered"


				);

				$this->session->set_flashdata("alert", $alert);

				redirect("sign_up");

			}
			
			

		}

	}


	public function user_login()
	{
		$view_data =  new stdClass();

		$view_data->view_folder = "Login_page";

		$this->load->view("$view_data->view_folder/user_login/index",$view_data);	
	}


	public function login_post()
	{
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		$error = array(
			"required" => " <b>{field}</b> must be fill required"

		);

		$this->form_validation->set_message($error);

		if ($this->form_validation->run() == FALSE) {

			$view_data =  new stdClass();
			
			$view_data->form_error = "true";

			$view_data->view_folder = "Login_page";



			$this->load->view("$view_data->view_folder/user_login/index",$view_data);	


		} else {

			$username = $this->input->post("username");
			$password = $this->input->post("password");



			// REMEMBER ME

            $data = new stdClass();
			$data->username = $username;
			$data->password = $password;

			$this->session->set_userdata("remember_me",$data);

			// ***********************************************


		

			
			$where = array(
				"username"  => $username,
				"password"  => sha1(md5($password)),
				"isActive" =>1,
			);

			$result = $this->Login_model->get($where);


			if ($result) {

              $_SESSION["items"] = array();
	   
       
         
          // remember metaphone(
		// ***************************)
		     ($this->input->post("remember_me") == "on") ? $this->session->set_userdata("remember_me",$data) : $this->session->unset_userdata("remember_me");
		  // ***************************

				// session
				// *****************************
				$this->session->set_userdata("user",$result);
				
				// ******************************

				$alert = array(
					"type"    => "success",
					"title"   => "Welcome",
					"subject" =>  "$result->username"
				);

				$this->session->set_flashdata("alert", $alert);
				redirect("Home/index");
			} else {
				
				$alert = array(
					"type"    => "error",
					"title"   => "Errors",
					"subject" =>  "You password or username wrong!!"


				);

				$this->session->set_flashdata("alert", $alert);

				redirect("user_login");
			}
			

		}

	}

	public function forgot_password()
	{

		$email = $this->input->post("value");


		$where = array(

			"email" => $email,
			"isActive" =>1

		);

		$result = $this->Login_model->get($where);



		if ($result) {


			$config = array(
				"protocol"  => "smtp",
				"smtp_host" => "ssl://smtp.gmail.com",
				"smtp_port" => 465,
				"smtp_pass" => "asif6466122",
				"smtp_user" => "asifabdullayev646@gmail.com",
				"starttls"  => true,
				"charset"   => "utf-8",
				"mailtype"  => "html",
				"wordwrap"  => true,
				"newline"   => "\r\n"
			);


				   // String helper random kod duzelder sene
			$this->load->helper('string');
			$random_pass = random_string();

                //////////////////////////////////////

      // $link = base_url('home/activation/'.$activator);


			$this->load->library('email',$config);

			$this->email->from("asifabdullayev646@gmail.com","User Activation");
			$this->email->to($result->email);

			$this->email->subject('Reset Password');
			$this->email->message("Hormetli ".$result->username.", sizin sifreniz sifirlandi ,kecici olaraq bu sifre ile daxil ola bilersiniz  ".$random_pass);

			$send =  $this->email->send();



			if($send){
                  


				$where = array(
					"id" =>$result->id,
				);

				$data = array(

					"password" => $random_pass

				);
				$this->Login_model->update($where,$data);


				echo json_encode("true");
			  

			}


		} else {

				echo json_encode("false");
		

		}

	}


	public function login_out()
	{ 

		$_SESSION["items"] = array();
		$this->session->unset_userdata("user");
		redirect("Home/index");
	}

}

