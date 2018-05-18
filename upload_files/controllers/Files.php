<?php

class Files extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        
	$this->load->helper(array('form', 'url'));
    }
 
    public function index()
    {
        $this->load->view('upload_view');
    }

    public function upload_image() {
       //main path
        $config['upload_path'] = '/var/www/html/productApp/uploads/';
        
       //file types
        $config['allowed_types'] = 'gif|jpg|png';
        
        //inyecting the config  
        $this->load->library('upload', $config);
 
        
        if ( !$this->upload->do_upload()) {
            //if there is any error
            $error = array('error' => $this->upload->display_errors());
            // load into view
            $this->load->view('upload_view', $error);
        } else {
            //the data
            $datos["img"] = $this->upload->data();
 
            // sample of properties
            // 
            // $datos["img"]["file_name"]);
 
            //load into view
            $this->load->view('upload_view', $datos);
        }
    }   
}

