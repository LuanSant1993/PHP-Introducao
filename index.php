<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis PHP</title>
</head>
<body>
    <?php
        $string = "Curso na DIO";
        $numeros = 50;
        $array = array("PHP", "CSS", "HTML", "JAVA");
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y H:i:s");
    ?>
    <h4>Essa é uma variável do tipo string,<br>
        para implementar uma variável do tipo string<br>
        utilizamos aspas simples ('') ou duplas ("")<br>
        
        <?php
            echo $string;
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo números / integer<br>
        para implementar essa váriavel utilizamos<br>
        somente os números dessa forma :
        <?php
                
            echo $numeros;
                
        ?> 
    </h4>
    <h4>
        Essa é uma variável com um array , para implementar <br>
        um array em uma variável utilizamos desta forma:
            <?php
            print_r($array)
            ?>
    </h4>
    <h4>Vamos Agora implementar uma variável do tipo<br>
    datas , para implementar a variável com datas <br>
    utilizamos uma função própria do PHP desta forma :
        <?php
            print $data
            ?>

    </h4>
</body>
</html>