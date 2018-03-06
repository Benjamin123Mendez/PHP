<html>
<head>
<title> Numeracion fibonaci con numero primos </title>
</head>
<body>
<center> <h1> NUMERACION FIBONACCI</h1></center>
<?php
$n1=1;
$n2=0;

for($i=1;$i<=20;$i++)
{
  $suma=$n1+$n2;
  $n1=$n2;
  $n2=$suma;
    if(primo($i))
            echo "<font color='red'>$suma ES PRIMO</font></br></br>";
    else
        echo $suma." NO ES PRIMO</br></br>";
}
function primo($suma)
{
    $cont=0;

    for($i=3 ;$i<=$suma;$i++)
    {
        if($suma%$i==0)
        {

            if(++$cont>1)
                return false;
        }
    }
    return true;
}
?>
</body>
</html>
