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
    <title>Ajustes de Producto</title>
    
    </head>
    <body>
        <div class="contenido">
            <section class="content-header  encabezado">
                <div class="row">
                 <div class="col-md-12">
                <h3 class="text-dark font-weight-bold display-4 titulo">
                Ajustes de Producto
                
                <small class="font-weight-bold">Nuevo</small>
                </h3>
                    </div>
                </div>
               <hr>
            </section>
               
                <div class="box box-solid">
                    <div class="box-body">
             
                        
                        <?php if($this->session->flashdata("error")):?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" data-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>        
                        </div>
                        <?php endif;?>
                        <div class="formularios">
                        <form action="<?php echo base_url();?>clientes/store" method="POST">
                        <div class="row">
                            <div class="col-md-10">
                          <div class="form-group">
                                    <label for="">Producto:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idproducto" id="idproducto">
                                        <input type="text" class="form-control" disabled="disabled" id="producto">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-5">
                        <div class="form-group">
                        <label for="apellidos">Concepto</label>
                         <input type="text" class="form-control" id="apellidos" name="apellidos">
                            </div>
                            </div>
                         <div class="col-md-7">
                              <div class="form-group">
                                    <label for="">Usuario:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idusuario" id="idusuario">
                                        <input type="text" class="form-control" disabled="disabled" id="usuario">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-defaultuser" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div>
                                </div> 
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-9">
                            <div class="form-group">
                        <label for="motivo">Motivo:</label>
                         <input type="text" class="form-control" id="motivo" name="motivo">
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                        <label for="cantidad">cantidad:</label>
                         <input type="text" class="form-control" id="cantidad" name="cantidad">
                            </div>
                            </div>
                            
                             
                        <div class="col-md-6">
                        <label for="fecha">Fecha:</label>
                         <input type="date" class="form-control" id="fecha" name="fecha" value="">
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
                        </div>
                    </div> 
        <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title">Lista de  Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>codigo</th>
                            <th>nombre</th>
                            <th>Existencia</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                       <?php if(!empty($productos)):?>
                                <?php foreach($productos as $producto):?>
                            <tr>
                             <td><?php echo $producto->id;?></td>
                             <td><?php echo $producto->codigo;?></td>
                            <td><?php echo $producto->nombre;?></td>
                            <td><?php echo $producto->stock;?></td>
                            <?php $dataproducto =$producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->stock;?>
                            <td>
                            <button type="button" class="btn btn-primary btn-checkProducto" value="<?php echo $dataproducto;?>"><i class="icon ion-md-checkmark"></i></button>   
                            </td> 
                            </tr>
                                <?php endforeach;?>
                                <?php endif;?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
 
</div>
    
                <div class="modal fade" id="modal-defaultuser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title">Lista de  Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>nombre</th>
                            <th>Apellidos</th>
                            <th>rol</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                        <?php if(!empty($usuarios)):?>
                                <?php foreach($usuarios as $usuario):?>
                            <tr>
                             <td><?php echo $usuario->id;?></td>
                             <td><?php echo $usuario->nombres;?></td> 
                             <td><?php echo $usuario->apellidos;?></td> 
                            <td><?php echo $usuario->rol;?></td>
                                <?php $datausuario = $usuario->id."*".$usuario->nombres."*".$usuario->apellidos."*".$usuario->rol;?>
                             <td>
                               <button type="button" class="btn btn-primary btn-checkusuario" value="<?php echo $datausuario ;?>"><i class="icon ion-md-checkmark"></i></button> 
                            </td> 
                            </tr>
                     <?php endforeach;?>
                                <?php endif;?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
 
</div>
       
       

    </body>
</html>