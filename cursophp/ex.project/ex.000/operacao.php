<!DOCTYPE html>
<html lang="pb-br ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        echo "<h2>Resultado da operação aritmética de $n1 e $n2</h2><p>\n</p>";
        $resultado = $n1 + $n2;
        echo "A soma é: $resultado <p>\n</p>";
        $resultado = $n1 / $n2;
        echo "A divisão é: $resultado<p>\n</p>";
        $resultado = $n1 - $n2;
        echo "A subtração é: $resultado<p>\n</p>";
        $resultado = $n1 * $n2;
        echo "A multiplicação é: $resultado<p>\n</p>";
        $resultado = $n1 % $n2;
        echo "O resto da divisão é: $resultado<p>\n</p>";
        $resultado = $n1 ** $n2;
        echo "A potência é: $resultado<p>\n</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para página anterior</a>
    </main>
</body>
</html>