<?php include ('header.php');?>

<?php 
    include("./crudProveedor/conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM Proveedores";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Catálogo de Proveedores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-2">
                            <h1>Agregar nuevo proveedor</h1>
                                <form action="./crudProveedor/insert.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="paginaWeb" placeholder="Página Web">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo electrónico">
                                    <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="repEmpresa" placeholder="Representante de la empresa">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-10">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Página Web</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Correo electrónico</th>
                                        <th>RFC</th>
                                        <th>Rep. Empresa</th>
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
                                                <td><?php  echo $row['PaginaWeb']?></td>
                                                <td><?php  echo $row['Direccion']?></td>
                                                <td><?php  echo $row['Telefono']?></td>
                                                <td><?php  echo $row['Correo']?></td>     
                                                <td><?php  echo $row['RFC']?></td>  
                                                <td><?php  echo $row['RepEmpresa']?></td>  
                                                <td><a href="./actualizarProveedor.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="./crudProveedor/delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
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