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
    
    <title>Agregar producto</title>
    
    </head>
    <body>
      
            <div class="contenido">

            <section class="content-header encabezado">
                <div class="row">
                 <div class="col-md-12">
                <h3 class="text-dark font-weight-bold display-4 titulo">
                Producto
                
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
                        <form action="<?php echo base_url();?>productos/store" method="POST">
                        <div class="row">
                        <div class="col-md-5">
                        <div class="form-group <?php echo !empty(form_error('codigo'))? 'has-error':'';?>">
                        <label for="codigo">Codigo:</label>
                         <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo set_value('codigo');?>">
                            <?php echo form_error("codigo","<span class='help-block'>","</span>");?>
                            </div> 
                            </div>
                        <div class="col-md-7">
                        <div class="form-group <?php echo !empty(form_error('nombre'))? 'has-error':'';?>">
                        <label for="nombre">Nombre</label>
                         <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre');?>">
                            <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-8">
                            <div class="form-group">
                        <label for="Descirpcion">Descripcion:</label>
                         <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                            <div class="form-group <?php echo !empty(form_error('precio'))? 'has-error':'';?>">
                        <label for="Precio">Precio:</label>
                         <input type="text" class="form-control" id="precio" name="precio" value="<?php echo set_value('precio');?>">
                                <?php echo form_error("precio","<span class='help-block'>","</span>");?>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group <?php echo !empty(form_error('stock'))? 'has-error':'';?>">
                        <label for="stock">Stock:</label>
                         <input type="text" class="form-control" id="stock" name="stock" value="<?php echo set_value('stock');?>">
                                <?php echo form_error("stock","<span class='help-block'>","</span>");?>
                            </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-group">
                        <label for="categoria">Categoria:</label>
                         <select name="categoria" id="categoria" class="form-control">
                          <?php foreach($categorias as $categoria):?>
                             <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
                         <?php endforeach;?>
                            
                        </select>
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
                        </div>
        </div>
    </body>
</html>

       