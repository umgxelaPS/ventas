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
        
<title>Ventas</title>
    </head>
    <body> 
       
            <div class="contenido">
            <section class="content-header encabezado">
               <h3 class="text-dark font-weight-bold display-4 titulo">
                Ventas
                
                <small class="font-weight-bold">Listado</small>
                </h3>
            </section>
            <section class="content agregar">
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                        <a href="<?php echo base_url();?>ventas/add"  class="btn btn-primary"><i class="icon ion-md-add"></i>Agregar Venta</a>
                        </div>
                    </div>
                    </div>
                </div>
                <hr>
                </section>
                        <div class="tabla">
                        <div class="row">
                        <div class="col-md-12">
                        <table id="example1"class="table table-bordered btn-hover">
                            <thead>
                            <tr>
                            <th>#</th>
                            <th>Nombre del cliente</th>
                            <th>Tipo de comprobante</th>
                            <th>Numero de comprobante</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($ventas)):?>
                                <?php foreach($ventas as $venta):?>
                                <tr>
                                 <td><?php echo $venta->id;?></td>
                                 <td><?php echo $venta->nombres;?></td>
                                 <td><?php echo $venta->tipocomprobante;?></td>
                                 <td><?php echo $venta->numero_documento;?></td>
                                 <td><?php echo $venta->fecha;?></td>
                                 <td><?php echo $venta->total;?></td>
                                 <td>
                                     <button type="button" class="btn btn-info btn-view-venta" value="<?php echo $venta->id;?>" data-toggle="modal" data-target="#modal-default"><span ><i class="icon ion-md-search"></i></span></button>
                                    </td>
                                
                                </tr>
                                
                            <?php endforeach;?>
                            <?php endif ?>
                        </table> 
                        </div>
                        </div>
                    </div>
                 
                </div>
           
          

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lista de  ventas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-imprimir"><span class="fa fa-print">Imprimir</span></button>
      </div>
    </div>

  </div>
  
</div>
    </body>
</html>

       

