<?php
    if(!isset($session)) {
        session_start();
    };

    session_destroy();

    header('LOCATION: ../../index.html');
?>