<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvestorsRelations extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // Load user model 
        $this->load->model('common');
    }

    public function index()
    {

        if (!empty($this->input->post('submit'))) {

            $this->form_validation->set_rules('tab_1', 'Title', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'tab_1' => $this->input->post('tab_1'),
                    'tab_2' => $this->input->post('tab_2'),
                    'tab_3' => $this->input->post('tab_3'),
                    'tab_4' => $this->input->post('tab_4'),
                    'tab_desc_1' => $this->input->post('tab_desc_1'),
                    'tab_desc_2' => $this->input->post('tab_desc_2'),
                    'tab_desc_3' => $this->input->post('tab_desc_3'),
                    // 'subsidiaries_financial'=> $this->input->post('subsidiaries_financial'),
                    // 'quarterly_results'=> $this->input->post('quarterly_results'),
                    // 'investor_presentation'=> $this->input->post('investor_presentation'),
                    // 'conference_calls_transcripts'=> $this->input->post('conference_calls_transcripts'),
                    // 'conference_calls_recordings'=> $this->input->post('conference_calls_recordings'),
                );
                $homeData = $this->common->update('investors_relations', $data, 1);
                $this->session->set_flashdata('succ_msg', 'Investors Relations Updated Successfully.');
                redirect('investorsrelations');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => 1);
        $data['investorsrelations'] = $this->common->getSingleRows('investors_relations', $data);
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/index', $data);
        $this->load->view('backend/common/footer');
    }

    public function annualreports()
    {
        $data['annualreports'] = $this->common->getAllData('annual_reports');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/annualreports', $data);
        $this->load->view('backend/common/footer');
    }

    public function add()
    {
        if (!empty($this->input->post('submit'))) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf';
            // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['annual_reports_pdf']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('annual_reports_pdf')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('year', 'year', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'report_type' => $this->input->post('report_type'),
                    'year' => $this->input->post('year'),
                    'pdf' => $filename
                );
                $blogData = $this->common->insert('annual_reports', $data);
                $this->session->set_flashdata('succ_msg', 'Annual Reports Added Successfully.');
                redirect('annualreports');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/add');
        $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if (!empty($this->input->post('submit'))) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf';
            // $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['annual_reports_pdf']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('annual_reports_pdf')) {
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('year', 'year', 'required');
            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'report_type' => $this->input->post('report_type'),
                    'year' => $this->input->post('year'),
                    'pdf' => $filename
                );
                $blogData = $this->common->update('annual_reports', $data, $id);
                $this->session->set_flashdata('succ_msg', 'Annual Reports Updated Successfully.');
                redirect('annualreports');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);
        $data['annualreports'] = $this->common->getSingleRows('annual_reports', $data);

        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/edit', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $blogData = $this->common->delete('annual_reports', $id);
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', 'Annual Reports Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('annualreports');
    }


    public function index_tab()
    {

        $data['tabs'] = $this->common->getAllData('investors_relations_tab');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/index_tab', $data);
        $this->load->view('backend/common/footer');
    }

    public function add_tab()
    {
        if (!empty($this->input->post('submit'))) {



            $this->form_validation->set_rules('tab_name', 'Tab Name', 'required');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'tab_name' => $this->input->post('tab_name'),
                );
                $blogData = $this->common->insert('investors_relations_tab', $data);
                $this->session->set_flashdata('succ_msg', 'Tab Added Successfully.');
                redirect('investorsrelations-tab');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/add_tab');
        $this->load->view('backend/common/footer');
    }

    public function edit_tab()
    {

        if (!empty($this->input->post('submit'))) {

            $this->form_validation->set_rules('tab_name', 'Tab Name', 'required');
            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'tab_name' => $this->input->post('tab_name')
                );
                $blogData = $this->common->update('investors_relations_tab', $data, $id);
                $this->session->set_flashdata('succ_msg', 'Tab Added Updated Successfully.');
                redirect('investorsrelations-tab');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);
        $data['annualreports'] = $this->common->getSingleRows('investors_relations_tab', $data);

        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/edit_tab', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete_tab()
    {
        $id = $_GET['id'];
        $blogData = $this->common->delete('investors_relations_tab', $id);
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', 'Tab Added Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('investorsrelations-tab');
    }


    public function index_tabdata()
    {

        $data['tabsdata'] = $this->common->getAllData('investors_relations_tabdata');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/index_tabdata', $data);
        $this->load->view('backend/common/footer');
    }

    public function add_tabdata()
    {
        if (!empty($this->input->post('submit'))) {



            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('investors_relations_tab_id', 'Tab Name', 'required');


            if ($this->form_validation->run() == true) {
                $data = array(
                    'title' => $this->input->post('title'),
                    'investors_relations_tab_id' => $this->input->post('investors_relations_tab_id'),
                );
                $blogData = $this->common->insert('investors_relations_tabdata', $data);
                $this->session->set_flashdata('succ_msg', 'title Added Successfully.');
                redirect('investorsrelations-tabdata');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $data['tabs'] = $this->common->getAllData('investors_relations_tab');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/add_tabdata', $data);
        $this->load->view('backend/common/footer');
    }

    public function edit_tabdata()
    {

        if (!empty($this->input->post('submit'))) {

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('investors_relations_tab_id', 'Tab Name', 'required');

            $id = $this->input->post('id');
            if ($this->form_validation->run() == true) {
                $data = array(
                    'title' => $this->input->post('title'),
                    'investors_relations_tab_id' => $this->input->post('investors_relations_tab_id'),
                );
                $blogData = $this->common->update('investors_relations_tabdata', $data, $id);
                $this->session->set_flashdata('succ_msg', 'Tab Added Updated Successfully.');
                redirect('investorsrelations-tabdata');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id' => $_GET['id']);
        $data['annualreports'] = $this->common->getSingleRows('investors_relations_tabdata', $data);
        $data['tabs'] = $this->common->getAllData('investors_relations_tab');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/edit_tabdata', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete_tabdata()
    {
        $id = $_GET['id'];
        $blogData = $this->common->delete('investors_relations_tabdata', $id);
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', 'Tab title Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('investorsrelations-tabdata');
    }

    public function index_tabcontent()
    {
        $data['tabsdata'] = $this->common->investors_relations_tabcontent_list();
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/index_tabcontent', $data);
        $this->load->view('backend/common/footer');
    }

    public function add_tabcontent()
    {
        // print_r($_POST);


        if (!empty($this->input->post('submit'))) {


            $this->form_validation->set_rules('investors_relations_tabdata_id', 'Tab Name', 'required');


            if ($this->form_validation->run() == true) {
                foreach ($this->input->post('subtitle') as $key => $value) {
                    $data = array(
                        'title' => $this->input->post('title'),
                        'investors_relations_tabdata_id' => $this->input->post('investors_relations_tabdata_id'),
                        'subtitle' => $this->input->post('subtitle')[$key],
                    );
                    $blogData = $this->common->insert('investors_relations_tabcontent', $data);
                }

                $this->session->set_flashdata('succ_msg', 'Added Successfully.');
                redirect('investorsrelations-tabcontent');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $data['tabs'] = $this->common->getAllData('investors_relations_tabdata');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/add_tabcontent', $data);
        $this->load->view('backend/common/footer');
    }

    public function edit_tabcontent()
    {

        if (!empty($this->input->post('submit'))) {

            $this->form_validation->set_rules('investors_relations_tabdata_id', 'Tab Name', 'required');


            if ($this->form_validation->run() == true) {

                foreach ($this->input->post('subtitle') as $key => $value) {
                    
                    if (!empty($this->input->post('id')[$key])) {
                        $id = $this->input->post('id')[$key];
                        $data = array(
                            'title' => $this->input->post('title'),
                            'investors_relations_tabdata_id' => $this->input->post('investors_relations_tabdata_id'),
                            'subtitle' => $this->input->post('subtitle')[$key],
                        );

                        $blogData = $this->common->update('investors_relations_tabcontent', $data, $id);
                    } else {
                        $data = array(
                            'title' => $this->input->post('title'),
                            'investors_relations_tabdata_id' => $this->input->post('investors_relations_tabdata_id'),
                            'subtitle' => $this->input->post('subtitle')[$key],
                        );
                        $blogData = $this->common->insert('investors_relations_tabcontent', $data);
                    }
                }

                $this->session->set_flashdata('succ_msg', 'Tab Added Updated Successfully.');
                redirect('investorsrelations-tabcontent');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('investors_relations_tabdata_id' => $_GET['id']);
        $data['annualreports'] = $this->common->getSingleRows('investors_relations_tabcontent', $data);
        $data['alldata'] = $this->common->getAllSingleRowsByLimit('investors_relations_tabcontent', array('title' => $_GET['title']));
        $data['tabs'] = $this->common->getAllData('investors_relations_tabdata');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/edit_tabcontent', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete_tabcontent()
    {
        $id = $_GET['id'];
        $title = $_GET['title'];
        $blogData = $this->common->deletenew('investors_relations_tabcontent', array('investors_relations_tabdata_id' => $id, 'title' => $title));
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', ' Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('investorsrelations-tabcontent');
    }

    public function index_tabdoc()
    {

        $data['tabs'] = $this->common->getAllData('investors_relations_tabcontent');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/index_doc', $data);
        $this->load->view('backend/common/footer');
    }

    public function add_tabdoc()
    {
        // print_r($_POST);


        if (!empty($this->input->post('submit'))) {


            $this->form_validation->set_rules('investors_relations_tabcontent_id', 'Tab Name', 'required');

            $dataf['totalFiles'] = array();
            if ($this->form_validation->run() == true) {
                $id = $this->input->post('investors_relations_tabcontent_id');

                foreach ($this->input->post('document_name') as $key => $value) {
                    $run = $_FILES['document']['name'][$key];
                    if (!empty($run)) {
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
                        $config['file_name'] = $this->input->post('document_name')[$key];
                        $config['tmp_name'] = $_FILES['document']['tmp_name'][$key];

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        // print_r($config);
                        // exit;
                        if (!$this->upload->do_upload('file')) {
                            // $filename1 = $this->input->post('product_banner_image');
                        } else {
                            $uploadData = $this->upload->data();
                            $filename = $uploadData['file_name'];

                            $dataf['totalFiles'][] = $filename;
                        }
                    }
                }
                $dataarray = array(
                    'docs' => implode(",", $this->input->post('document_name'))
                );
                $blogData = $this->common->update('investors_relations_tabcontent', $dataarray, $id);
                $this->session->set_flashdata('succ_msg', 'Added Successfully.');
                redirect('investorsrelations-tabdoc');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        $data['tabs'] = $this->common->getAllData('investors_relations_tabcontent');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/add_doc', $data);
        $this->load->view('backend/common/footer');
    }

    public function edit_tabdoc()
    {
        $data = array('id' => $_GET['id']);
        $data['annualreports'] = $this->common->getSingleRows('investors_relations_tabcontent', $data);
        $dataf['totalFiles'] = array();
        if (!empty($this->input->post('submit'))) {

            $this->form_validation->set_rules('investors_relations_tabcontent_id', 'Tab Name', 'required');


            if ($this->form_validation->run() == true) {
                $id = $this->input->post('investors_relations_tabcontent_id');

                foreach ($this->input->post('document_name') as $key => $value) {

                    $run = $_FILES['document']['name'][$key];
                    if (!empty($run)) {

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
                        $config['file_name'] =  $_FILES["document"]['name'][$key];

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        // print_r($config);
                        // exit;
                        if (!$this->upload->do_upload('file')) {
                            // $filename1 = $this->input->post('product_banner_image');
                        } else {
                            $uploadData = $this->upload->data();
                            $filename = $uploadData['file_name'];

                            $dataf['totalFiles'][] = $filename;
                        }
                    }
                }

                $dataarray = array(
                    'docs' => implode(",", $this->input->post('document_name'))
                );
                $blogData = $this->common->update('investors_relations_tabcontent', $dataarray, $id);
                $this->session->set_flashdata('succ_msg', 'Added Successfully.');
                redirect('investorsrelations-tabdoc');
            } else {
                $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data['tabs'] = $this->common->getAllData('investors_relations_tabcontent');
        $this->load->view('backend/common/header');
        $this->load->view('backend/investorsrelations/edit_doc', $data);
        $this->load->view('backend/common/footer');
    }

    public function delete_tabdoc()
    {
        $id = $_GET['id'];
        $blogData = $this->common->deletenew('investors_relations_tabcontent', array('investors_relations_tabdata_id' => $id));
        if ($blogData) {
            $this->session->set_flashdata('succ_msg', ' Deleted Successfully.');
        } else {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.');
        }
        redirect('investorsrelations-tabcontent');
    }
    public function  delete_document()
    {
        $data = array('id' => $_GET['id']);

        $filename = $_GET['filename'];

        $dataArray = $this->common->getSingleRows('investors_relations_tabcontent', $data);
        $docsArray = explode(",", $dataArray['docs']);
        foreach ($docsArray as $key => $row) {
            if ($row == $filename) {
                unset($docsArray[$key]);
                unlink('./uploads/' . $filename);
            }
        }
        $dataarray = array(
            'docs' => implode(",", $docsArray)
        );
        $blogData = $this->common->update('investors_relations_tabcontent', $dataarray, $_GET['id']);
        if ($blogData) {
            echo "True";
        } else {
            echo "False";
        }
    }
    public function  delete_content()
    {
        $data = array('id' => $_GET['id']);
        $dataArray = $this->common->getSingleRows('investors_relations_tabcontent', $data);
        if(!empty( $dataArray['docs'])){
            $docsArray = explode(",", $dataArray['docs']);
            foreach ($docsArray as $key => $row) {
                    unlink('./uploads/' . $row);
            }
        }
      
     
        $id = $_GET['id'];
        $blogData = $this->common->delete('investors_relations_tabcontent', $id);
        if ($blogData) {
            echo "True";
        } else {
            echo "False";
        }
    }

    
}
