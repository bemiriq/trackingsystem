<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   //echo "FOUND MODEL";
	   $this->load->library('session');
	   $this->load->model('loginModel','',TRUE);
	   $this->load->model('registerModel','postregister');
	   $this->load->model('issueModel','postissue');

	 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//This method will have the credentials validation

		// the code below here is for the logout function 
		$this->load->library('session');
		// end of the logout function code
		$this->load->helper('form'); 
		// $this->load->library('session');
	   	$this->load->library('form_validation');
	   	// $this->post->pop_room_type($data, 'room_type');
	  	$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
	   	$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
		    //Field validation failed.  User redirected to login page
		    $this->load->view('login');
		    // echo 'incorrect password';
		}
		
	}

	 function check_database($password)
	 {
	    
	   $username = $this->input->post('username');

	   $result = $this->loginModel->login($username, $password);

	   if($result)
	   {
	     
	     $this->dashboard();
	     
	   }
	   else
	   {
	       echo '<p style="width: 300px; margin-right: auto; margin-left: auto; margin-top: 1%; color: #B22222"> Incorrect Username and Password </p>';
		    $this->load->view('login');
	   }
	 }

	 public function header()
	 {
	 	$this->load->view('header');
	 }

	 public function footer()
	 {
	 	$this->load->view('footer');
	 }

	 public function register()
	 {
	 	if(@$_POST['create_user'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postregister->add($data);
			$this->session->set_flashdata('message',"User created successfully");
			$this->load->view("register");
		}
		else{
			$this->load->view("register");
		}
	 }

	 public function dashboard()
	 {
	 	$this->header();
	 	$this->load->view('other/dashboard');
	 	$this->footer();
	 }

	 /** Below functions defines about the issue post function **/

	 public function addIssue()
	 {

	 	if(@$_POST['add_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->header();
			$this->load->view("issueForm");
			$this->footer();
		}

		else{
			$this->header();
			$this->load->view("issueForm");
			$this->footer();
		}
	 }


	 // public function admin()
	 // {
	 // 	$this->header();
	 // 	$this->load->view('admin/viewIssue');
	 // 	$this->footer();
	 // }

	 public function admin()
	{
		$this->load->view('admin/adminHeader');
		$this->load->view('admin/adminFooter');
		$this->load->view('admin/adminDashboard');	
	}

	public function adminHeader()
	{
		$this->load->view('admin/adminHeader');
	}

	public function adminFooter()
	{
		$this->load->view('admin/adminFooter');
	}

	 public function admin_add_issue()
	{
		if(@$_POST['add_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->header();
			$this->load->view("issueForm");
			$this->footer();
		}

		else{
			$this->adminHeader();
			$this->load->view('admin/adminAddIssue');
			$this->adminFooter();
		}

	}

	 public function viewIssue()
	{
		$this->adminHeader();
		$this->adminFooter();
		$data['posts']=$this->postissue->getAll();
		$this->load->view('admin/adminViewIssue',$data);
	}

	function editIssue()
	{
		$id = $this->uri->segment(3);
		$post = $this->postissue->getById($id);
		if(!$post)
		{
			// echo '1';
			redirect("track/viewIssue");
		}

		if(@$_POST['update_issue'])
		{
			$this->load->view('header');
			$this->load->view('footer');
			$data = $_POST['post'];
			$this->postissue->update($data,$id);
			$this->session->set_flashdata('message',"Issue updated successfully");
			redirect("track/editIssue");
			// echo '2';
		}

		// echo '3';
		$this->load->view('header');
		$this->load->view('footer');
		$data['post'] = $post;
		$this->load->view("track/viewIssue",$data);
	}

	function deleteIssue()
	{
		$id = $this->uri->segment(3);
		$this->postissue->delete($id);
		$this->session->set_flashdata('message',"Issue deleted successfully");
		redirect("track/viewIssue");
	}

}
