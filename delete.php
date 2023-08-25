<?php

include("db.php");
$con=conectar();

$cliente_id=$_GET['id'];

$sql="DELETE FROM Clientes  WHERE cliente_id='$cliente_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
