<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExploreInterests extends CI_Controller {

	function __construct() { 
        parent::__construct();
        // Load user model 
        $this->load->model('common');  
    }

    public function index()
    { 
        $data['explore_interests'] = $this->common->getAllData('explore_interests');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/explore_interests/index',$data); 
        $this->load->view('backend/common/footer');  
    } 

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $this->form_validation->set_rules('description', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'description'=> $this->input->post('description'),
                    ) ;
            $productData = $this->common->insert('explore_interests',$data);
                $this->session->set_flashdata('succ_msg', 'Explore Interests Added Successfully.');
                redirect('explore-interests');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/explore_interests/add'); 
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
                    ) ;
            $productData = $this->common->update('explore_interests',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Explore Interests Updated Successfully.');
                redirect('explore-interests');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['explore_interests'] = $this->common->getSingleRows('explore_interests',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/explore_interests/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $productData = $this->common->delete('explore_interests',$id);
        if($productData){
            $this->session->set_flashdata('succ_msg', 'Explore Interests Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('explore-interests');
    }


}

?>