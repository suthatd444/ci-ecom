<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityCertification extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['quality_certifications'] = $this->common->getAllData('quality_certification');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/quality_certification/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['quality_certification_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('quality_certification_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('tab', 'tab', 'required'); 
            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'tab'=> $this->input->post('tab'), 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $quality_certificationData = $this->common->insert('quality_certification',$data);
                $this->session->set_flashdata('succ_msg', 'Quality Certification Added Successfully.');
                redirect('quality-certifications');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/quality_certification/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['quality_certification_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('quality_certification_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

             $this->form_validation->set_rules('tab', 'tab', 'required'); 
            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'tab'=> $this->input->post('tab'), 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
                    $id = $this->input->post('id');
            $quality_certificationData = $this->common->update('quality_certification',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Quality Certification Updated Successfully.');
                redirect('quality-certifications');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['quality_certification'] = $this->common->getSingleRows('quality_certification',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/quality_certification/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $quality_certificationData = $this->common->delete('quality_certification',$id);
        if($quality_certificationData){
            $this->session->set_flashdata('succ_msg', 'Quality Certification Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('quality-certifications');
    }

}

?>