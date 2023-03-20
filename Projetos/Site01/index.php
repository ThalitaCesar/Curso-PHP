<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Dinâmico Simples</title>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        background-color: #690;
        padding: 8px 10px;
        text-align: center;
        height: 50px;
    }

    section {
        text-align: center;
        padding-top: 160px;
        height: 100vh;
        background-color: pink;
    }

    a {
        display: inline-block;
        margin: 0 10px;
        color: white;
        font-size: 17px;
        text-decoration: none;
    }

    a:hover {
        color: pink
    }

    ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    li {
        list-style-type: none;
    }
    </style>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Bem vindos ao meu primeiro WebSite em php!</h1>
        <p>Essa é a página inicial.</p>
    </section>
</body>

</html>