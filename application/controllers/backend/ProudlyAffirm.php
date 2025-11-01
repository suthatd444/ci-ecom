<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProudlyAffirm extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['proudly_affirms'] = $this->common->getAllData('proudly_affirm');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/proudly_affirm/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['proudly_affirm_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('proudly_affirm_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $proudly_affirmData = $this->common->insert('proudly_affirm',$data);
                $this->session->set_flashdata('succ_msg', 'Proudly Affirm Added Successfully.');
                redirect('proudly-affirm');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/proudly_affirm/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['proudly_affirm_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('proudly_affirm_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $proudly_affirmData = $this->common->update('proudly_affirm',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Proudly Affirm Updated Successfully.');
                redirect('proudly-affirm');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['proudly_affirm'] = $this->common->getSingleRows('proudly_affirm',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/proudly_affirm/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $proudly_affirmData = $this->common->delete('proudly_affirm',$id);
        if($proudly_affirmData){
            $this->session->set_flashdata('succ_msg', 'Proudly Affirm Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('proudly-affirm');
    }

}

?>