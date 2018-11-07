<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style media="screen">
      .align-center
      {
        text-align: center;
      }
    </style>
    <title>Calculadora</title>
  </head>
  <body>
    <br><br><br><br><br><br><br><br><br>
    <form method="post">
      <input class="form-control form-control-lg" type="text" name="conta" placeholder="Insira sua expressão aqui"><br>
      <div class="align-center">
        <button type="submit" name="calcula" class="btn btn-primary btn-lg">Calcular</button>
        <button type="submit" name="apaga" class="btn btn-secondary btn-lg">Clear</button>
      </div>
    </form>
  </body>
</html>
<?php
/*
$x = 2;
$y = 3;
$z = eval('return $x + $y;');
eval('echo $z;');
*/

if (isset($_POST['apaga']))
{
  header("Location: index.php");
}
if (isset($_POST['calcula']))
{
  $expressao = (!empty($_POST['conta']) and !preg_match("/[a-zA-Z]/", $_POST['conta'])) ? (string)$_POST['conta'] : false;
  if (!$expressao)
  {
    echo '<h2>Erro!</h2>';
  } else
  {
    $result = eval("return $expressao;");
    echo "<h2>Resultado: ".$result."</h2>";
  }
}
?>
