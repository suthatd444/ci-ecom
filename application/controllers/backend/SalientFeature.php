<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalientFeature extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index()
    {
        $data['salent_features'] = $this->common->getAllData('salent_feature');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/salent_feature/index',$data); 
        $this->load->view('backend/common/footer');  
    }

     public function add()
    {
        $data['manufacturing_ranges'] = $this->common->getAllData('manufacturing_range');
        if (!empty($this->input->post('submit'))) {


            $this->form_validation->set_rules('description', 'title', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'description' => $this->input->post('description'),
                    'manu_rang_id' => $this->input->post('manu_rang_id')[0],
                    'multi_manu_rang_id' => implode(",", $this->input->post('manu_rang_id')),
                );
                $salent_featureData = $this->common->insert('salent_feature', $data);
                $this->session->set_flashdata('succ_msg', 'Salent Feature Added Successfully.');
                redirect('salient-feature');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header');
        $this->load->view('backend/salent_feature/add', $data);
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if (!empty($this->input->post('submit'))) {


            $this->form_validation->set_rules('description', 'title', 'required');
            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'description' => $this->input->post('description'),
                    'manu_rang_id' => $this->input->post('manu_rang_id')[0],
                    'multi_manu_rang_id' => implode(",", $this->input->post('manu_rang_id')),
                );
                $salent_featureData = $this->common->update('salent_feature', $data, $id);
                $this->session->set_flashdata('succ_msg', 'Salent Feature Updated Successfully.');
                redirect('salient-feature');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);

        $data['salent_feature'] = $this->common->getSingleRows('salent_feature', $data);
        $data['manufacturing_ranges'] = $this->common->getAllData('manufacturing_range');

        $manufacturingselect = array();
        foreach ($data['manufacturing_ranges'] as $key => $value) {
            $manufacturingselect[$value['id']] = $value['title'];
        }


        $data['manufacturingselect'] = $manufacturingselect;

        $data['manufacturingselected'] = array();
        if (!empty($data['salent_feature']['multi_manu_rang_id'])) {
            $data['manufacturingselected'] = explode(",", $data['salent_feature']['multi_manu_rang_id']);
        }



       
        $this->load->view('backend/common/header');
        $this->load->view('backend/salent_feature/edit', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $salent_featureData = $this->common->delete('salent_feature',$id);
        if($salent_featureData){
            $this->session->set_flashdata('succ_msg', 'Salent Feature Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('salient-feature');
    }

}

?>