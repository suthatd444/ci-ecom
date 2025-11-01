<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntellegentInvestors extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['intellegent_investors'] = $this->common->getAllData('intellegent_investors');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/intellegent_investors/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['intellegent_investors_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('intellegent_investors_img')) {
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
            $intellegent_investorsData = $this->common->insert('intellegent_investors',$data);
                $this->session->set_flashdata('succ_msg', 'Intellegent Investors Added Successfully.');
                redirect('intellegent-investors');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/intellegent_investors/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['intellegent_investors_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('intellegent_investors_img')) {
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
            $intellegent_investorsData = $this->common->update('intellegent_investors',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Intellegent Investors Updated Successfully.');
                redirect('intellegent-investors');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['intellegent_investors'] = $this->common->getSingleRows('intellegent_investors',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/intellegent_investors/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $intellegent_investorsData = $this->common->delete('intellegent_investors',$id);
        if($intellegent_investorsData){
            $this->session->set_flashdata('succ_msg', 'Intellegent Investors Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('intellegent-investors');
    }

}

?>