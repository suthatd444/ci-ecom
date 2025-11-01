<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['blogs'] = $this->common->getAllData('blog');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/blog/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['blog_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('blog_img')) {
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
                        // 'title'=> $this->input->post('title'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $blogData = $this->common->insert('blog',$data);
                $this->session->set_flashdata('succ_msg', 'Blog Added Successfully.');
                redirect('blog');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/blog/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['blog_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('blog_img')) {
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
                        // 'title'=> $this->input->post('title'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $blogData = $this->common->update('blog',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Blog Updated Successfully.');
                redirect('blog');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['blog'] = $this->common->getSingleRows('blog',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/blog/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $blogData = $this->common->delete('blog',$id);
        if($blogData){
            $this->session->set_flashdata('succ_msg', 'Blog Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('blog');
    }

}

?>