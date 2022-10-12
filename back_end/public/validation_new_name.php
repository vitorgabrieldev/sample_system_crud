<?php

        if(!isset($_SESSION)) {
            session_start();
        };

        if(strlen($_POST['newUsername']) >= 8) {

            /*
                UPDATE  Clientes 
                SET nome= 'Antônio Pereira' ;
            */

            include('../private/configMain.php'); 

            $username = $_POST['newUsername'];
            $letterName = $_SESSION['nomeUser'];

            $query = mysqli_query($mysqli, "UPDATE  users SET nome = '$username' WHERE nome = '$letterName'");

            $_SESSION['nomeUser'] = $username;

            header('LOCATION: ../../front_end/app/public/feed.php');

        } else {
            header('LOCATION: ../../front_end/app/public/feed.php');
        };
?>