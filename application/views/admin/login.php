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
    
    <title>Formulario</title>
</head>
<body class="fondo">



    <div class="container formulario">
        <div class="row">
        <div cass="col-md-4 "> 
       
        
        </div>
        <div class="espacio">
        </div>
        </div>
        <div class="row">
        <fieldset class="col-md-9 ">
            

                <legend class="col-xs-4">
                    <h3>inicio de sesi&oacute;n</h3>
                </legend>
                
                <form action="<?php echo base_url();?>auth/login" method="post">
                    
                    <div class="form-group">
                    <label class="col-xs-12" for="username"><h4>Usuario</h4></label>
                 <div class="col-xs-10 ">
                        
                    <input type="text" id="username" class="form-control Input" name="username">
                        
                        </div>
                    
                    </div>
                    <div class="form-group">
                    <label class="col-xs-12" for="password"><h4>Password</h4></label>
                 <div class="col-xs-10 ">
                    <input type="password" id="password" class="form-control col-xs-12 Input" name="password">
                        </div>
                    
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block ">Sign In</button>
                    
                    </div>
                 
                </form>
            </fieldset>
         </div>
            
        
    </div>

</body>
</html>