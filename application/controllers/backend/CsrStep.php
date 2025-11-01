<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CsrStep extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['csr_step'] = $this->common->getAllData('csr_step');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csr_step/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['csr_step_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('csr_step_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'tab'=> $this->input->post('tab'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $csr_stepData = $this->common->insert('csr_step',$data);
                $this->session->set_flashdata('succ_msg', 'CSR Step Added Successfully.');
                redirect('csrstep');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csr_step/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['csr_step_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('csr_step_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                '       tab'=> $this->input->post('tab'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
                    $id = $this->input->post('id');
            $csr_stepData = $this->common->update('csr_step',$data,$id);
                $this->session->set_flashdata('succ_msg', 'CSR Step Updated Successfully.');
                redirect('csrstep');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['csr_step'] = $this->common->getSingleRows('csr_step',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csr_step/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $csr_stepData = $this->common->delete('csr_step',$id);
        if($csr_stepData){
            $this->session->set_flashdata('succ_msg', 'CSR Step Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('csrstep');
    }

}

?>