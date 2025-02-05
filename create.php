<?php
require 'connection.php';
/*echo $_POST['nombre'];
print_r($_FILES);*/

if(isset($_POST['submit'])){
    $name = $_POST['nombre'];
    $surname = $_POST['apellido'];
    $nacionalidad = $_POST['nacionalidad'];
    $age = $_POST['edad'];
    $hobby = $_POST['pasatiempo'];

    /*Guardar imagen en base de datos*/
    $file_name= $_FILES['imagen']['name'];
    $file_extension= explode(".", $file_name);
    $file_extension = end($file_extension);
    $new_file_name = uniqid();
    $new_file_name = $new_file_name.".".$file_extension;
    $file_location="images/".$new_file_name;
    $file_tmp_name =$_FILES['imagen']['tmp_name'];

    move_uploaded_file($file_tmp_name, $file_location);

    $query="INSERT INTO usuarios (nombre, apellido, nacionalidad, edad, pasatiempo, url_foto) VALUES('$name','$surname','$nacionalidad', '$age', '$hobby', '$file_location')";

    $result= mysqli_query($connection, $query);

    //redireccionar a index
    header("Location: index.php");
    die();
}

?>