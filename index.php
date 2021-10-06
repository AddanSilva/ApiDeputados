<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando API</title>
</head>

<?php

$url = "https://dadosabertos.camara.leg.br/api/v2/deputados?ordem=ASC&ordenarPor=nome";
$resultado = file_get_contents($url);


$obj = json_decode($resultado);
echo "<pre>";
 
    $i = 1;
    
    for($i = 0;$i <= 513;$i++){   
        var_dump($obj->dados[$i]);
        $nome = $obj->dados[$i];
     
        print_r("<hr>" . $nome->urlFoto . "<hr>");
     
    }


    print_r($obj);
?>


<body>
    
</body>
</html>