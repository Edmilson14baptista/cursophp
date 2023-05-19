<?php 
//Captando os dados do formulário
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$prova1 = $_GET["p1"];
$prova2 = $_GET["p2"];
$exame = $_GET["exame"];
$recurso = $_GET["recurso"];
//Média ponderada
$sessenta = 60/100;
$quarenta = 40/100;
//média das provas
$totalProva = ($prova1 + $prova2) / 2;
//média dos exame
$totalExame = ($totalProva + $exame) / 2;
//média do recurso
$totalRecurso = ($totalExame + $recurso) / 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$nome $sobrenome";?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Universidade Técnica De Angola</h1>
        <main>
        <h2>Dados do estudante</h2>
            <label>Nome :<?php echo " $nome $sobrenome <p>\n</p>";?></label>
            <label>Nota da P1:<?php echo " $prova1 <p>\n</p>";?></label>
            <label>Nota da P2:<?php echo " $prova2 <p>\n</p>";?></label>
            <label>Nota de exame:<?php echo " $exame <p>\n</p>";?></label>
            <label>Nota de recurso:<?php echo " $recurso <p>\n</p>";?></label>
        </main>
        <main>
        <h2>Aproveitamento semestral</h2>
        <?php 
        if($totalProva >20){
            header("exercicio.php");
        }else{
            echo "Média das avaliações: ".$totalProva."<p>\n</p>";
        }
        //:::::::::::::::::::::::::::::::::::::::::
        if($totalExame > 20){
            header("exercicio.php");
        }else{
            echo "Média de exame: ".abs($totalExame)."<p>\n</p>";
        }
        //:::::::::::::::::::::::::::::::::::::::::
        if($totalRecurso > 20){
            header("exercicio.php");
        }else{
            echo "Média de recurso: ".abs($totalRecurso)."<p>\n</p>";
        }
        //:::::::::::::::::::::::::::::::::::::::::
        $media1 = $totalExame * $sessenta;
        $media2 = $totalRecurso * $quarenta;
        $final = $media1 + $media2;
        echo "Média final: ".abs($final);
        ?>
        </main>
        <main>
            <h2>Classificação final</h2>
            <?php
            if($final == 21){
                print "Excelente";
            }
            if($final <= 10){
                echo "Não apto";
            }
            if($final >= 18){
                echo "Muito Bom";
            }
            if($final >= 16){
                echo "Bom com distinção";
            }
            if($final >= 14){
                echo "Bom";
            }
            if($final <= 13){
                echo "Sufuciente";
            }
            ?>
        </main>
</body>
</html>