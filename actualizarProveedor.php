<?php include ('header.php');?>

<?php 
    include("./crudProveedor/conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "SELECT * FROM Proveedores WHERE Id ='$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
    </head>
    <body>
        <div class="container mt-5">
            <form action="./crudProveedor/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['Id']  ?>">

                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                <input type="text" class="form-control mb-3" name="paginaWeb" placeholder="Página Web" value="<?php echo $row['PaginaWeb']  ?>">
                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['Direccion']  ?>">
                <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['Telefono']  ?>">
                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['Correo']  ?>">
                <input type="text" class="form-control mb-3" name="rfc" placeholder="Dirección" value="<?php echo $row['RFC']  ?>">
                <input type="text" class="form-control mb-3" name="repEmpresa" placeholder="Representante de la empresa" value="<?php echo $row['RepEmpresa']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>