<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Informe um número</h1>
        <form action="response.php" method="get">
            <label for="num"> Número: </label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>

</html>