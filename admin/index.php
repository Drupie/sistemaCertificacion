<?php

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
    <nav>
    <div class="logo"><img src="https://anyover.com.mx/LOGO-HORIZONTAL-pn.png" alt=""></div>
   <div class="items">
   
   </div>
    </nav>
   
    
  
</body>

</html>
';



echo ' <aside>
<h1>Login</h1>


';

    echo'<form action="procesologin.php" id="form" method="POST">
  
    <input type="text" placeholder="Ingrese su nombre de usuario" name="user"  ">
 
    <input type="password" placeholder="Ingrese su contraseña" name="pass" ">
  
  
    <input type="submit" value="iniciar sesión">
   
    </form>';

echo '</aside>';
?>
