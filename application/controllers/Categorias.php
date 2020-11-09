<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct(){
       parent::__construct(); 
        $this->load->model("Categorias_model");

    }
	public function index()
	{
         $data= array(
        'categorias'=>$this->Categorias_model->getCategorias(),
        
        );
         
       
       
        $this->load->view("layouts/header");
        $this->load->view("categorias",$data);
        $this->load->view("layouts/aside");
         $this->load->view("layouts/footer");

	}
    public function add(){
        $this->load->view("layouts/header");
        $this->load->view("add_categoria");
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    public function store(){
        $nombre= $this->input->post("nombre");
        $descripcion= $this->input->post("descripcion");
        $this->form_validation->set_rules("nombre","Nombre","required|is_unique[categorias.nombre]");
        if($this->form_validation->run()){
            $data= array(
        'nombre'=>$nombre,
        'descripcion'=>$descripcion,
        'estado'=>"activo"
        );
        
        if($this->Categorias_model->guardar($data)){
            redirect(base_url()."categorias");    
        } else{
            $this->session->set_flashdata("error","No se guardo el registro");
            redirect(base_url()."categorias/add");
        }
        } else{
            $this->add();
        }
       
    }
    public function editar($id){
        $data= array(
        'categoria'=>$this->Categorias_model->getCategoria($id),  
        );
        $this->load->view("layouts/header");
          $this->load->view("editar_categoria",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    public function update(){
          $idcategoria= $this->input->post("idcategoria");
          $nombre= $this->input->post("nombre");
        $descripcion= $this->input->post("descripcion");
        
        $categoriaActual=$this->Categorias_model->getCategoria($idcategoria);
        if($nombre == $categoriaActual->nombre ){
            $unica='';
        }
        else{
           $unica= '|is_unique[categorias.nombre]'; 
        }
    $this->form_validation->set_rules("nombre","Nombre","required".$unica);
    if($this->form_validation->run()){
        $data= array(
    'nombre'=>$nombre,
    'descripcion'=>$descripcion,
    );
    if($this->Categorias_model->update( $idcategoria,$data)){
         redirect(base_url()."categorias");
    }else{
        $this->session->set_flashdara("error","No se pudo actualizar el registro");
         redirect(base_url()."categorias/editar/".$idcategoria);
    }
    }else{
        $this->editar($idcategoria);
    }
    
    }
    public function view($id){
        $data= array(
        'categoria'=>$this->Categorias_model->getCategoria($id),
        
        );
        $this->load->view("view",$data);
    }
    
    public function eliminar($id){
        
       $data= array(
            'estado'=>"inactivo",
        );
        $this->Categorias_model->update($id,$data);
        echo"categorias";
    }
}
