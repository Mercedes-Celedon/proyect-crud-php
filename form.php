<?php
require 'create.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega Usuario - ADA</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--Font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-sm-9 navbar">
                        <img src="logo.png" class="logo">
            </div>
            <div class="col-sm-3 agregar">
                <a href="index.php" role="button" class="btn btn-primary btn-lg">Regresar</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h1>Agrega a un miembro del equipo</h1>
            <center><p>Llena todos los campos para poder ser miembro de las Biinary Girls</p></center>
            <br>
        </div>
    </div>
    <div class="container formulario">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>            
                        <input type="text" name="nombre" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" name="nacionalidad" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" name="edad" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="pasatiempo">Pasatiempo:</label>
                        <input type="text" name="pasatiempo" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="file" name="imagen" class="" required/>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Agregar usuario nuevo</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
<footer>
<div class="container-fluid">
    <div class="row header">
        <div class="col-sm-9 ">
            <center><h3>Síguenos en <i class="fa-brands fa-github"></i> <i class="fa-brands fa-youtube"></i> <i class="fa-solid fa-podcast"></i> <i class="fa-brands fa-spotify"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-facebook-f"></i>
            </h3></center>
        </div>
        <div class="col-sm-3">
        <img src="logo-icon.png" class="logo-foo">
        </div>
    </div>
</div>
</footer>
</html>