<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function companyprofile()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['companyprofile_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('companyprofile_img')) {
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
                        'legacy'=> $this->input->post('legacy'),
                        'vision'=> $this->input->post('vision'),
                        'mission'=> $this->input->post('mission'),
                        'philosophy'=> $this->input->post('philosophy'),
                        'image'=>$filename,
                    ) ;
            $homeData = $this->common->update('company_profile',$data,1);
                $this->session->set_flashdata('succ_msg', 'Company Profile Updated Successfully.');
                redirect('company-profile');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>1);
        $data['companyprofile'] = $this->common->getSingleRows('company_profile',$id);
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/companyprofile',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function milestones()
    {
        $data['milestones'] = $this->common->getAllData('milestones');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/milestones',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function add_milestones()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['milestones_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('milestones_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
           
            if($this->form_validation->run() == true){
            $data = array( 
                        'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $milestones = $this->common->insert('milestones',$data);
                $this->session->set_flashdata('succ_msg', 'Milestones Added Successfully.');
                redirect('milestones');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/add_milestones'); 
        $this->load->view('backend/common/footer'); 
    }

    public function edit_milestones()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['milestones_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('milestones_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){
            $data = array( 
                        'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $milestones = $this->common->update('milestones',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Milestones Updated Successfully.');
                redirect('milestones');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>$_GET['id']);
        $data['milestones'] = $this->common->getSingleRows('milestones',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_milestones',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function delete_milestones()
    {
        $id = $_GET['id'];   
        $blogData = $this->common->delete('milestones',$id);
        if($blogData){
            $this->session->set_flashdata('succ_msg', 'Milestones Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('milestones');
    }

    public function integrity()
    {
        $data['integrity'] = $this->common->getAllData('integrity');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/integrity',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function add_integrity()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['integrity_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('integrity_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
           
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $integrity = $this->common->insert('integrity',$data);
                $this->session->set_flashdata('succ_msg', 'Integrity Added Successfully.');
                redirect('integrity');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/add_integrity'); 
        $this->load->view('backend/common/footer'); 
    }

    public function edit_integrity()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['integrity_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('integrity_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $integrity = $this->common->update('integrity',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Integrity Updated Successfully.');
                redirect('integrity');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>$_GET['id']);
        $data['integrity'] = $this->common->getSingleRows('integrity',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_integrity',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function delete_integrity()
    {
        $id = $_GET['id'];   
        $integrity = $this->common->delete('integrity',$id);
        if($integrity){
            $this->session->set_flashdata('succ_msg', 'Integrity Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('integrity');
    }

    public function board()
    {
        $data['board'] = $this->common->getAllData('board');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/board',$data); 
        $this->load->view('backend/common/footer'); 
    }

   
    public function add_board()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
           
            if($this->form_validation->run() == true){


                $data = array( 
                    'is_primary'=>"NO",
                ) ;
             $board = $this->common->updateNO('board',$data);

            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'main_desc'=> $this->input->post('main_desc'),
                        'image'=>$filename,
                        'is_primary'=> $this->input->post('is_primary')?"YES":"NO",
                    ) ;
            $board = $this->common->insert('board',$data);
                $this->session->set_flashdata('succ_msg', 'Board Added Successfully.');
                redirect('board');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/add_board'); 
        $this->load->view('backend/common/footer'); 
    }

    public function edit_board()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){

                $data = array( 
                    'is_primary'=>"NO",
                ) ;
             $board = $this->common->updateNO('board',$data);
                
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'main_desc'=> $this->input->post('main_desc'),
                        'image'=>$filename,
                        'is_primary'=> $this->input->post('is_primary')?"YES":"NO",
                    ) ;
            $board = $this->common->update('board',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Board Updated Successfully.');
                redirect('board');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>$_GET['id']);
        $data['board'] = $this->common->getSingleRows('board',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_board',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function delete_board()
    {
        $id = $_GET['id'];   
        $board = $this->common->delete('board',$id);
        if($board){
            $this->session->set_flashdata('succ_msg', 'Board Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('board');
    }

    public function edit_about_onthe_board()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $board = $this->common->update('about_onthe_board',$data,$id);
                $this->session->set_flashdata('succ_msg', 'About On The Board Updated Successfully.');
                redirect('board');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>1);
        $data['board'] = $this->common->getSingleRows('about_onthe_board',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_about_onthe_board',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function ourleadership()
    {
        $data['ourleadership'] = $this->common->getAllData('ourleadership');
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/ourleadership',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function add_ourleadership()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                $filename = 'image.png';
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
           
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $ourleadership = $this->common->insert('ourleadership',$data);
                $this->session->set_flashdata('succ_msg', 'Our Leadership Added Successfully.');
                redirect('our-leadership');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/add_ourleadership'); 
        $this->load->view('backend/common/footer'); 
    }

    public function edit_ourleadership()
    {
        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $ourleadership = $this->common->update('ourleadership',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Our Leadership Updated Successfully.');
                redirect('our-leadership');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>$_GET['id']);
        $data['ourleadership'] = $this->common->getSingleRows('ourleadership',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_ourleadership',$data); 
        $this->load->view('backend/common/footer'); 
    }

    public function delete_ourleadership()
    {
        $id = $_GET['id'];   
        $board = $this->common->delete('ourleadership',$id);
        if($board){
            $this->session->set_flashdata('succ_msg', 'Our Leadership Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('our-leadership');
    }

    public function edit_about_ourleadership()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif|svg'; 
            //$config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['board_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('board_img')) {
                $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
                 $filename = $this->input->post('image');
            } else {
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
            }
           
            $this->form_validation->set_rules('description', 'description', 'required'); 
            $id = $this->input->post('id');    
            if($this->form_validation->run() == true){
            $data = array( 
                        // 'year'=> $this->input->post('year'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename,
                    ) ;
            $ourleadership = $this->common->update('about_ourleadership',$data,$id);
                $this->session->set_flashdata('succ_msg', 'About On The Our Leadership Updated Successfully.');
                redirect('our-leadership');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $id = array('id'=>1);
        $data['ourleadership'] = $this->common->getSingleRows('about_ourleadership',$id);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/about/edit_about_ourleadership',$data); 
        $this->load->view('backend/common/footer');  
    }
}

?>