<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
       parent::__construct(); 
        $this->load->model("Usuarios_model");
    }
    
    public function index(){
        $data= array(
        'usuarios'=>$this->Usuarios_model->getUsuarios(),
        
        
        );
        $this->load->view("layouts/header");
        $this->load->view("usuarios",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");	
    }
     public function add(){
        $data= array(
        'roles'=>$this->Usuarios_model->getRoles(),
        
        
        );
        $this->load->view("layouts/header");
        $this->load->view("add_usuarios",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");	
    }
    public function store(){
        $nombres= $this->input->post("nombres");
        $apellidos= $this->input->post("apellidos");
        $telefono= $this->input->post("telefono");
        $email= $this->input->post("email");
        $username= $this->input->post("username");
        $password= $this->input->post("password");
        $roles= $this->input->post("roles");
        
         $data= array(
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'telefono'=>$telefono,
        'email'=>$email,
        'username'=>$username,
        'password'=>$password,
        'roles_id'=>$roles,
        'estado'=>"activo"
        );
        
        if($this->Usuarios_model->guardar($data)){
            redirect(base_url()."administrador/usuarios");    
        } else{
            $this->session->set_flashdara("error","No se guardo el registro");
            redirect(base_url()."administrador/usuarios/add");
        }
       
    }
    public function editar($id){
        $data = array(
        "usuario"=> $this->Usuarios_model->getUsuario($id),
       'roles'=>$this->Usuarios_model->getRoles(),
        
        );
          $this->load->view("layouts/header");
         $this->load->view("editar_usuario",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    public function update(){
        $idusuario=$this->input->post("idusuario");
       $nombres= $this->input->post("nombres");
        $apellidos= $this->input->post("apellidos");
        $telefono= $this->input->post("telefono");
        $email= $this->input->post("email");
        $username= $this->input->post("username");
        $password= $this->input->post("password"); 
         $roles= $this->input->post("roles"); 
        
        
        
    $data= array(
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'telefono'=>$telefono,
        'email'=>$email,
        'username'=>$username,
        'password'=>$password,
        'roles_id'=>$roles,
    );
    if($this->Usuarios_model->update($idusuario,$data)){
         redirect(base_url()."administrador/usuarios");
    }
        else{
        $this->session->set_flashdara("error","No se pudo actualizar el registro");
         redirect(base_url()."administrador/usuarios/editar/".$idusuario);
    }
    }
    public function eliminar($id){
         $data= array(
            'estado'=>"inactivo",
        );
        $this->Usuarios_model->update($id,$data);
        echo"administrador/usuarios";
    }
}