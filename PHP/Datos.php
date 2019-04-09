
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h3 class="display-5">DATOS CAPTURADOS</h3>

    
<?php
    $nom=$_GET['txt_nombre'];
    $apell=$_GET['txt_apell'];
    $cod=$_GET['txt_codigo'];
    $email=$_GET['txt_email'];
    $celu=$_GET['txt_movil'];
    $genero$_GET['txt_Genero'];
    $foto=$_GET['foto'];
    $check=$_GET['txt_check'];

    echo $nom;
    echo "<br/>";
    echo $apell;
    echo "<br/>";
    echo $cod;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $celu;
    echo "<br/>";
    echo $genero;
    echo "<br/>";
    echo $foto;
    echo "<br/>";
    echo $check;
    echo "<br/>";
?>
  </div>
</div>
    </div>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
