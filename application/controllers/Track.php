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
	   $this->load->model('employeeModel','postemployee');
	   $this->load->model('studentModel','postfeedback');
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
	     // print_r($result);
	 		foreach ($result as $result ) {
	 			$ucat = $result->user_category;
	 			if($ucat == 'Student' ){
	 				// echo 'Student';
	 				redirect("track/studentDashboard");

	 			}
	 			elseif($ucat == 'Admin'){
	 				// echo 'Admin';
	 				redirect("track/adminDashboard");	
	 			}
	 			elseif($ucat == 'Teacher'){
	 				// echo 'Teacher';
	 				redirect("track/teacherDashboard");	
	 			}
	 			elseif($ucat == 'IT Employee'){
	 				// echo 'IT Employee';
	 				redirect("track/employeeDashboard");
	 			}
	 		}
	    	
	     
	   }
	   else
	   {
	       echo '<p style="width: 300px; margin-right: auto; margin-left: auto; margin-top: 1%; color: #B22222"> Incorrect Username and Password </p>';
		    $this->load->view('login');
	   }
	 }

	 public function logout()
	 {
	 	$this->index();
	 	$this->load->library('session');	
	 }

	 // public function header()
	 // {
	 // 	$this->load->view('header');
	 // }

	 // public function adminHeader()
	 // {
	 // 	$this->load->view('admin/adminHeader');
	 // }

	 public function teacherHeader()
	 {
	 	$this->load->view('teacher/teacherHeader');
	 }

	 public function employeeHeader()
	 {
	 	$this->load->view('employee/employeeHeader');
	 }

	 public function studentHeader()
	 {
	 	$this->load->view('student/studentHeader');
	 }

	 // public function adminFooter()
	 // {
	 // 	$this->load->view('admin/adminFooter');
	 // }

	 public function teacherFooter()
	 {
	 	$this->load->view('teacher/teacherFooter');
	 }

	 public function employeeFooter()
	 {
	 	$this->load->view('employee/employeeFooter');
	 }

	 public function studentFooter()
	 {
	 	$this->load->view('student/studentFooter');
	 }

	 // public function footer()
	 // {
	 // 	$this->load->view('footer');
	 // }

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

	 public function adminRegister(){
	 	if(@$_POST['create_admin_user'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postregister->add($data);
			$this->session->set_flashdata('message',"User created successfully");
			$this->load->view("admin/adminRegister");
			$this->adminHeader();
			$this->adminFooter();
		}
		else{
			$this->adminHeader();
			$this->adminFooter();
			$this->load->view("admin/adminRegister");
		}
	 }

	 public function dashboard()
	 {
	 	$this->header();
	 	$this->load->view('other/dashboard');
	 	$this->footer();
	 }

	 public function adminDashboard()
	 {
	 	$this->adminHeader();
	 	$this->load->view('admin/adminDashboard');
	 	$this->adminFooter();
	 }

	 public function studentDashboard()
	 {
	 	$this->studentHeader();
	 	$this->load->view('student/studentDashboard');
	 	$this->studentFooter();
	 }

	 public function teacherDashboard()
	 {
	 	$this->teacherHeader();
	 	$this->load->view('teacher/teacherDashboard');
	 	$this->studentFooter();
	 }

	 public function employeeDashboard()
	 {
	 	$this->employeeHeader();
	 	$this->load->view('employee/employeeDashboard');
	 	$this->studentFooter();
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
		if(@$_POST['add_admin_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			// $this->postissue->get_fitchas();
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->adminHeader();
			$this->adminFooter();
			$this->load->view('admin/adminAddIssue',$newsdata);
		}

		else{
			$this->load->helper('form');
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->adminHeader();
			$this->adminFooter();
			$this->load->view('admin/adminAddIssue',$newsdata);
			
		}

	}

	 public function student_add_issue()
	{
		if(@$_POST['student_add_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->studentHeader();
			$this->studentFooter();
			$this->load->view('student/studentAddIssue',$newsdata);
		}

		else{
			$this->load->helper('form');
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->studentHeader();
			$this->studentFooter();
			$this->load->view('student/studentAddIssue',$newsdata);
			
		}

	}

	 public function teacher_add_issue()
	{
		if(@$_POST['teacher_add_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->teacherHeader();
			$this->teacherFooter();
			$this->load->view('teacher/teacherAddIssue',$newsdata);
		}

		else{
			$this->load->helper('form');
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->teacherHeader();
			$this->teacherFooter();
			$this->load->view('teacher/teacherAddIssue',$newsdata);
			
		}

	}

	 public function employee_add_issue()
	{
		if(@$_POST['employee_add_issue'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postissue->add($data);
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->employeeHeader();
			$this->employeeFooter();
			$this->load->view('employee/employeeAddIssue',$newsdata);
		}

		else{
			$this->load->helper('form');
			$newsdata['fichas_info'] = $this->postemployee->get_fichas();
			$this->employeeHeader();
			$this->employeeFooter();
			$this->load->view('employee/employeeAddIssue',$newsdata);
			
		}

	}

	 public function viewIssue()
	{
		$this->adminHeader();
		$this->adminFooter();
		$data['posts']=$this->postissue->getAll();
		$this->load->view('admin/viewIssue',$data);
	}

	public function studentViewIssue()
	{
		$this->studentHeader();
		$this->studentFooter();
		$data['posts']=$this->postissue->getAll();
		$this->load->view('student/viewIssue',$data);
	}

	public function teacherViewIssue()
	{
		$this->teacherHeader();
		$this->teacherFooter();
		$data['posts']=$this->postissue->getAll();
		$this->load->view('teacher/viewIssue',$data);
	}

	public function employeeViewIssue()
	{
		$this->employeeHeader();
		$this->employeeFooter();
		$data['posts']=$this->postissue->getAll();
		$this->load->view('employee/viewIssue',$data);
	}


	public function editIssue()
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
			$data = $_POST['post'];
			$this->postissue->update($data,$id);
			$data['fichas_info'] = $this->postemployee->get_fichas();
			$this->session->set_flashdata('message',"Issue updated successfully");
			redirect("track/editIssue");
			// echo '2';

			$this->adminHeader();
			$this->adminFooter();
			redirect("track/editIssue");
		}

		// echo '3';
		$this->adminHeader();
		$this->adminFooter();
		$data['post'] = $post;
		$data['fichas_info'] = $this->postemployee->get_fichas();
		$this->load->view('admin/editIssue',$data);
	}

	public function employeeEditIssue()
	{
		$id = $this->uri->segment(3);
		$post = $this->postissue->getById($id);
		if(!$post)
		{
			// echo '1';
			redirect("track/employeeViewIssue");
		}

		if(@$_POST['employee_update_issue'])
		{
			$this->load->view('header');
			$this->load->view('footer');
			$data = $_POST['post'];
			$this->postissue->update($data,$id);
			$this->session->set_flashdata('message',"Issue updated successfully");
			redirect("track/employeeEditIssue");
			// echo '2';
		}

		// echo '3';
		$this->employeeHeader();
		$this->employeeFooter();
		$data['post'] = $post;
		$this->load->view('employee/editIssue',$data);
	}

	public function deleteIssue()
	{
		$id = $this->uri->segment(3);
		$this->postissue->delete($id);
		$this->session->set_flashdata('message',"Issue deleted successfully");
		redirect("track/viewIssue");
	}

	public function employeeDeleteIssue()
	{
		$id = $this->uri->segment(3);
		$this->postissue->delete($id);
		$this->session->set_flashdata('message',"Issue deleted successfully");
		redirect("track/employeeViewIssue");
	}

	// from here begins the admin adding employee part 
	 public function admin_add_employee()
	{
		if(@$_POST['add_employee'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postemployee->add($data);
			$this->session->set_flashdata('message',"Issue submitted successfully");
			$this->adminHeader();
			redirect("track/admin_add_employee");
			// $this->load->view("admin/adminAddEmployee");
			$this->adminFooter();
		}

		else{
			$this->adminHeader();
			$this->load->view('admin/adminAddEmployee');
			$this->adminFooter();
		}

	}

	 public function admin_view_employee()
	{
		$this->adminHeader();
		$this->adminFooter();
		$data['posts']=$this->postemployee->getAll();
		$this->load->view('admin/adminViewEmployee',$data);
	}

	public function editEmployee()
	{
		$id = $this->uri->segment(3);
		$post = $this->postemployee->getById($id);
		if(!$post)
		{
			// echo '1';
			redirect("track/admin_view_employee");
		}

		if(@$_POST['update_employee'])
		{
			$this->load->view('header');
			$this->load->view('footer');
			$data = $_POST['post'];
			$this->postemployee->update($data,$id);
			$this->session->set_flashdata('message',"Issue updated successfully");
			redirect("track/editEmployee");
			// echo '2';
		}

		// echo '3';
		$this->adminHeader();
		$this->adminFooter();
		$data['post'] = $post;
		$this->load->view('admin/editEmployee',$data);
	}

	public function deleteEmployee()
	{
		$id = $this->uri->segment(3);
		$this->postemployee->delete($id);
		$this->session->set_flashdata('message',"Employee deleted successfully");
		redirect("track/admin_view_employee");
	}

	public function studentFeedback(){
	 	if(@$_POST['add_feedback'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postfeedback->add($data);
			$this->session->set_flashdata('message',"Feedback added successfully");
			$this->load->view("student/studentFeedbackView");
			$this->studentHeader();
			$this->studentFooter();
		}
		else{
			$this->studentHeader();
			$this->studentFooter();
			$this->load->view("student/studentFeedbackView");
		}
	 }

}
