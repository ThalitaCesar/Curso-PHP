<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $n= $_REQUEST["num"] ?? 0;
            $a= $n-1;
            $s = $n+1;  
            echo "O número escolhido foi $n <br>";
            echo "O seu antecessor é $a <br>";
            echo "O seu sucessor é $s .";
            ?>
        </p>
        <button onClick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>