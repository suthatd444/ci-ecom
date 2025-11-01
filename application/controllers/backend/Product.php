<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['products'] = $this->common->getAllData('product');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/product/index',$data); 
        $this->load->view('backend/common/footer');  
    }

     public function add()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
           // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['product_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }


            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['product_banner']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_banner')) {
                $filename = $this->input->post('product_banner_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename1 = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('title', 'title', 'required'); 
            $this->form_validation->set_rules('sub_title', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'title'=> $this->input->post('title'), 
                        'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                        'product_banner'=>$filename1
                    ) ;
            $productData = $this->common->insert('product',$data);
                $this->session->set_flashdata('succ_msg', 'Product Added Successfully.');
                redirect('product');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/product/add'); 
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['product_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['product_banner']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('product_banner')) {
                $filename1 = $this->input->post('product_banner_image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename1 = $uploadData['file_name']; 
            }

            $this->form_validation->set_rules('title', 'title', 'required'); 
            $this->form_validation->set_rules('sub_title', 'title', 'required'); 
            $id = $this->input->post('id');
            if($this->form_validation->run() == true){
            $data = array( 
                        'title'=> $this->input->post('title'), 
                        'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description')
                    ) ;
                    
             if (!empty($filename)) {
                    $data['image'] = $filename;
                }
                if (!empty($filename1)) {
                    $data['product_banner'] = $filename1;
                }        
                    
            $productData = $this->common->update('product',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Product Updated Successfully.');
                redirect('product');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['product'] = $this->common->getSingleRows('product',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/product/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $productData = $this->common->delete('product',$id);
        if($productData){
            $this->session->set_flashdata('succ_msg', 'Product Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('product');
    }

}

?>