<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {

        if(!empty($this->input->post('submit'))){

            $this->form_validation->set_rules('description', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description')
                    ) ;
            $career = $this->common->update('career',$data,1);
                $this->session->set_flashdata('succ_msg', 'Career Added Successfully.');
                redirect('careers');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>1);
        $data['career'] = $this->common->getSingleRows('career',$id);
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/career/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public  function career_list()
    {
        $data['careerpoint'] = $this->common->getAllData('career_point');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/career/career_list',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $this->form_validation->set_rules('description', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'title'=> $this->input->post('title')
                    ) ;
            $blogData = $this->common->insert('career_point',$data);
                $this->session->set_flashdata('succ_msg', 'Career Point Added Successfully.');
                redirect('careers-list');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/career/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

           
            $this->form_validation->set_rules('description', 'title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'title'=> $this->input->post('title')
                    ) ;
            $blogData = $this->common->update('career_point',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Career Point Updated Successfully.');
                redirect('careers-list');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['careerpoint'] = $this->common->getSingleRows('career_point',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/career/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $blogData = $this->common->delete('career_point',$id);
        if($blogData){
            $this->session->set_flashdata('succ_msg', 'BlCareer Pointog Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('careers-list');
    }

}

?>