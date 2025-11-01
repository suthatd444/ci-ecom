<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityAssurance extends CI_Controller {

	function __construct() { 
        parent::__construct();
        // Load user model 
        $this->load->model('common');  
    }

    public function index()
    { 

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['quality_assurance_image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('quality_assurance_image')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = 1;
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $blogData = $this->common->update('quality_assurance',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Quality Assurance Added Successfully.');
                redirect('qualityassurance');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>1);
        $data['qualityassurance'] = $this->common->getSingleRows('quality_assurance',$data);
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/qualityassurance/index',$data); 
        $this->load->view('backend/common/footer');  
    } 

    public function inspectiontesting()
    {
        $data['inspectiontesting'] = $this->common->getAllData('inspection_testing');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/qualityassurance/inspectiontesting',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['inspection_testing_image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('inspection_testing_image')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $blogData = $this->common->insert('inspection_testing',$data);
                $this->session->set_flashdata('succ_msg', 'Inspection Testing Added Successfully.');
                redirect('inspectiontesting');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/qualityassurance/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['inspection_testing_image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('inspection_testing_image')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $blogData = $this->common->update('inspection_testing',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Inspection Testing Updated Successfully.');
                redirect('inspectiontesting');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['inspectiontesting'] = $this->common->getSingleRows('inspection_testing',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/qualityassurance/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $blogData = $this->common->delete('inspection_testing',$id);
        if($blogData){
            $this->session->set_flashdata('succ_msg', 'Inspection Testing Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('inspectiontesting');
    }

}

?>