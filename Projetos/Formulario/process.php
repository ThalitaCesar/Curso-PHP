<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Confirmação</h1>
    <section>
        <?php
		
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $errors = array();
    
			// validar nome
			if (empty($firstName)) {
                echo "O nome é obrigatório";
			} elseif(strlen($firstname) > 3) {
                echo "O nome precisa ter no mínimo 3 caracteres";
			} 

			// validar sobrenome
			if (empty($lastName)) {
				$errors['lastName'] = "O sobrenome é obrigatório";
			} elseif (strlen($lastName) < 3) {
				$errors['lastName'] = "O sobrenome precisa ter no mínimo 3 caracteres";
			} 

			// validar email
			if (empty($email)) {
				echo "O email é obrigatório";
			} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "formato inválido";
			} 


			// validate password
			if(strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-z]+#", $password) || !preg_match("#[A-Z]+#", $password) || !preg_match("#\W+#", $password) || $password == "12345678" || $password == "87654321" || $password == $firstname || $password == $lastname) {
                echo "A senha deve ter no mínimo 8 caracteres e conter letra maiuscula, letra menuscula, número e simbolos. Não pode ser '12345678', '87654321', ou igual ao nome";
			} 
        
        if (empty($confirmPassword)) {
            echo "A confirmação da senha é obrigatória";
        } elseif($confirmPassword !==  $password) {
            echo "As senhas diferem";
        } 

        
        $message = "Seu registro foi realizado com sucesso, $firstName.<br> Confirme o cadastro em seu email.<br>";
        mail($email, "Confirmação de Cadastro", $message);
    
        echo $message;
    ?>

        <button onClick="javascript:history.go(-1)">
            Voltar</button>
    </section>
</body>

</html>