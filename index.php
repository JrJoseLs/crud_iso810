<?php 
    include("db.php");
    $con=conectar();

    $sql="SELECT * FROM Clientes";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Supermecado Bravo </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <h1 style="text-align: center;">Supermecado Bravo </h1>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 style="text-align: center;">Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                    
                                    <input type="text" class="form-control mb-3" name="nombre_cliente" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="direccion cliente" placeholder="Direccion">
                                    <input type="tel" class="form-control mb-3" name="telefono_cliente" placeholder="telefono">
                                    <input type="email" class="form-control mb-3" name="Email_cliente" placeholder="Email">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                <h1>Clientes</h1>
                                    <tr>
                                        <th style="text-align: center;">N°</th>
                                        <th style="text-align: center;">Nombre</th>
                                        <th style="text-align: center;">Direccion</th>
                                        <th style="text-align: center;">Telefono</th>
                                        <th style="text-align: center;">Email</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th style="text-align: center;"><?php  echo $row['cliente_id']?></th>
                                                <th style="text-align: center;"><?php  echo $row['nombre_cliente']?></th>
                                                <th style="text-align: center;"><?php  echo $row['direccion_cliente']?></th>
                                                <th style="text-align: center;"><?php  echo $row['telefono_cliente']?></th>
                                                <th style="text-align: center;"><?php  echo $row['Email_cliente']?></th> 
                                                <br>

                                                <th style="text-align: center;"><a href="actualizar.php?id=<?php echo $row['cliente_id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th style="text-align: center;"><a href="delete.php?id=<?php echo $row['cliente_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            <!--
                        </div>
                        <div class="btn">
                            <li><a href="triggers.php">Triggers</a></li>
                            <style type="text/css">
                            li { color: black; 
                                font-family: Verdana;
                                display: inline;
                                
                            }
                            a {
                                text-decoration: none;
                                background-color: gray; 
                                border: none;
                                color: white;
                                padding: 15px 32px;
                                text-align: center;
                                display: inline-block;
                                font-size: 16px;
                            }
                            .btn {
                                justify-content: center;
                            }
                            </style>
                        </div>
                    </div> 
                        --> 
            </div>
    </body>
</html>