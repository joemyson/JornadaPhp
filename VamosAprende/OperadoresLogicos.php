<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header >


<img src="./fotoPhp.png" alt="PHP">

<h1><b>VAMOS APRENDER PHP</b></h1>

<nav id="menu">

<ul>
<li>home</li>
<li>especificações</li>
<li>fotos</li>
<li>contato</li>


</ul>


</nav>

</header>


<div>
<?php

$n1 =3;
$n2 =2;

$soma = $n1+$n2;

echo "A soma dos valores e $soma";
echo "<br> A subtração vale ".($n1 - $n2);
echo"<br> A mutiplicação  vale ".$n1 * $n2;
echo "<br> a divisão vale ".$n1/$n2;
echo"<br> o modulo vale ".$n1 %$n2;






?>
    



</div>

</body>
</html>