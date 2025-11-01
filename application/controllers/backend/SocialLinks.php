<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SocialLinks extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // Load user model 
        $this->load->model('common');
    }

    public function index()
    {
        $data['links'] = $this->common->getAllData('social_links');
        $this->load->view('backend/common/header');
        $this->load->view('backend/social_links/index', $data);
        $this->load->view('backend/common/footer');
    }

    public function add()
    {
        if (!empty($this->input->post('submit'))) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('link', 'link', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'link' => $this->input->post('link'),
                    'image' => $filename
                );
                $blogData = $this->common->insert('social_links', $data);
                $this->session->set_flashdata('succ_msg', 'link Added Successfully.');
                redirect('social-links');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header');
        $this->load->view('backend/social_links/add');
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if (!empty($this->input->post('submit'))) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['image']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('link', 'link', 'required');

            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'link' => $this->input->post('link'),
                    'image' => $filename
                );
                $blogData = $this->common->update('social_links', $data, $id);
                $this->session->set_flashdata('succ_msg', 'link Updated Successfully.');
                redirect('social-links');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);
        $data['link'] = $this->common->getSingleRows('social_links', $data);

        $this->load->view('backend/common/header');
        $this->load->view('backend/social_links/edit', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $blogData = $this->common->delete('social_links', $id);
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', 'link Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('social-links');
    }
}
