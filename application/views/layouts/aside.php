
        

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
    
    <title>Formulario</title>
</head>
<body>

<div class="d-flex ">
  <div id="sidebar-container" class="bg-primary">
    <div class="logo">
      <h4 class="texto">System Inventory</h4>
      </div>
    <div class="menu">
      <a href="<?php echo base_url();?>categorias" class="d-block p-3 textomenu"><i class="icon ion-md-add mr-2 lead"></i>Categorias</a>
      <a href="<?php echo base_url();?>clientes" class="d-block p-3 textomenu"><i class="icon ion-md-person mr-2 lead"></i>Clientes</a>
    <a href="<?php echo base_url();?>productos" class="d-block p-3 textomenu"><i class="icon ion-md-cube mr-2 lead"></i>Productos</a>
    <a href="<?php echo base_url();?>ventas" class="d-block p-3 textomenu"><i class="icon ion-md-cart mr-2 lead"></i>Registrar Ventas</a>
    <a href="<?php echo base_url();?>reportes/ventas" class="d-block p-3 textomenu"><i class="icon ion-md-calculator mr-2 lead"></i>Reporte Venta</a>
      <a href="<?php echo base_url();?>reportes/productos" class="d-block p-3 textomenu"><i class="icon ion-md-calculator mr-2 lead"></i>Reporte existencias</a>
     <a href="<?php echo base_url();?>reportes/movimiento" class="d-block p-3 textomenu"><i class="icon ion-md-calculator mr-2 lead"></i>Reporte Movimiento</a>
    <a href="<?php echo base_url();?>administrador/usuarios" class="d-block p-3 textomenu"><i class="icon ion-md-contacts mr-2 lead"></i>Usuarios</a>
    </div>
    
</div>
    

</div>


</body>
</html>