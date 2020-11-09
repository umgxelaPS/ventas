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
    
    <title>Editar</title>
    
    </head>
    <body>
        <div class="content-wrapper contenido formularios">
            <section class="content-header encabezado">
               <h3 class="text-dark font-weight-bold display-4 titulo">
                Cliente
                
                <small class="font-weight-bold">Editar</small>
                </h3>
            </section>
            <section class="content agregar">
      
                <div class="box box-solid">
                    <div class="box-body">
                <hr>
              
                        
                        <?php if($this->session->flashdata("error")):?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" data-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>     
                            
                        </div>
                        <?php endif;?>
                        
                        <form action="<?php echo base_url();?>clientes/update" method="POST">
                        <input type="hidden" name="idcliente" value="<?php echo $cliente->id;?>">  
                            
                       <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                        <label for="nombres">Nombres:</label>
                         <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $cliente->nombres;?>">
                         </div>
                           </div>   
                        <div class="col-md-5">
                        <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                         <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $cliente->apellidos;?>">
                        </div>
                        </div>
                        </div>
                            <div class="row"> 
                            <div class="col-md-4">
                            <div class="form-group">
                        <label for="telefono">Telefono:</label>
                         <input type="text" class="form-control" id="telefono" name="telefono"value="<?php echo $cliente->telefono;?>">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                        <label for="direccion">Direccion:</label>
                         <input type="text" class="form-control" id="direccion" name="direccion"value="<?php echo $cliente->direccion;?>">
                            </div>
                            </div>
                            </div>
                        <div class="row"> 
                            <div class="col-md-6">
                            <div class="form-group">
                        <label for="nit">Nit:</label>
                         <input type="text" class="form-control" id="nit" name="nit"value="<?php echo $cliente->nit;?>">
                            </div>
                            </div>
                            </div>
                        <div class="row">
                        <div class="col-md-8">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Guardar</button>  
                        </div>
                            </div>
                            </div>
                        </form>   
                        </div>
                        </div>
            </section>
                 
                </div>
    </body>
</html>
