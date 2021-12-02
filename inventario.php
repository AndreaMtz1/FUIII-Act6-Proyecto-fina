<?php include ('header.php');?>

<?php 
    include("./crudInventario/conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM Inventario";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inventario de artículos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar nuevo artículo</h1>
                                <form action="./crudInventario/insert.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="existencia" placeholder="Cantidad en existencia">
                                    <input type="text" class="form-control mb-3" name="proveedorId" placeholder="ProveedorId">
                                    <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad en existencia</th>
                                        <th>ProveedorId</th>
                                        <th>Departamento</th>
                                        <th>Descripción</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['Id']?></td>
                                                <td><?php  echo $row['Nombre']?></td>
                                                <td><?php  echo $row['Precio']?></td>
                                                <td><?php  echo $row['Existencia']?></td>
                                                <td><?php  echo $row['ProveedorId']?></td>
                                                <td><?php  echo $row['Departamento']?></td>     
                                                <td><?php  echo $row['Descripcion']?></td>  
                                                <td><a href="./actualizarInventario.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="./crudInventario/delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>