<?php include ('header.php');?>

<?php 
    include("./crudInventario/conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "SELECT * FROM Inventario WHERE Id ='$id'";
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
            <form action="./crudInventario/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['Id']  ?>">

                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                <input type="text" class="form-control mb-3" name="existencia" placeholder="Cantidad en existencia" value="<?php echo $row['Existencia']  ?>">
                <input type="text" class="form-control mb-3" name="proveedorId" placeholder="Proveedor ID" value="<?php echo $row['ProveedorId']  ?>">
                <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento" value="<?php echo $row['Departamento']  ?>">
                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
        </div>
    </body>
</html>