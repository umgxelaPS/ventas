<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
    
    
 public function getUsuarios(){
    $this->db->select("u.*,r.nombre as rol");
    $this->db->from("usuario u");
    $this->db->join("roles r","u.roles_id= r.id");
    $this->db->where("estado","activo");
    $resultados=$this->db->get();
    return $resultados->result();
}
     public function getUsuario($id){
        $this->db->where("id",$id);
        $resultado=$this->db->get("usuario");
        return $resultado->row();
    }
public function getRoles(){
    $resultados=$this->db->get("roles");
    return $resultados->result();
}


public function guardar($data){
    return $this->db->insert("usuario",$data);
}
public function login($username,$password){
    $this->db->where("username",$username);
    $this->db->where("password",$password);
    
    $resultado= $this->db->get("usuario");
    if($resultado->num_rows() >0){
        return $resultado->row();
    }
    else{
        return false;
    }
}
    public function update($id,$data){
        $this->db->where("id",$id);
        return $this->db->update("usuario",$data);
    }
}
