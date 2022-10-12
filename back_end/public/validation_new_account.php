<?php

    include('../private/configMain.php'); 

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    $sql_code = "SELECT * FROM users WHERE nome = '$username' AND senha = '$password'";
    $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query".$mysqli->error);

    $qtdUsers = $sql_query->num_rows;

    if($qtdUsers >= 1) {
        echo "Error";
    } else {
        if(strlen($_POST['username']) >= 8 && strlen($_POST['password']) >= 6) {

            include('../private/configMain.php'); 
    
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $query = mysqli_query($mysqli,"INSERT INTO users(nome, senha) VALUES ('$username','$password');");

            if(!isset($_SESSION)) {
                session_start();
            };

            $_SESSION['nomeUser'] = $_POST['username'];
            $_SESSION['passwordUser'] = $_POST['password'];

            header('LOCATION: ../../front_end/app/public/feed.php');
    
        } else {
            header('LOCATION: ../../');
        };
    };

?>