<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajustes extends CI_Controller {
    
    public function __construct(){
       parent::__construct(); 
        $this->load->model("Productos_model");
        $this->load->model("Usuarios_model");
    }
    
    public function index()
	{
        $data= array(
            "productos"=>$this->Productos_model->getProductos(),
            "usuarios"=>$this->Usuarios_model->getUsuarios()
        );
        $this->load->view("layouts/header");
        $this->load->view("ajustes",$data);
        $this->load->view("layouts/aside");
         $this->load->view("layouts/footer");

	}
}