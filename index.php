<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testando API</title>
    </head>
    
    <div class="container-md">100% wide until medium breakpoint</div>
    
    <?php

$url = "https://dadosabertos.camara.leg.br/api/v2/deputados?ordem=ASC&ordenarPor=nome";
$resultado = file_get_contents($url);

$obj = json_decode($resultado);
$i = 1;

for($i = 0;$i <= 512;$i++){   
   // var_dump($obj->dados[$i]);
    $nome = $obj->dados[$i];
    echo $nome->urlFoto;
    ?>
        <pre>
        <img src="<php $nome->urlFoto ?>">

    <?php

    }

    //print_r($obj);
    ?>

<img src="https://www.camara.leg.br/internet/deputado/bandep/204521.jpg">

<body>
    
</body>
</html>