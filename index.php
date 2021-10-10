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
$i = 1;

for($i = 0;$i <= 513;$i++){   
    
    $dados = $obj->dados[$i];
    
    $id = $dados->id;
    $nome = $dados->nome;
    $partido = $dados->siglaPartido;
    $estado = $dados->siglaUf;
    $foto = $dados->urlFoto;
    
    echo "<pre>";
    echo "<img src='$foto'>";
    echo "$id ";
    echo "$nome ";
    echo "$estado ";
    echo "$foto ";
}

?>

<div class="container-sm">100% wide until small breakpoint</div>
    <img src=''>


<body>
    
</body>
</html>