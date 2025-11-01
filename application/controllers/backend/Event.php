<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['events'] = $this->common->getAllData('event');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/event/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['event_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('event_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
            // $this->form_validation->set_rules('sub_title', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'title'=> $this->input->post('title'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $eventData = $this->common->insert('event',$data);
                $this->session->set_flashdata('succ_msg', 'Event Added Successfully.');
                redirect('event');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/event/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['event_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('event_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('description', 'title', 'required'); 
            // $this->form_validation->set_rules('sub_title', 'title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'title'=> $this->input->post('title'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $eventData = $this->common->update('event',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Event Updated Successfully.');
                redirect('event');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['event'] = $this->common->getSingleRows('event',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/event/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $eventData = $this->common->delete('event',$id);
        if($eventData){
            $this->session->set_flashdata('succ_msg', 'Event Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('event');
    }

}

?>