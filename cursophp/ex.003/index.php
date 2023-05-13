<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <?php
    echo "PHP \u{1F418}";

    const CANAL = "Curso em vídeo \u{1F499}";
    echo "Eu adoro o ".CANAL;
    echo "Estamos no ano de ".date('Y');
    $nom ="Rodrigo";
    $snom = "Nogueira";
    echo "$nom ".'"Minotauro" '."$snom";
    $curso ="PHP";
    $ano = date('Y');

    echo <<< FRASE
       Estou estudando
          $curso em $ano
      FRASE;
    //ox = hexadecimal 0b = binário e = octal
    //$num = 0x1A;
    //echo "O valor da variável é $num";

    //$v = "Edmilson";
    //var_dump($v);

    //$num = (integer) 3e2; //3 x 10(2) 
    //echo "O valor é $num";
    //var_dump($num);

    //$vet = [2,"Edmilson",5,true,2e2,0x12A];
    //echo "O valor é $vet[3]";
    //var_dump($vet);

    //class Pessoa{
      //  private string $nome;
    //}
    //$p = new Pessoa;
    //var_dump($p);
    ?>
</body>
</html>