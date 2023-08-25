<?php
include("db.php");
$con=conectar();

$cliente_id=$_POST['cliente_id'];
$nombre_cliente=$_POST['nombre_cliente'];
$direccion_cliente=$_POST['direccion_cliente'];
$telefono_cliente=$_POST['telefono_cliente'];
$email_cliente=$_POST['email_cliente'];


$sql="INSERT INTO Clientes VALUES('$cliente_id','$nombre_cliente','$direccion_cliente','$telefono_cliente','$email_cliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
