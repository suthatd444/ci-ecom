<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csractivity extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['csractivitys'] = $this->common->getAllData('csractivity');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csractivity/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['file_name'] = $_FILES['csractivity_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('csractivity_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
            
            

            $this->form_validation->set_rules('title', 'title', 'required'); 
             $this->form_validation->set_rules('sub_title', 'sub_title', 'required'); 
            if($this->form_validation->run() == true){
                    foreach ($_FILES["document"]['name'] as $key => $value) {
                  
                        // $run= $this->input->post('already_image')[$key];
                        // if (!empty($run)) {
                          
                        // print_r( $run);
                        // exit;
                            $_FILES['file']['name'] = $_FILES["document"]['name'][$key];
                            $_FILES['file']['type'] = $_FILES['document']['type'][$key];
                            $_FILES['file']['tmp_name'] = $_FILES['document']['tmp_name'][$key];
                            $_FILES['file']['error'] = $_FILES['document']['error'][$key];
                            $_FILES['file']['size'] = $_FILES['document']['size'][$key];
    
                            $config['upload_path'] = './uploads/';
                            $config['allowed_types'] = '*';
                            //  $config['max_size'] = '100'; // max_size in kb 
                            $config['file_name'] = $_FILES["document"]['name'][$key];
                           
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                            // print_r($config);
                            // exit;
                            if (!$this->upload->do_upload('file')) {
                                // $filename1 = $this->input->post('product_banner_image');
                            } else {
                                $uploadData = $this->upload->data();
                                $filename1 = $uploadData['file_name'];
    
                                $dataf['totalFiles'][] = $filename1;
                            }
                        // }else{
                            
                        // }
                    }
                    
                
                $data = array( 
                            'title'=> $this->input->post('title'), 
                            'sub_title'=> $this->input->post('sub_title'),
                            'description'=> $this->input->post('description'),
                            'top_desc'=> $this->input->post('top_desc'), 
                            'bottom_desc'=> $this->input->post('bottom_desc'),
                            'type'=>$this->input->post('type'),
                            'image'=>$filename,
                            'listing_image'=>implode(",",$dataf['totalFiles']),
                        ) ;

            $csractivityData = $this->common->insert('csractivity',$data);
                $this->session->set_flashdata('succ_msg', 'Csr Activity Added Successfully.');
                redirect('csractivity');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $data['csractivity_type'] =$this->common->getAllData('csr_activity_type');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csractivity/add',$data); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {
        $dataf['totalFiles']=array();
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['file_name'] = $_FILES['csractivity_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('csractivity_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
            
           

            $this->form_validation->set_rules('title', 'title', 'required'); 
             $this->form_validation->set_rules('sub_title', 'sub_title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
                
                foreach ($_FILES["document"]['name'] as $key => $value) {
                  
                    // $run= $this->input->post('already_image')[$key];
                    // if (!empty($run)) {
                      
                    // print_r( $run);
                    // exit;
                        $_FILES['file']['name'] = $_FILES["document"]['name'][$key];
                        $_FILES['file']['type'] = $_FILES['document']['type'][$key];
                        $_FILES['file']['tmp_name'] = $_FILES['document']['tmp_name'][$key];
                        $_FILES['file']['error'] = $_FILES['document']['error'][$key];
                        $_FILES['file']['size'] = $_FILES['document']['size'][$key];

                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = '*';
                        //  $config['max_size'] = '100'; // max_size in kb 
                        $config['file_name'] = $_FILES["document"]['name'][$key];
                       
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        // print_r($config);
                        // exit;
                        if (!$this->upload->do_upload('file')) {
                            // $filename1 = $this->input->post('product_banner_image');
                        } else {
                            $uploadData = $this->upload->data();
                            $filename1 = $uploadData['file_name'];

                            $dataf['totalFiles'][] = $filename1;
                        }
                    // }else{
                        
                    // }
                }
                
            
            $data = array( 
                        'title'=> $this->input->post('title'), 
                        'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'top_desc'=> $this->input->post('top_desc'), 
                        'bottom_desc'=> $this->input->post('bottom_desc'),
                        'type'=>$this->input->post('type'),
                        'image'=>$filename,
                        'listing_image'=>implode(",",$dataf['totalFiles']),
                    ) ;
                    // print_r($data);
                    // exit;
            $csractivityData = $this->common->update('csractivity',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Csr Activity Updated Successfully.');
                redirect('csractivity');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
      
        $data['csractivity'] = $this->common->getSingleRows('csractivity',$data);
        $data['csractivity_type'] =$this->common->getAllData('csr_activity_type');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/csractivity/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $csractivityData = $this->common->delete('csractivity',$id);
        if($csractivityData){
            $this->session->set_flashdata('succ_msg', 'Csr Activity Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('csractivity');
    }

}
