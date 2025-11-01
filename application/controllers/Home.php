<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index(){ 
        $id = array('id'=>1);
        $data['home'] = $this->common->getSingleRows('home',$id);
        $data['csractivity'] = $this->common->getAllData('csractivity');
        $data['proudly_affirm'] = $this->common->getAllData('proudly_affirm');
        $data['industry_presence'] = $this->common->getAllData('industry_presence');
        $data['product'] = $this->common->getAllDataLimit('product',8);
        $data['company_profile'] = $this->common->getSingleRows('company_profile',$id);
        $data['recent_post'] = $this->common->getAllDataLimit('post',1);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/home',$data); 
        $this->load->view('frontend/common/footer');  
    } 

    public function highlight()
    {
         
        $data['event'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Event'));
        $data['blog'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Blog'));
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/highlight_event',$data); 
        $this->load->view('frontend/common/footer');
    }
    
    public function highlight_details(){
        $id = array('id'=>$_GET['id']);
        $data['highlight'] = $this->common->getSingleRows('post',$id);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/highlight',$data); 
        $this->load->view('frontend/common/footer');
    }
    
    public function leader_detail(){
         $id = array('id'=>$_GET['id']);
        $data['board'] = $this->common->getSingleRows('board',$id);
        $data['all_board'] = $this->common->getAllData('board');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/board_detail',$data); 
        $this->load->view('frontend/common/footer');
    }
    
    public function csr_details(){
        $id = array('id'=>$_GET['id'],'type'=>$_GET['type']);
     
        $data['csractivity'] = $this->common->getSingleRows('csractivity',$id);
        $data['csr_step'] = $this->common->getAllData('csr_step');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/csr_details',$data); 
        $this->load->view('frontend/common/footer');
    }
    
    
    public function esg()
    {
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/esg'); 
        $this->load->view('frontend/common/footer'); 
    }
    
    public function site_map()
    {
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/site_map'); 
        $this->load->view('frontend/common/footer'); 
    }
    
    public function disclaimer()
    {
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/disclaimer'); 
        $this->load->view('frontend/common/footer'); 
    }
    
    public function quality_certification()
    {
        $data['quality_certification'] = $this->common->getAllData('quality_certification');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/quality_certification',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function highlight_event()
    {
        $data['event'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Event'));
        $data['blog'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Blog'));
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/highlight_event',$data); 
        $this->load->view('frontend/common/footer'); 
    }
    
     public function highlight_blog()
    {
        $data['event'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Event'));
        $data['blog'] = $this->common->getAllSingleRows('post',array('post_type'=> 'Blog'));
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/highlight_blog',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function subsidiarie()
    {
        $id = array('id'=>1);
        $data['subsidiaries'] = $this->common->getSingleRows('subsidiaries',$id);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/subsidiarie',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function csr_activity()
    {
        $data['csractivity_type'] = $this->common->getAllData('csr_activity_type');
        $data['csractivity'] = $this->common->getAllData('csractivity');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/csractivity',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function quality_assurance()
    {
        $id = array('id'=>1);
        $data['quality_assurance'] = $this->common->getSingleRows('quality_assurance',$id);
        $data['inspection_testing'] = $this->common->getAllData('inspection_testing');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/quality_assurance',$data); 
        $this->load->view('frontend/common/footer');   
    }

    public function investor_relation()
    {
        $id = array('id'=>1);
        $data['investor_relation'] = $this->common->getSingleRows('investors_relations',$id);
        $data['reports1'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Annual Reports'));
        $data['reports2'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Quarterly Results'));
        $data['reports3'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Subsidiaries Financial'));
        $data['reports4'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Investor Presentation'));
        $data['reports5'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Conference Calls Transcripts'));
        $data['reports6'] = $this->common->getAllSingleRows('annual_reports',array('report_type'=>'Conference Calls Recordings'));
        $data['reports1limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Annual Reports'),5);
        $data['reports2limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Quarterly Results'),5);
        $data['reports3limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Subsidiaries Financial'),5);
        $data['reports4limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Investor Presentation'),5);
        $data['reports5limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Conference Calls Transcripts'),5);
        $data['reports6limit'] = $this->common->getAllSingleRowsByLimit('annual_reports',array('report_type'=>'Conference Calls Recordings'),5);
          $data['custom_tab'] = $this->common->getAllData('investors_relations_tab');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/investor_relation',$data); 
        $this->load->view('frontend/common/footer');   
    }

    public function locate_us()
    {
        $data['locateus'] = $this->common->getAllData('locateus');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/locateus',$data); 
        $this->load->view('frontend/common/footer');  
    }
    
    public function career()
    {
        $id = array('id'=>1);
        $data['career'] = $this->common->getSingleRows('career',$id);
        $data['careerpoint'] = $this->common->getAllData('career_point');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/career',$data); 
        $this->load->view('frontend/common/footer');  
    }

    public function products()
    {
        $data['product'] = $this->common->getAllData('product');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/product',$data); 
        $this->load->view('frontend/common/footer');  
    }

    public function product_detail()
    {
        $id = array('id'=>$_GET['id']);
        $data['product'] = $this->common->getSingleRows('product',$id);
        //$data['manufacturing_ranges'] = $this->common->getAllData('manufacturing_range');
        $data['recent_product'] = $this->common->getAllDataLimit('product',2);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/product_detail',$data); 
        $this->load->view('frontend/common/footer');  
    }
    
    public function manufacturing_range()
    {
        $id = array('id'=>$_GET['id']);
        $data['manufacturing_range'] = $this->common->getSingleRows('manufacturing_range',$id);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/manufacturing_range',$data); 
        $this->load->view('frontend/common/footer');  
    }

    public function about_company_profile()
    {
        $id = array('id'=>1);
        $data['company_profile'] = $this->common->getSingleRows('company_profile',$id);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/about_company_profile',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function about_milestones()
    {
        $data['milestones'] = $this->common->getAllData('milestones');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/about_milestones',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function about_integrity()
    {
        $data['integrity'] = $this->common->getAllData('integrity');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/about_integrity',$data); 
        $this->load->view('frontend/common/footer'); 
    }

  
    public function about_board()
    {
        // $data['board'] = $this->common->getAllData('board');
        $data['board'] = $this->common->getAllSingleRows('board',array('is_primary'=>"NO"));
        $id = array('id'=>1);

        $data['about_onthe_board'] = $this->common->getSingleRows('about_onthe_board',$id);
        $data['is_primay_board'] = $this->common->getAllSingleRowsByLimit('board',array('is_primary'=>"YES"),1);
        // print_r($data['is_primay_board']);
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/about_board',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function about_our_leadership()
    {
        $id = array('id'=>1);
        $data['aboutourleadership'] = $this->common->getSingleRows('about_ourleadership',$id);
        $data['ourleadership'] = $this->common->getAllData('ourleadership');
        $this->load->view('frontend/common/header'); 
        $this->load->view('frontend/about_our_leadership',$data); 
        $this->load->view('frontend/common/footer'); 
    }

    public function career_form()
    {
        $config['upload_path'] = './uploads/'; 
        $config['allowed_types'] = 'pdf'; 
       // $config['max_size'] = '100'; // max_size in kb 
        $config['file_name'] = $_FILES['resume']['name']; 
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('resume')) {
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
            $filename = 'pdf.png';
        } else {
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name']; 
        }
        $this->form_validation->set_rules('name', 'name', 'required'); 
         
        if($this->form_validation->run() == true){
        $data = array( 
                    'name'=> $this->input->post('name'),
                    'email'=> $this->input->post('email'),
                    'phone'=> $this->input->post('phone'),
                    'message'=> $this->input->post('message'),
                    'resume'=>$filename
                ) ;
        $blogData = $this->common->insert('career_form',$data);
            $this->session->set_flashdata('career_succ_msg', 'Career Submit Successfully.');
            redirect('career?success="true"');
        }else{ 
           $this->session->set_flashdata('career_error_msg', 'All Fields Are Required.');
        }
        
    }

    public function locate_us_form()
    {
       
        $this->form_validation->set_rules('name', 'name', 'required'); 
         
        if($this->form_validation->run() == true){
        $data = array( 
                    'name'=> $this->input->post('name'),
                    'email'=> $this->input->post('email'),
                    'phone'=> $this->input->post('phone'),
                    'message'=> $this->input->post('message'),
                ) ;
        $blogData = $this->common->insert('locate_us_form',$data);
            $this->session->set_flashdata('locate_us_succ_msg', 'Inquiry Submit Successfully.');
            redirect('locate-us?success="true"');
        }else{ 
           $this->session->set_flashdata('locate_us_error_msg', 'All Fields Are Required.');
        }
        
    }


}

?>