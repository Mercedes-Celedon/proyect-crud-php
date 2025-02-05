<?php
require 'connection.php';
$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Biinary Girls</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    <a href="form.php"  role="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span>  Agregar un usuario</a></li>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <h1 class="titulo"><center>Conoce a las Biinary Girls</center></h1>
    </div>
    <div class="row tarjetas">
        <?php foreach($resultado as $row):?>
            <div class="col-sm-4">
                <div class="tarjeta">
                    <img src="<?php echo $row["url_foto"]?>" class="img-responsive perfil">
                     <div class="descripcion">
                        <h2><?= $row["nombre"]?> <?= $row["apellido"]?></h2>
                        <p>Soy <?= $row["nacionalidad"]?>, tengo <?= $row["edad"]?> años y mi pasatiempo favorito es <?= $row["pasatiempo"]?>.</p><br>
                        <a href="form-update.php?id=<?= $row["id"] ?>" role="button" class="btn btn-primary btn-lg">Editar</a>
                        <a href="delete.php?id=<?= $row["id"]?>" role="button" class="btn btn-primary btn-lg">Borrar</a>
                    </div>
                </div>
            
            </div>
        <?php endforeach;?>  
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