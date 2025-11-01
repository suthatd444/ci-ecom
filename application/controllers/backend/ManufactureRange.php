<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManufactureRange extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['manufacturing_ranges'] = $this->common->getAllData('manufacturing_range');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/manufacturing_range/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        if (!empty($this->input->post('submit'))) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['manufacturing_range_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('manufacturing_range_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('title', 'title', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'product_id' => $this->input->post('product_id')[0],
                    'multi_product_id' => implode(",", $this->input->post('product_id')),
                    'title' => $this->input->post('title'),
                    'size_range' => $this->input->post('size_range'),
                    'thickness' => $this->input->post('thickness'),
                    'specification' => $this->input->post('specification'),
                    'grades' => $this->input->post('grades'),
                    'application' => $this->input->post('application'),
                    'image' => $filename
                );
                $manufacturing_rangeData = $this->common->insert('manufacturing_range', $data);
                $this->session->set_flashdata('succ_msg', 'Manufacturing Range Added Successfully.');
                redirect('manufacture-range');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $data['product'] = $this->common->getAllData('product');
        $this->load->view('backend/common/header');
        $this->load->view('backend/manufacturing_range/add', $data);
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if (!empty($this->input->post('submit'))) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['manufacturing_range_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('manufacturing_range_img')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('title', 'title', 'required');
            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'product_id' => $this->input->post('product_id')[0],
                    'multi_product_id' => implode(",", $this->input->post('product_id')),
                    'title' => $this->input->post('title'),
                    'size_range' => $this->input->post('size_range'),
                    'thickness' => $this->input->post('thickness'),
                    'specification' => $this->input->post('specification'),
                    'grades' => $this->input->post('grades'),
                    'application' => $this->input->post('application'),
                    'image' => $filename
                );
                $manufacturing_rangeData = $this->common->update('manufacturing_range', $data, $id);
                $this->session->set_flashdata('succ_msg', 'Manufacturing Range Updated Successfully.');
                redirect('manufacture-range');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);
        $data['manufacturing_range'] = $this->common->getSingleRows('manufacturing_range', $data);
        $data['product'] = $this->common->getAllData('product');
        $productselect = array();
        foreach ($data['product'] as $key => $value) {
            $productselect[$value['id']] = $value['title'];
        }


        $data['productselect'] = $productselect;

        $data['productselected'] = array();
        if (!empty($data['manufacturing_range']['multi_product_id'])) {
            $data['productselected'] = explode(",", $data['manufacturing_range']['multi_product_id']);
        }


        $this->load->view('backend/common/header');
        $this->load->view('backend/manufacturing_range/edit', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $manufacturing_rangeData = $this->common->delete('manufacturing_range',$id);
        if($manufacturing_rangeData){
            $this->session->set_flashdata('succ_msg', 'Manufacturing Range Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('manufacture-range');
    }

}

?>