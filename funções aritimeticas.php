<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Funcoes</title>
    <Style>
    
    h2{

        font:15pt Arial;

         color:#171559;
         font-weight:bold;



    }
    
    
    </Style>
</head>
<body>
    <?php



    $v1 =$_GET["x"];
    $v2 =$_GET["y"];


    echo "<h2> valores recebidos :$v1 e $v2</h2>";

  echo"valor absoluto de $v2 e :".abs($v2);// uso do ".abs("nome da variavel") para mostra o valor absoluto*//

  echo "<br/> o valor de $v1 <sup>$v2</sup> e ".pow($v1,$v2);
  echo "<br/> A raiz de $v1 e ".sqrt($v1);
  echo "</br> o valor de $v2 arredondado e ".round($v2);
  echo"</br> parte inteira  de $v2 e ".intval($v2);
  echo"</br> o valor  de $v1 da moeda e  ".number_format($v1,2,",",".");



    ?>
</body>
</html>