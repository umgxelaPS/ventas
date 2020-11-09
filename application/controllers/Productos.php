<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
       parent::__construct(); 
        $this->load->model("Productos_model");
          $this->load->model("Categorias_model");
    }
     public function index()
	{
        $data= array(
        'productos'=>$this->Productos_model->getProductos(),
        
        
        );
        $this->load->view("layouts/header");
        $this->load->view("productos",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");	

	}
    public function add(){
        $data = array(
        "categorias"=> $this->Categorias_model->getCategorias()
        
        );
         $this->load->view("layouts/header");
         $this->load->view("add_productos",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");

    }
    public function store(){
        $codigo= $this->input->post("codigo");
        $nombre= $this->input->post("nombre");
        $Descripcion= $this->input->post("Descripcion");
        $precio= $this->input->post("precio");
        $stock= $this->input->post("stock");
        $categoria= $this->input->post("categoria");
        $this->form_validation->set_rules("codigo","codigo","required|is_unique[productos.codigo]");
        $this->form_validation->set_rules("nombre","nombre","required");
        $this->form_validation->set_rules("precio","precio","required");
        $this->form_validation->set_rules("stock","stock","required");
       if($this->form_validation->run()){
            $data= array(
        'codigo'=>$codigo,
        'nombre'=>$nombre,
        'Descripcion'=>$Descripcion,
        'precio'=>$precio,
        'stock'=>$stock,
        'categorias_id'=>$categoria,
        'estado'=>"activo"
        );
        
        if($this->Productos_model->guardar($data)){
            redirect(base_url()."productos");    
        } else{
            $this->session->set_flashdara("error","No se guardo el registro");
            redirect(base_url()."add_productos");
        }
       } else{
           $this->add();
       }
       
    }
    
    public function editar($id){
        $data = array(
        "producto"=> $this->Productos_model->getProducto($id),
        "categorias"=> $this->Categorias_model->getCategorias() 
        );
          $this->load->view("layouts/header");
         $this->load->view("editar_productos",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
         
    }
    public function update(){
       $idproducto=$this->input->post("idproducto");
       $codigo= $this->input->post("codigo");
        $nombre= $this->input->post("nombre");
        $Descripcion= $this->input->post("Descripcion");
        $precio= $this->input->post("precio");
        $stock= $this->input->post("stock");
        $categoria= $this->input->post("categoria"); 
        
        $productoActual= $this->Productos_model->getProducto($idproducto);
        if($codigo ==$productoActual->codigo){
            $esunico= '';
        } else{
            $esunico='|is_unique[productos.codigo]';
        }
        
        $this->form_validation->set_rules("codigo","codigo","required".$esunico);
        $this->form_validation->set_rules("nombre","nombre","required");
        $this->form_validation->set_rules("precio","precio","required");
        $this->form_validation->set_rules("stock","stock","required");
   
        if($this->form_validation->run()){
            $data= array(
        'codigo'=>$codigo,
        'nombre'=>$nombre,
        'Descripcion'=>$Descripcion,
        'precio'=>$precio,
        'stock'=>$stock,
        'categorias_id'=>$categoria,
        );
    if($this->Productos_model->update($idproducto,$data)){
        redirect(base_url()."productos");
    }
    else{
        $this->session->set_flashdara("error","No se guardo el registro");
            redirect(base_url()."productos/editar".$idproducto);
    }
        }else{
            $this->editar($idproducto);
        }
    
 }
    
    public function eliminar($id){
         $data= array(
            'estado'=>"inactivo",
        );
        $this->Productos_model->update($id,$data);
        echo "productos";
    }
}