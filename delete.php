<?php
require 'connection.php';

//isset se usa para comprobar si es nulo o no
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    //aquí estoy creando un query con la consulta de eliminar(DELETE)
    $query = "DELETE FROM usuarios WHERE id=$user_id";

    //Aquí ejecutamos la conexión y la consulta query 
    mysqli_query($connection, $query);

    //redireccionar a index
    header("Location: index.php");
    die();
}


?>