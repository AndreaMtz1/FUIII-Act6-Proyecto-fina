<?php
    include("conexion.php");
    $con = conectar();

    $id = trim($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $paginaWeb = trim($_POST['paginaWeb']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);
    $rfc = trim($_POST['rfc']);
    $repEmpresa = trim($_POST['repEmpresa']);

    $sql = "UPDATE Proveedores SET  Nombre ='$nombre', PaginaWeb ='$paginaWeb', Direccion ='$direccion', Telefono ='$telefono', Correo ='$correo', RFC ='$rfc', RepEmpresa ='$repEmpresa'  WHERE Id = '$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: ../proveedor.php");
    }
?>