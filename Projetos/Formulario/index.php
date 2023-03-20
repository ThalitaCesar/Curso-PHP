<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Cadastro</h1>
    <form action="process.php" method="post">
        <label for="firstName">Nome:</label>
        <input type="text" id="firstName" name="firstName" required pattern="[a-zA-Z]{3,}">
        <br><br>

        <label for="lastName">Sobrenome</label>
        <input type="text" id="lastName" name="lastName" required pattern="[a-zA-Z]{3,}">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required
            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
            onchange="form.confirm_password.pattern = this.value;">
        <br><br>

        <label for="confirm_password">Confirme a Senha:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>