<?php
    include("conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "DELETE FROM Proveedores WHERE Id = '$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: ../proveedor.php");
    }
?>
