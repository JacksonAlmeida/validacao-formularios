<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1>Validando formularios</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome" placeholder="Digite o seu nome completo">
        <br><br>
        Email: <input type="email" name="email" placeholder="exemplo@gmail.com">
        <br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_REQUEST['nome'];
        $email = $_REQUEST['email'];
        if (empty($nome) || empty($email)) {
    ?>
            <script>
                alert("Ops! não pode deixar os campos do formulário vázio");
            </script>
    <?php
        } else {
            echo "<hr>nome:" . $nome;
            echo "<br>email:" . $email;
        }
    }
    ?>
</body>

</html>