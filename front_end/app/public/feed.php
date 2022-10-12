<?php
    if(!isset($_SESSION)) {
        session_start();
    };
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Web_Code</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .link
        {
            background: #000;
            color: #fefefe;
            padding: .5rem;
            font-size: 2rem;
            border-radius: .7rem;
            transition: .3s;
            text-decoration: none;
        }

        .link:hover
        {
            background: #888;
            color: #000;
        }

        form
        {
            margin: 2rem;
        }
    </style>
</head>
<body>
    <!-- Components -->
    <h1>Olá --> 
        <?php
            echo $_SESSION['nomeUser'];
        ?>
    </h1>
    <a  class="link" href="../../../back_end/private/shutting_down.php">Sair</a>

    <form action="../../../back_end/public/validation_new_name.php" method="post">
        <label for="">Digite abaixo o novo username</label>
        <input type="text" placeholder="Digite seu novo nome" name="newUsername">
        <button type="submit">Mudar</button>
    </form>

</body>
</html>