
<html>
<head>
<title> MI PRIMER FORMULARIO </title>
</head>
<body>
<h2>Teclea un Usuario y Password</h2>
<?php
$name = ($_POST['name']);
$pass = ($_POST['pass']);

<form method='post'>
<p>Nombre:<input type='text' name='name'>
<p>Contraseña:<input type='password' name='pass'>
<input type='submit' value='Entrar'>
</form>
if(!isset($name) && !isset($pass))
{
else if($name=='Benjamin' && $pass=='inintech')
{
echo '<html><h2><center>TU CORREO ES</center></html>' . $name .'@inintech.com.mx </h2>';
}
else if($name=='Ignacio' && $pass=='inintech')
{
echo '<html><h2>TU CORREO ES</h2></html>' . $name . '@inintech.com.mx</h2>';
}
else
{
echo '<html><h2>No cuentas con correo</h2></html>';
}
?>
</body>
</html>
