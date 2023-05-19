<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Apresente-se para nós</h1>
    </head>
    <main>
    <?php 
    $nu1 = $_GET["numero1"];
    $nu2 = $_GET["numero2"];

    if($nu1 < $nu2){
        echo "Menor número : $nu1 <p>\n</p> Maior número : $nu2 <p>\n</p>";
        echo "Os números no intervalo de $nu1 e $nu2 são : ";
        for($i = ++$nu1; $i < $nu2; $i++){
          echo  $i.", ";
        }
    }
    if($nu1 > $nu2){
        echo "Menor número : $nu2 <p>\n</p> Maior número : $nu1 <p>\n</p>";
        echo "Os números no intervalo de $nu2 e $nu1 são : ";
        for($i = ++$nu2; $i < $nu1; $i++){
          echo  $i.", ";
        }
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar na página anterior</a>
    </main>
    
</body>
</html>