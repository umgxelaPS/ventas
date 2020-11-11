<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('public/css/main.css')?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
        
<title>Listado</title>
    
    </head>
    <body> 

          <div class="contenidoclientes">
            <section class="content-header encabezadocliente">
               <h3 class="text-dark font-weight-bold display-4 titulo">
                Clientes
                
                <small class="font-weight-bold">Listado</small>
                </h3>
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                        <a href="<?php echo base_url();?>clientes/add" class="btn btn-primary"><i class="icon ion-md-add"></i>Agregar Cliente</a>
                        </div>
                    </div>
                    </div>
                    </div>
                      <hr>  
                     </section>
                        <div class="tabla2">
                        <div class="row">
                        <div class="col-md-12">
                        <table id="example1"class="table table-bordered btn-hover tablaclientes">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Nombres:</th>
                            <th>Apellidos:</th>
                            <th>Telefono:</th>
                            <th>Direccion:</th>
                            <th>Nit:</th>
                            <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($clientes)):?>
                                <?php foreach($clientes as $cliente):?>
                            <tr>
                             <td><?php echo $cliente->id;?></td>
                             <td><?php echo $cliente->nombres;?></td> 
                             <td><?php echo $cliente->apellidos;?></td> 
                            <td><?php echo $cliente->telefono;?></td> 
                            <td><?php echo $cliente->direccion;?></td> 
                            <td><?php echo $cliente->nit;?></td> 
                                <?php $datacliente = $cliente->id."*".$cliente->nombres."*".$cliente->apellidos."*".$cliente->telefono."*".$cliente->direccion."*".$cliente->nit;?>
                             <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $datacliente?>">
                                  <span ><i class="icon ion-md-search"></i></span>
                                </button>
                                <a href="<?php echo base_url();?>clientes/editar/<?php echo $cliente->id;?>" class="btn btn-warning"><i class="icon ion-md-create"></i></a>
                                <a href="<?php echo base_url();?>clientes/eliminar/<?php echo $cliente->id;?>" class="btn btn-danger btn-remove"><i class="icon ion-md-trash"></i></a>
                            </div>    
                            </td> 
                            </tr>
                                <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>    
                        </div>
                        </div>
                    </div>
        </div>
       
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informacion del cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
  
</div>
    </body>
</html>
