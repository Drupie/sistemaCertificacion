<?php
$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$email=$_REQUEST["email"];
$escuela=$_REQUEST["escuela"];
$comentario=$_REQUEST["comentario"];
echo $nombre.$email.$escuela.$comentario;
$con = mysqli_connect("db5003785695.hosting-data.io", "dbu1470758", "drupie2020", "dbs3091110");
$sql="update registro set nombre='$nombre',email='$email',escuela='$escuela',comentario='$comentario'  
where id=$id";
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
<h1>Registro actualizado</h1>

<img src="https://importashop.mx/wp-content/uploads/2018/04/Check_mark-min-150x150.png">

</div>
';
?>
<>