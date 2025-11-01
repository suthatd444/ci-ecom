<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        // Load user model
        $this->load->model('common');
    }

    public function index()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            $config['file_name'] = $_FILES['home_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('home_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            // $config['file_name'] = $_FILES['vision_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('vision_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_1 = $this->input->post('image_1');
            } else {
                $uploadData = $this->upload->data();
                $filename_1 = $uploadData['file_name'];
            }

            // $config['upload_path'] = './uploads/';
            // $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            // //$config['max_size'] = '100'; // max_size in kb
            // $config['file_name'] = $_FILES['mission_img']['name'];
            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('mission_img')) {
            //     $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
            //     $filename_2 = $this->input->post('image_2');
            // } else {
            //     $uploadData = $this->upload->data();
            //     $filename_2 = $uploadData['file_name'];
            // }

            // $config['upload_path'] = './uploads/';
            // $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            // //$config['max_size'] = '100'; // max_size in kb
            // $config['file_name'] = $_FILES['philosophy_img']['name'];
            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('philosophy_img')) {
            //     $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
            //     $filename_3 = $this->input->post('image_3');
            // } else {
            //     $uploadData = $this->upload->data();
            //     $filename_3 = $uploadData['file_name'];
            // }

            // $config['upload_path'] = './uploads/';
            // $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            // //$config['max_size'] = '100'; // max_size in kb
            // $config['file_name'] = $_FILES['ratnamani_highlight_img']['name'];
            // $this->load->library('upload', $config);

            // if (!$this->upload->do_upload('ratnamani_highlight_img')) {
            //     $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
            //     $filename_4 = $this->input->post('image_4');
            // } else {
            //     $uploadData = $this->upload->data();
            //     $filename_4 = $uploadData['file_name'];
            // }

            $this->form_validation->set_rules('home_desc', 'Title', 'required');

            if($this->form_validation->run() == true){
            $data = array(
                        'home_desc'=> $this->input->post('home_desc'),
                        'vision_desc'=> $this->input->post('vision_desc'),
                        'mission_desc'=> $this->input->post('mission_desc'),
                        'philosophy_desc'=> $this->input->post('philosophy_desc'),
                        'ratnamani_highlight_desc'=> $this->input->post('ratnamani_highlight_desc'),
                        'intellegent_investors_desc'=> $this->input->post('intellegent_investors_desc'),
                        'our_product_desc'=> $this->input->post('our_product_desc'),
                        'our_presence_desc'=> $this->input->post('our_presence_desc'),
                        'customer_base_desc'=> $this->input->post('customer_base_desc'),
                        'about_us_title'=> $this->input->post('about_us_title'),
                        'home_img'=>$filename,
                        // 'philosophy_img'=> $filename_3,
                        // 'ratnamani_highlight_img'=> $filename_4,
                        'vision_img'=> $filename_1,
                        // 'mission_img'=> $filename_2,

                    ) ;
            $homeData = $this->common->update('home',$data,1);
                $this->session->set_flashdata('succ_msg', 'Home Updated Successfully.');
                redirect('home');
            }else{
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>1);
        $data['home'] = $this->common->getSingleRows('home',$data);
        $this->load->view('backend/common/header');
        $this->load->view('backend/home/index',$data);
        $this->load->view('backend/common/footer');
    }

    public function highlight()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            $config['file_name'] = $_FILES['highlight_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('highlight_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }


            $this->form_validation->set_rules('highlight_desc', 'Title', 'required');

            if($this->form_validation->run() == true){
            $data = array(
                        'description'=> $this->input->post('highlight_desc'),
                        'image'=>$filename,
                    ) ;
            $homeData = $this->common->update('highlight',$data,1);
                $this->session->set_flashdata('succ_msg', 'Highlights Successfully.');
                redirect('highlights');
            }else{
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>1);
        $data['highlight'] = $this->common->getSingleRows('highlight',$data);
        $this->load->view('backend/common/header');
        $this->load->view('backend/highlight/index',$data);
        $this->load->view('backend/common/footer');
    }

    public function global_seo()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            $config['file_name'] = $_FILES['seo_image']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('seo_image')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('title', 'Title', 'required');

            if($this->form_validation->run() == true){
            $data = array(
                        'title'=> $this->input->post('title'),
                        'description'=> $this->input->post('description'),
                        'keyword'=> $this->input->post('keyword'),
                        'image'=>$filename,
                    ) ;
            $homeData = $this->common->update('globalseo',$data,1);
                $this->session->set_flashdata('succ_msg', 'Global SEO Updated Successfully.');
                redirect('global-seo');
            }else{
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>1);
        $data['globalseo'] = $this->common->getSingleRows('globalseo',$data);
        $this->load->view('backend/common/header');
        $this->load->view('backend/globalseo/index',$data);
        $this->load->view('backend/common/footer');
    }

    public function header_footer()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            $config['file_name'] = $_FILES['header_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('header_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
            }


            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
            //$config['max_size'] = '100'; // max_size in kb
            $config['file_name'] = $_FILES['footer_img']['name'];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('footer_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename_1 = $this->input->post('image_1');
            } else {
                $uploadData = $this->upload->data();
                $filename_1 = $uploadData['file_name'];
            }

            $this->form_validation->set_rules('register_office', 'Title', 'required');

            if($this->form_validation->run() == true){
            $data = array(
                        'register_office'=> $this->input->post('register_office'),
                        'corporate_office'=> $this->input->post('corporate_office'),
                        'contact'=> $this->input->post('contact'),
                        'ratnamani_inc'=> $this->input->post('ratnamani_inc'),
                        'copy_right'=> $this->input->post('copy_right'),
                        'header_img'=>$filename,
                        'footer_img'=>$filename_1,
                    ) ;
            $homeData = $this->common->update('headerfooter',$data,1);
                $this->session->set_flashdata('succ_msg', 'Header & Footer Updated Successfully.');
                redirect('header-footer');
            }else{
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>1);
        $data['headerfooter'] = $this->common->getSingleRows('headerfooter',$id);
        $this->load->view('backend/common/header');
        $this->load->view('backend/headerfooter/index',$data);
        $this->load->view('backend/common/footer');
    }

    public function career_form_list()
    {
        $data['career_form_list'] = $this->common->getAllData('career_form');
        $this->load->view('backend/common/header');
        $this->load->view('backend/home/career_form_list',$data);
        $this->load->view('backend/common/footer');
    }

    public function inquiry_form_list()
    {
        $data['inquiry_form_list'] = $this->common->getAllData('locate_us_form');
        $this->load->view('backend/common/header');
        $this->load->view('backend/home/inquiry_form_list',$data);
        $this->load->view('backend/common/footer');
    }


}

?>