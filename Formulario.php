
<html>
<head>
<title> MI PRIMER FORMULARIO </title>
</head>
<body>
  <?php
$name = (isset($_POST['name']))? $_POST['name'] : null;
$pass = (isset($_POST['pass']))? $_POST['pass'] : null;

if(!isset($name) && !isset($pass))
{
  ?>
<html>
<center><h1>Teclea un Usuario y Password</h1>
<form method='POST'>
<p><h2>Nombre:</h2><input type='text' name='name'></p>
<p><h2>Contraseña:</h2><input type='password' name='pass'></p>
<input type='submit' value='Entrar'>
</form>
</center>
</html>
<?php
}
else if($name=='Benjamin' && $pass=='inintech')
{
echo '<html><h2><center>TU CORREO ES</center></html>' . $name .'@inintech.com.mx </h2> ';
}
else if($name=='Ignacio' && $pass=='inintech')
{
echo '<html><h2>TU CORREO ES</h2></html>' . $name . '@inintech.com.mx</h2>';
}
else
{
echo "<html><h2>No cuentas con correo</h2></html>";
}

?>
</body>
</html>
