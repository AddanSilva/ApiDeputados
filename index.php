<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testando API</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#"><img src="image/dados-abertos.png" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <button class="btn btn-primary">Primary</button>
        <button class="btn btn-secondary">Primary</button>
      </li>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite algo aqui..." aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0 bg-white" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
</div>

<?php
$url = "https://dadosabertos.camara.leg.br/api/v2/deputados?ordem=ASC&ordenarPor=nome";
$resultado = file_get_contents($url);

$obj = json_decode($resultado);
$i = 1;

?>

<div class="container-xl">
    <div class="jumbotron jumbotron-fluid">
        
        <div class="container-md"> 
            <div class="row">

<?php
for($i = 0;$i <= 9;$i++){   
        
    $dados = $obj->dados[$i];
        
    $id = $dados->id;
    $nome = $dados->nome;
    $partido = $dados->siglaPartido;
    $estado = $dados->siglaUf;
    $foto = $dados->urlFoto;

?>  
        <form action="id"
            <div class="col">
                <div class="card border-success mb-3" style="width: 10rem;">
                <a href="https://dadosabertos.camara.leg.br/api/v2/deputados/<?php echo $id ?>/despesas?ordem=ASC&ordenarPor=ano">
                <div class="w-100 p-1 card-header border-success bg-success text-white text-center"><?php echo $nome ?></div></a>
                            <img src="<?php echo $foto ?>">
                            <a href="https://dadosabertos.camara.leg.br/api/v2/deputados/<?php echo $id ?>/despesas?ordem=ASC&ordenarPor=ano">
                            <div class="card-header bg-success text-white text-center"> <?php echo $partido . "<br>" .  $estado . "<br>" . $id?> <br></div></a>
                    </div>
            </div>
        <?php
    }
    ?>
    </div>
</div>
</div>
</div>
<div class="jumbotron">
    <h1 class="display-4">Olá, mundo!</h1>
    <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou informação.</p>
    <hr class="my-4">
    <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
  </div>

<body>
    
</body>
</html>