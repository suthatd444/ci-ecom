<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load user model 
        $this->load->model('user'); 
        $this->load->model('common');
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    }

    public function index(){ 
        if($this->isUserLoggedIn){ 
            redirect('dashboard'); 
        }else{ 
            redirect('login'); 
        } 
    } 

	public function dashboard(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['career_form_list'] = $this->common->getAllData('career_form');
            $data['inquiry_form_list'] = $this->common->getAllData('locate_us_form');
            $data['user'] = $this->user->getRows('users',$con); 
            $this->load->view('backend/common/header', $data); 
            $this->load->view('dashboard', $data); 
            $this->load->view('backend/common/footer'); 
        }else{ 
            redirect('login'); 
        } 
    } 
 
    public function login(){ 
        $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('email'), 
                        'password' => md5($this->input->post('password'))
                    ) 
                ); 
                $checkLogin = $this->user->getRows('users',$con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    $this->session->set_userdata('name', $checkLogin['user_name']); 
                    $this->session->set_userdata('email', $checkLogin['email']); 
                    $this->session->set_userdata('image', $checkLogin['image']); 
                    $this->session->set_userdata('refferCode', $checkLogin['reffer_code']); 
                    redirect('dashboard'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        if($this->isUserLoggedIn){ 
        	redirect('dashboard'); 
        }else{ 
	        // Load view 
	        $this->load->view('login', $data); 
        }
    } 
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('login'); 
    } 

    public function my_profile()
    {
        $data = array('id'=>1);
        $data['user'] = $this->common->getSingleRows('users',$data);
        $this->load->view('backend/common/header'); 
        $this->load->view('my_profile',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function edit_profile()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['file_name'] = $_FILES['image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $filename = $this->input->post('old_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('user_name', 'user name', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'user_name'=> $this->input->post('user_name'),
                        'image'=>$filename
                    ) ;
            $users = $this->common->update('users',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Profile Updated Successfully.');
                redirect('my-profile');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        redirect('my-profile');
    }

    public function change_password()
    {
        if(!empty($this->input->post('submit'))){

            
            $this->form_validation->set_rules('old_password', 'old_password', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
                $user_id = array('id'=>1);
                $user = $this->common->getSingleRows('users',$user_id);
                if($user['password']==md5($this->input->post('old_password'))){
                if($this->input->post('new_password')==$this->input->post('confirm_password')){
                    $data = array( 
                                'password'=> md5($this->input->post('new_password')),
                            ) ;
                    $users = $this->common->update('users',$data,$id);
                    $this->session->set_flashdata('succ_msg', 'Password Updated Successfully.');
                    redirect('my-profile');
                }else{
                    $this->session->set_flashdata('error_msg', "New And Confirm Password Doesn't Match.");
                }
                }else{
                    $this->session->set_flashdata('error_msg', "Old Password Doesn't Match.");
                }
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        redirect('my-profile');
    }
     

}
