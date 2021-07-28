<?php
session_start();
$autorizacion=$_SESSION['u_usuario'] ;
if($autorizacion==null||$autorizacion==""){
    echo "no tiene autorización";
}
$usuario=$_POST["usuario"];
$contra=$_POST["contra"];

$con=mysqli_connect("db5003785695.hosting-data.io","dbu1470758","drupie2020","dbs3091110");

$sql="insert into users (usuario,contra)values('$usuario','$contra')";
mysqli_query($con,$sql);
echo '
<style>
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}
h1{
    background-color:#2c3e50;
    padding:10px;
    text-align:center;
    color:#fafafa;
}
p{
text-align:center;
padding:10px;
font-size:24px;
}
img{
    width:200px;
    margin:0 auto;
display:block;
}
</style>
<div>
<h1>Registro exitoso</h1>
</div>
';
?>
