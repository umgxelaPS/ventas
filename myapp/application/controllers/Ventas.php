<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
       parent::__construct(); 
        $this->load->model("Ventas_model");
        $this->load->model("Clientes_model");
        $this->load->model("Productos_model");
    }
    public function index(){
        $data =array(
            'ventas' => $this->Ventas_model->getventas(),
        );
        $this->load->view("layouts/header");
        $this->load->view("ventas",$data);
         $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");	
}
    public function add(){
        $data = array(
            "tipodocumentos" => $this->Ventas_model->getComprobantes(),
            "clientes"=> $this->Clientes_model->getClientes()
        );
        $this->load->view("layouts/header");
        $this->load->view("add_ventas",$data);
        $this->load->view("layouts/aside");
        $this->load->view("layouts/footer");
    }
    public function getproductos(){
        $valor =$this->input->post("valor");
        $clientes= $this->Ventas_model->getproductos($valor);
        echo json_encode($clientes);
    }
    
    public function store(){
        $fecha= $this->input->post("fecha");
        $subtotal= $this->input->post("subtotal");
        $iva= $this->input->post("iva");
        $descuento= $this->input->post("descuento");
        $total= $this->input->post("total");
        $numero=$this->input->post("numero");
        $idcliente=$this->input->post("idcliente");
        $idcomprobante= $this->input->post("idcomprobante");
        $idusuario= $this->session->userdata("id");
        $serie=$this->input->post("serie");
        
        $idproductos=$this->input->post("idproductos");
        $precios=$this->input->post("precios");
        $cantidades=$this->input->post("cantidades");
        $importes=$this->input->post("importes");
        
        $data= array(
        'fecha' => $fecha,
        'subtotal' => $subtotal,
        'iva'=>$iva,
        'descuento' =>  $descuento,
        'total'=> $total,
        'numero_documento' =>$numero,
        'clientes_id'=>$idcliente,
        'tipo_documento_id'=>$idcomprobante,
        'usuario_id'=>$idusuario,
        'serie'=>$serie,
            
        
        
        );
        
        if($this->Ventas_model->guardar($data)){
            $idventa= $this->Ventas_model->ultimoId();
            $this->updatecomprobante($idcomprobante);
            $this->guardarDetalle($precios,$cantidades,$importes,$idproductos,$idventa);
            redirect(base_url()."ventas");
        }else{
            redirect(base_url()."ventas/add");
        }
    }
    protected function updatecomprobante($idcomprobante){
        $comprobanteActual= $this->Ventas_model->getComprobante($idcomprobante);
        $data= array (
            'cantidad'=> $comprobanteActual->cantidad +1, 
        );
        $this->Ventas_model->updateComprobante($idcomprobante,$data);
    }
    protected function guardarDetalle($precios,$cantidades,$importes,$productos,$idventa){
        for($i=0; $i < count($productos); $i++){
            $data = array (
                'precio'=>$precios[$i],
                'cantidad'=>$cantidades[$i],
                'importe'=>$importes[$i],
                'productos_id'=>$productos[$i],
                'ventas_id'=>$idventa,
            );
        $this->Ventas_model->guardarDetalle($data);
        $this->updateProducto($productos[$i],$cantidades[$i]);
        }
    }
    protected function updateProducto($idproducto,$cantidad){
        $productoActual= $this->Productos_model->getProducto($idproducto);
        $data = array(
            'stock'=> $productoActual->stock - $cantidad, 
        );
        $this->Productos_model->update($idproducto,$data);
    }
    
    public function view(){
        $idventa= $this->input->post("id");
        $data = array(
        "venta"=>$this->Ventas_model->getventa($idventa),
        "detalles"=>$this->Ventas_model->getDetalle($idventa)
        
        );
        $this->load->view("mostrarventa",$data);
    }
}