<?php
    session_start();
    session_destroy();
    setcookie('time','', -1);
    header("Location: index.html");
    die();
?>