<?php
require 'connection.php';
 
$user_id=$_GET['id'];



if (isset($_POST['submit'])){
    $name = $_POST['nombre'];
    $surname = $_POST['apellido'];
    $nacionalidad = $_POST['nacionalidad'];
    $age = $_POST['edad'];
    $hobby = $_POST['pasatiempo'];

    /*asignación de nuevo nombre en imagen y ruta para almacenarla*/
    $file_name= $_FILES['imagen']['name'];
    $file_extension= explode(".", $file_name);
    $file_extension = end($file_extension);
    $new_file_name = uniqid();
    $new_file_name = $new_file_name.".".$file_extension;
    $file_location="images/".$new_file_name;
    $file_tmp_name =$_FILES['imagen']['tmp_name'];

    move_uploaded_file($file_tmp_name, $file_location);


    $query = "UPDATE usuarios SET nombre='$name', apellido='$surname', nacionalidad='$nacionalidad', edad='$age', pasatiempo='$hobby', url_foto='$file_location' WHERE id='$user_id'";

    mysqli_query($connection, $query);
    

    //redireccionar a index
    header("Location: index.php");
    die();
}
?>