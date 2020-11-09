<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
       parent::__construct(); 
        $this->load->model("Clientes_model");
    }
    public function index()
	{
        $data= array(
        'clientes'=>$this->Clientes_model->getClientes(),
        
        
        );
        $this->load->view("layouts/header");
        $this->load->view("clientes",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");	

	}
    public function add(){
         $this->load->view("layouts/header");
        $this->load->view("add_cliente");
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    
    public function store(){
        $nombres= $this->input->post("nombres");
        $apellidos= $this->input->post("apellidos");
        $telefono= $this->input->post("telefono");
        $direccion= $this->input->post("direccion");
        $nit= $this->input->post("nit");
        
        $this->form_validation->set_rules("nombres","NombreCliente","required");
        $this->form_validation->set_rules("nit","nit","required");
        
        if($this->form_validation->run()){
            $data= array(
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'telefono'=>$telefono,
        'direccion'=>$direccion,
        'nit'=>$nit,
        'estado'=>"activo"
        );
        
        if($this->Clientes_model->guardar($data)){
            redirect(base_url()."clientes");    
        } else{
            $this->session->set_flashdara("error","No se guardo el registro");
            redirect(base_url()."clientes/add");
        }
            
        } else{
            $this->add();
        }
        
    }
     public function editar($id){
        $data= array(
        'cliente'=>$this->Clientes_model->getCliente($id),  
        );
        $this->load->view("layouts/header");
        $this->load->view("editar_cliente",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    public function update(){
          $idcliente= $this->input->post("idcliente");
          $nombres= $this->input->post("nombres");
        $apellidos= $this->input->post("apellidos");
        $telefono= $this->input->post("telefono");
        $direccion= $this->input->post("direccion");
        $nit= $this->input->post("nit");
        
      
    
    $data= array(
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'telefono'=>$telefono,
        'direccion'=>$direccion,
        'nit'=>$nit,
    );
    if($this->Clientes_model->update( $idcliente,$data)){
         redirect(base_url()."clientes");
    }else{
        $this->session->set_flashdara("error","No se pudo actualizar el registro");
         redirect(base_url()."clientes/editar/".$idcliente);
    }
    }
    
     public function eliminar($id){
         $data= array(
            'estado'=>"inactivo",
        );
        $this->Clientes_model->update($id,$data);
        echo"clientes";
    }
    
}