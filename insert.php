<?php
    include("conexion.php");
    $con = conectar();

    $nombre = trim($_POST['nombre']);
    $paginaWeb = trim($_POST['paginaWeb']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $rfc = trim($_POST['rfc']);
    $repEmpresa = trim($_POST['repEmpresa']);


    if( strlen($nombre) > 1 && strlen($paginaWeb) > 1 && strlen($direccion) > 1 && strlen($telefono) > 1 && strlen($correo) > 1 && strlen($rfc) > 1 && strlen($repEmpresa) > 1 )
    {
        $sql = "INSERT INTO Proveedores(Nombre, PaginaWeb, Direccion, Telefono, Correo, RFC, RepEmpresa) VALUES('$nombre','$paginaWeb','$direccion','$telefono','$correo', '$rfc', '$repEmpresa')";
        $query= mysqli_query($con,$sql);
        
        if($query){
            Header("Location: ../proveedor.php");
            
        }else {
        }
    }
?>