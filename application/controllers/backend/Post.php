<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['posts'] = $this->common->getAllData('post');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/post/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['post_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('post_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
            // $this->form_validation->set_rules('sub_title', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                 'title'=> $this->input->post('title'), 
                        'post_type'=> $this->input->post('post_type'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $PostData = $this->common->insert('post',$data);
                $this->session->set_flashdata('succ_msg', 'Post Added Successfully.');
                redirect('post');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/post/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['post_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('post_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
            // $this->form_validation->set_rules('sub_title', 'title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                 'title'=> $this->input->post('title'), 
                        'post_type'=> $this->input->post('post_type'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $PostData = $this->common->update('post',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Post Updated Successfully.');
                redirect('post');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['post'] = $this->common->getSingleRows('post',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/post/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $PostData = $this->common->delete('post',$id);
        if($PostData){
            $this->session->set_flashdata('succ_msg', 'Post Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('post');
    }

}

?>