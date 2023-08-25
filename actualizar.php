<?php 
    include("db.php");
    $con=conectar();

$cliente_id=$_GET['id'];

$sql="SELECT * FROM Clientes WHERE cliente_id='$cliente_id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cliente_id" value="<?php echo $row['cliente_id']  ?>">

                                
                                <!--
                                <h1 style="font-size: 20px;">N°</h1>
                                <input type="int" class="form-control mb-3" name="cliente_id" placeholder="id" value="<?php echo $row['cliente_id ']  ?>">
                                -->
                                <h1 style="font-size: 20px;">Nombre</h1>
                                <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Nombre" value="<?php echo $row['nombre_cliente']  ?>">
                                <h1 style="font-size: 20px;">Direccion</h1>
                                <input type="text" class="form-control mb-3" name="direccion_cliente" placeholder="Direccion" value="<?php echo $row['direccion_cliente']  ?>">
                                <h1 style="font-size: 20px;">Telefono</h1>
                                <input type="tel" class="form-control mb-3" name="telefono_cliente" placeholder="555 - 555 - 555" value="<?php echo $row['telefono_cliente']  ?>">
                                <h1 style="font-size: 20px;">Email</h1>
                                <input type="email" class="form-control mb-3" name="Email_cliente" placeholder="example@gmail.com" value="<?php echo $row['Email_cliente']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
            </div>
    </body>
</html>