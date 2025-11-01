<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subsidiaries extends CI_Controller {

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
         //   $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_img_1']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_img_1')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_1 = $this->input->post('image_1');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_1 = $uploadData['file_name']; 
            }

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_img_2']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_img_2')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_2 = $this->input->post('image_2');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_2 = $uploadData['file_name']; 
            }

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_img_3']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_img_3')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_3 = $this->input->post('image_3');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_3 = $uploadData['file_name']; 
            }


            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_1_logo']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_1_logo')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_4 = $this->input->post('tab_1_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_4 = $uploadData['file_name']; 
            }

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_2_logo']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_2_logo')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_5 = $this->input->post('tab_2_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_5 = $uploadData['file_name']; 
            }


            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['tab_3_logo']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('tab_3_logo')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_6 = $this->input->post('tab_3_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename_6 = $uploadData['file_name']; 
            }
            
            $this->form_validation->set_rules('tab_1', 'Title', 'required'); 
            $this->form_validation->set_rules('tab_2', 'Title', 'required'); 
            $this->form_validation->set_rules('tab_3', 'Title', 'required'); 
            // $this->form_validation->set_rules('tab_title_1', 'Title', 'required'); 
            // $this->form_validation->set_rules('tab_title_2', 'Title', 'required'); 
            // $this->form_validation->set_rules('tab_title_3', 'Title', 'required');
            // $this->form_validation->set_rules('tab_desc_1', 'Title', 'required'); 
            // $this->form_validation->set_rules('tab_desc_2', 'Title', 'required'); 
            // $this->form_validation->set_rules('tab_desc_3', 'Title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'tab_1'=> $this->input->post('tab_1'),
                        'tab_2'=> $this->input->post('tab_2'),
                        'tab_3'=> $this->input->post('tab_3'),
                        'tab_title_1'=> $this->input->post('tab_title_1'),
                        'tab_title_2'=> $this->input->post('tab_title_2'),
                        'tab_title_3'=> $this->input->post('tab_title_3'),
                        'tab_desc_1'=> $this->input->post('tab_desc_1'),
                        'tab_desc_2'=> $this->input->post('tab_desc_2'),
                        'tab_desc_3'=> $this->input->post('tab_desc_3'),
                        'tab_img_1'=>$filename_1,
                        'tab_img_2'=>$filename_2,
                        'tab_img_3'=>$filename_3,
                        'tab_1_logo'=>$filename_4,
                        'tab_2_logo'=>$filename_5,
                        'tab_3_logo'=>$filename_6,


                    ) ;
            $subsidiariesData = $this->common->update('subsidiaries',$data,1);
                $this->session->set_flashdata('succ_msg', 'Subsidiaries Updated Successfully.');
                redirect('subsidiaries');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        
        $data = array('id'=>1);
        $data['subsidiaries'] = $this->common->getSingleRows('subsidiaries',$data);
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/subsidiaries/index',$data); 
        $this->load->view('backend/common/footer');  
    }

}

?>