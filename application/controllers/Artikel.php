<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Artikel extends CI_Controller{
  public function __construct() {
        parent::__construct();
        $this->load->library('CKEditor, CKFinder'); //load library ckeditor dan ckfinder
  }
  
  public function index(){
    $path = '../../assets/ckfinder'; //sesuaikan dengan path ckfinder anda
    $width = '100%';
    $this->editor($path, $width);

    $this->load->view('fartikel');
  }

  public function submit(){
    //code untuk proses simpan insert atau update
  }

  public function editor($path,$width) { 
    //configure base path of ckeditor folder
    $this->ckeditor->basePath = base_url().'assets/ckeditor/'; //sesuikan dengan path ckeditor anda
    $this->ckeditor->config['toolbar'] = 'Full';
    $this->ckeditor->config['language'] = 'en';
    $this->ckeditor->config['width'] = $width;

    //configure ckfinder dan ckeditor config
    $this->ckfinder->SetupCKEditor($this->ckeditor,$path);
  }
}
