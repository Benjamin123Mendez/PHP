<?php
function queNav($navegador){
  $respuesta='';
  switch ($navegador) {
    case 'firefox':
      echo '</br></br>excelente';
      break;
      default:
  echo '</br></br>Naah';
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
<title> PRIMER </title>
</head>
<body>
<?php
$svariable1='Hola  ';
$svariable2= 'mundo </br>';
echo '<p>'.$svariable1 . $svariable2.'</p>';
echo '<p>Benjamin</p>';
print_r($_SERVER['HTTP_USER_AGENT']);
$navegador='';
echo '</br>';
if (strpos($_SERVER['HTTP_USER_AGENT'],'Firefox')!== false){
  echo '!si es Firefox!';
  $navegador='firefox';
}
for ($i=0;$i<5;$i++)
{
echo'</br></br>Numero:'.$i;
}
echo queNav('google');

?>
</body>
</html>
