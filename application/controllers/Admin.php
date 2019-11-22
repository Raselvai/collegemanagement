<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function dashboard(){
        $this->load->view('dashboard');
    }
    public function addcollege(){
        $this->load->view('addcollege');
    }
    public function addCoadmin(){
        $this->load->model('queries');
        $roles = $this->queries->getroles();
        $colleges = $this->queries->getcolleges();
		$this->load->view('addcoadmin',['roles'=>$roles,'colleges'=>$colleges]);
    }
    public function addstudent(){

    }
    public function createCollege(){
        $this->form_validation->set_rules('collegename','College name','Required');
		$this->form_validation->set_rules('branch','Branch','Required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if ($this->form_validation->run() ){
            $data = $this->input->post();
            $this->load->model('queries');
            if ($this->queries->makeCollege($data)) {
                $this->session->set_flashdata('message', 'College created Successfully');
                return redirect('admin/addcollege');
            }else {
                $this->session->set_flashdata('message', 'failed to created college');
                return redirect('admin/addcollege');
            }
        }else {
            $this->addcollege();
        }
    }
    public function createCoadmin(){
        $this->form_validation->set_rules('username','Username','Required');
        $this->form_validation->set_rules('college_id','College Name','Required');
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
			if ( $this->queries->registerCoadmin($data) ) {
				$this->session->set_flashdata('message','Coadmin Registerd Successfully');
				return redirect("admin/addCoadmin");
			}else{
				$this->session->set_flashdata('message','Failed to Registerd Successfully!');
				return redirect("admin/addCoadmin");
            }
             echo "validation passed";
		}else{
			$this->addCoadmin();
		}
    }
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('user_id'))
            return redirect("welcome/login");
        
    }
}