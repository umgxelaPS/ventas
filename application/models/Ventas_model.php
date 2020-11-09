<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {
    public function getventas(){
        $this->db->select("v.*,c.nombres,tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c","v.clientes_id= c.id");
        $this->db->join("tipo_documento tc","v.tipo_documento_id= tc.id");
        $resultados= $this->db->get();
        if($resultados->num_rows()>0){
            return $resultados->result();
        }else{
            return false;
        }
    }
    public function ventasPorFecha($fechainicio,$fechafin){
         $this->db->select("v.*,c.nombres,tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c","v.clientes_id= c.id");
        $this->db->join("tipo_documento tc","v.tipo_documento_id= tc.id");
        $this->db->where("v.fecha >=",$fechainicio);
        $this->db->where("v.fecha <=",$fechafin);
        $resultados= $this->db->get();
        if($resultados->num_rows()>0){
            return $resultados->result();
        }else{
            return false;
        }
    }
    public function getventa($id){
         $this->db->select("v.*,c.nombres,c.direccion,c.telefono,c.nit,tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c","v.clientes_id= c.id");
        $this->db->join("tipo_documento tc","v.tipo_documento_id= tc.id");
        $this->db->where("v.id",$id);
        $resultado= $this->db->get();
        return $resultado->row();
    }
    public function getDetalle($id){
        $this->db->select("dt.*,p.codigo,p.nombre");
        $this->db->from("detalle_venta dt");
        $this->db->join("productos p","dt.productos_id= p.id");
         $this->db->where("dt.ventas_id",$id);
        $resultados= $this->db->get();
        return $resultados->result();
    }
    public function getComprobantes(){
        $resultados= $this->db->get("tipo_documento");
        return $resultados->result();
    }
    public function getComprobante($idcomprobante){
        $this->db->where("id",$idcomprobante);
        $resultado= $this->db->get("tipo_documento");
        return $resultado->row();
    }
    
    public function getproductos($valor){
        $this->db->select("id,codigo,nombre as label,precio,stock");
        $this->db->from("productos");
        $this->db->like("nombre",$valor);
        $resultados=$this->db->get();
        return $resultados->result_array();
    }
    
    public function guardar($data){
        return $this->db->insert("ventas",$data);
    }
    public function ultimoId(){
        return $this->db->insert_id();
    }
    
    public function updateComprobante($idcomprobante,$data){
        $this->db->where("id",$idcomprobante);
        $this->db->update("tipo_documento",$data);
    }
    
    public function guardarDetalle($data){
        $this->db->insert("detalle_venta",$data);
    }
    
}