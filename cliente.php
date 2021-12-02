<?php include ('header.php');?>

<?php 
    include("./crudClientes/conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM Clientes";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Catálogo de Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

	</head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar nuevo cliente</h1>
                                <form action="./crudClientes/insert.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="primerApellido" placeholder="Primer apellido">
                                    <input type="text" class="form-control mb-3" name="segundoApellido" placeholder="Segundo apellido">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo electrónico">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Teléfono</th>
                                        <th>Correo electrónico</th>
                                        <th>Dirección</th>
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
                                                <td><?php  echo $row['PrimerApellido']?></td>
                                                <td><?php  echo $row['SegundoApellido']?></td>
                                                <td><?php  echo $row['Telefono']?></td>
                                                <td><?php  echo $row['Correo']?></td>     
                                                <td><?php  echo $row['Direccion']?></td>  
                                                <td><a href="./actualizarCliente.php?id=<?php echo $row['Id'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="./crudClientes/delete.php?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
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