<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    
public function __construct(){
       parent::__construct(); 
         $this->load->model("Productos_model");
      
    }
	
    public function index(){
        $productos=$this->Productos_model-> getProductos();
         $data = array(
        "productos"=> $productos,
        
            );
        $this->load->view("layouts/header");
        $this->load->view("reportes_existencia",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    
}