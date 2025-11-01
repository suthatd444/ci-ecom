<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndustryPresence extends CI_Controller {

	function __construct() { 
        parent::__construct();
        // Load user model 
        $this->load->model('common');  
    }

    public function index()
    { 
        $data['industry_presence'] = $this->common->getAllData('industry_presence');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/industry_presence/index',$data); 
        $this->load->view('backend/common/footer');  
    } 

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
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
            $productData = $this->common->insert('industry_presence',$data);
                $this->session->set_flashdata('succ_msg', 'Explore Interests Added Successfully.');
                redirect('industry-presence');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/industry_presence/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
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
            $productData = $this->common->update('industry_presence',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Explore Interests Updated Successfully.');
                redirect('industry-presence');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['industry_presence'] = $this->common->getSingleRows('industry_presence',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/industry_presence/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $productData = $this->common->delete('industry_presence',$id);
        if($productData){
            $this->session->set_flashdata('succ_msg', 'Explore Interests Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('industry-presence');
    }


}

?>