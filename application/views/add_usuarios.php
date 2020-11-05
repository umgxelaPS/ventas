<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('public/css/main.css')?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
    
    <title>Agregar Usuario</title>
    
    </head>
    <body>
        <div class="content-wrapper contenido formularios">
            <section class="content-header  encabezado">
                <div class="row">
                 <div class="col-md-12">
                <h3 class="text-dark font-weight-bold display-4 titulo">
                Usuario
                
                <small class="font-weight-bold">Nuevo</small>
                </h3>
                    </div>
                </div>
            </section>
            
            <section class="content agregar">
                <div class="box box-solid">
                    <div class="box-body">
                    <hr>
                        <div class="row">
                        <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" data-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>     
                            
                        </div>
                        <?php endif;?>
                       <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
                         <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                        <label for="nombres">Nombres:</label>   
                        <input type="text" id="nombres" name="nombres" class="form-control"> 
                        </div>
                        </div> 
                        <div class="col-md-4">
                        <label for="apellidos">Apellidos:</label>   
                        <input type="text" id="apellidos" name="apellidos" class="form-control"> 
                        </div>
                        </div> 
                        <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                        <label for="telefono">Telefono:</label>   
                        <input type="text" id="telefono" name="telefono" class="form-control"> 
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                        <label for="email">Email:</label>   
                        <input type="email" id="email" name="email" class="form-control"> 
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                        <label for="usuario">Usuario:</label>   
                        <input type="text" id="username" name="username" class="form-control"> 
                        </div> 
                        </div>
        
                        <div class="col-md-4">
                        <div class="form-group">
                        <label for="password">Contraseña:</label>   
                        <input type="password" id="password" name="password" class="form-control"> 
                        </div>
                         </div>
                         </div>
                         <div class="form-group">
                         <div class="row">
                        <div class="col-md-4">
                        <label for="roles">Rol:</label>   
                        <select name="roles" id="roles" class="form-control">
                         <?php foreach($roles as $rol):?>
                            <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                        <?php endforeach;?>
                        </select>
                        </div>
                        </div>
                         </div>
                        <div class="form-group">  
                        <input type="submit"class="btn btn-success" value="Guardar"> 
                        </div>
                        </form>  
                        </div>
                        </div>
                    </div>
                 
                </div>
           
            </section>
       
        </div>
       