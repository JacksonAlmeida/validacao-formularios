<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>
    <h1>PHP Validação de formulario exemplo</h1>

    <fieldset>
        <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h3>Dados pessoais</h3>
            <hr>
            <p>Nome: <input type="text" name="nome" placeholder="Digite seu nome completo"></P>
            <p><b>Genero:</b> <input type="radio" name="sexo" value="masculino" >masculino
                <input type="radio" name="sexo" value="feminino">feminino
                <input type="radio" name="sexo" value="outro">não quero informar
            </p>
            Tel:<input type="tel" name="telefone" placeholder="(xx) xxxxx-xxxx">
            <p>E-mail: <input type="email" name="email" placeholder="exemplo@gmail.com"></p>
            <p>Website: <input type="url" name="website" placeholder="https://exemplo.com.br"></p>

            <h3>Comentário</h3>
            <textarea name="comment" rows="10" cols="40">comment:</textarea>
            <br>
            <br>
            <input type="submit">
        </form>
    </fieldset>

    <?php

    $nome;
    $genero;
    $telefone;
    $email;
    $website;
    $comment;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = test_input($_POST['nome']);
        $genero = test_input($_POST['sexo']);
        $telefone = test_input($_POST['telefone']);
        $email = test_input($_POST['email']);
        $website = test_input($_POST['website']);
        $comment = test_input($_POST['comment']);

        ?>

        <div>
            <h2>DADOS REGISTRADOS</h2>
        </div>

        <?php
    }

    function test_input($data)
    {
        $data = trim($data); //retira caracteres desnecessarios como, espaço extra, tabulação entre outros
        $data = stripslashes($data); //remova barras invertidas;
        $data = htmlspecialchars($data); //converte scripts em codigo entidade de html
        return $data;
    }
    ?>

</body>

</html>