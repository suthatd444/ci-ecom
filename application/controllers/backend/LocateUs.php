<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocateUs extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['locateuss'] = $this->common->getAllData('locateus');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/locateus/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

        
            $this->form_validation->set_rules('description', 'description', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'), 
                        'title'=> $this->input->post('title')
                    ) ;
            $locateusData = $this->common->insert('locateus',$data);
                $this->session->set_flashdata('succ_msg', 'Locate Us Added Successfully.');
                redirect('locateus');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/locateus/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'), 
                        'title'=> $this->input->post('title')
                    ) ;
            $locateusData = $this->common->update('locateus',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Locate Us Updated Successfully.');
                redirect('locateus');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['locateus'] = $this->common->getSingleRows('locateus',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/locateus/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $locateusData = $this->common->delete('locateus',$id);
        if($locateusData){
            $this->session->set_flashdata('succ_msg', 'Locate Us Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('locateus');
    }

}

?>