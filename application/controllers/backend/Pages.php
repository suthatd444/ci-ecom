<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
        // Load user model 
        $this->load->model('common'); 
    }

    public function index($id)
    {
        $types=$this->common->getAllData('pages_types');
        $temp[0]='Select Template';
        foreach ( $types as $key => $value) {
           $temp[$value['id']]=$value['page_name'];
        }
        $data['types'] = $temp;
        $data['description']="";
        $data['selectedType']=array(0);
        $data['selectedType']=array($id);
        
            $description=$this->common->getAllSingleRows('pages',array('page_type_id'=>$id));
           if(count($description)>0){
            $data['page']=$description[0];
            // $data['selectedType']=array($id);
           }
        $this->load->view('backend/common/header'); 
        $this->load->view('backend/pages/index',$data); 
        $this->load->view('backend/common/footer');  
    }

    public function add()
    {
        
        if(!empty($this->input->post('submit'))){
            if(!empty($_FILES['post_img']['name'])){
    $config['upload_path'] = './uploads/'; 
    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
  //  $config['max_size'] = '100'; // max_size in kb 
    $config['file_name'] = $_FILES['post_img']['name']; 
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('post_img')) {
        $this->session->set_flashdata('error_msg', 'Something Went Wrong.' );
        $filename = 'image.png';
    } else {
        $uploadData = $this->upload->data(); 
        $filename = $uploadData['file_name']; 
    }
}
           

            $this->form_validation->set_rules('description', 'title', 'required'); 
            // $this->form_validation->set_rules('sub_title', 'title', 'required'); 
             
            if($this->form_validation->run() == true){
            $data = array( 
                        'page_type_id'=> $this->input->post('types'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'meta_title'=> $this->input->post('meta_title'),
                        'meta_description'=> $this->input->post('meta_description'),
                        'meta_keyword'=> $this->input->post('meta_keyword'),
                    ) ;

                    if(!empty($_FILES['post_img']['name'])){
                        $data['image']=$filename;
                    }
            $PostData = $this->common->pages_update('pages',$data,$this->input->post('types'));
                $this->session->set_flashdata('succ_msg', 'Template Added Successfully.');
                redirect('custom-pages/'.$this->input->post('types'));
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }
        // $this->load->view('backend/common/header'); 
        // $this->load->view('backend/post/add'); 
        // $this->load->view('backend/common/footer');
    }

    public function edit()
    {

        if(!empty($this->input->post('submit'))){

            $config['upload_path'] = './uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
          //  $config['max_size'] = '100'; // max_size in kb 
            $config['file_name'] = $_FILES['post_img']['name']; 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('post_img')) {
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
                        'post_type'=> $this->input->post('post_type'), 
                        // 'sub_title'=> $this->input->post('sub_title'),
                        'description'=> $this->input->post('description'),
                        'image'=>$filename
                    ) ;
            $PostData = $this->common->update('post',$data,$id);
                $this->session->set_flashdata('succ_msg', 'Post Updated Successfully.');
                redirect('post');
            }else{ 
               $this->session->set_flashdata('error_msg', 'All Fields Are Required.');
            }
        }

        $data = array('id'=>$_GET['id']);
        $data['post'] = $this->common->getSingleRows('post',$data);

        $this->load->view('backend/common/header'); 
        $this->load->view('backend/post/edit',$data); 
        $this->load->view('backend/common/footer');
    }

    public function delete()
    {
        $id = $_GET['id'];   
        $PostData = $this->common->delete('post',$id);
        if($PostData){
            $this->session->set_flashdata('succ_msg', 'Post Deleted Successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Something Went Wrong.' ); 
        }
        redirect('post');
    }

}
