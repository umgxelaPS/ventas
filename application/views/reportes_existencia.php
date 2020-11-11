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
        
<title>Reporte</title>
    
       </head>
    <body> 

          <div class="contenidoreportes">
            <section class="content-header encabezadoreportes">
               <h3 class="text-dark font-weight-bold display-4 titulo">
                Reporte de Existencias
                
                <small class="font-weight-bold">Listado</small>
                </h3>
            </section>
              
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="formularios">
                        <form action="<?php echo current_url();?>" method="POST" class="formhorizontal">
                        </form>
                        </div>
                        <div class="tabla5">
                        <div class="row">
                        <div class="col">
                        <table id="existencia"class="table table-bordered table-condensed btn-hover">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Existencias</th>
                            <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($productos)):?>
                                <?php foreach($productos as $producto):?>
                                <tr>
                                 <td><?php echo $producto->id;?></td>
                                 <td><?php echo $producto->codigo;?></td>
                                 <td><?php echo $producto->nombre;?></td>
                                 <td><?php echo $producto->stock;?></td>
                                <?php $dataproducto =$producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->stock;?>
                                 <td>
                                     <button type="button" class="btn btn-info btn-view-existencia" value="<?php echo $dataproducto;?>" data-toggle="modal" data-target="#modal-default"> <span ><i class="icon ion-md-search"></i></span></button>
                                    </td>
                                
                                </tr>
                                
                            <?php endforeach;?>
                            <?php endif ?>
                        </table>    
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
       
        </div>
       
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Existencias</h5>
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
