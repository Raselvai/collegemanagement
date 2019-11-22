<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/footer');

		$this->load->model('queries');
		$chkAdminExist = $this->queries->chkAdminExist();
		$this->load->view('home',['chkAdminExist'=>$chkAdminExist]);
	}
	public function adminregister(){
		$this->load->model('queries');
		$roles = $this->queries->getroles();
		$this->load->view('register',['roles'=>$roles]);
	}
	public function adminsignup(){
		$this->form_validation->set_rules('username','Username','Required');
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_rules('gender','Gender','Required');
		$this->form_validation->set_rules('role_id','Role','Required');
		$this->form_validation->set_rules('password','Password','Required');
		$this->form_validation->set_rules('confpwd','Re Password','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ($this->form_validation->run() ){
			$data = $this->input->post();
			$data['password'] = md5($this->input->post('password'));
			$data['confpwd'] = md5($this->input->post('confpwd'));
			$this->load->model('queries');
			if ( $this->queries->registerAdmin($data) ) {
				$this->session->set_flashdata('message','Admin Registerd Successfully');
				return redirect("welcome/adminregister");
			}else{
				$this->session->set_flashdata('message','Failed to Registerd Successfully!');
				return redirect("welcome/adminregister");
			}
		}else{
			echo $this->adminregister();
		}
	}
	public function login(){
		$this->load->view('login');
		if ($this->session->userdata("user_id")) {
			return redirect("admin/dashboard");
		}
	}
	public function signin(){
		$this->form_validation->set_rules('email','Email','Required');
		$this->form_validation->set_rules('password','password','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if ($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->model('queries');
			$userExist = $this->queries->adminExist($email,$password);
			if ($userExist) {
				$sessionData = [
					'user_id' => $userExist->user_id,
					'username' => $userExist->username,
					'email' => $userExist->email,
					'role_id' => $userExist->role_id,
			];
				$this->session->set_userdata($sessionData);
				return redirect("admin/dashboard");
			}else {
				$this->session->set_flashdata('message', 'Email or Password is Incorrect');
				return redirect("welcome/login");
			}
		}else{
			$this->login();
		}
	}
	public function logout(){
		$this->session->unset_userdata("user_id");
		return redirect("welcome/login");
	}
}
