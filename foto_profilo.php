<?php
    require_once 'database_config.php';
    session_start();
     
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }

    if (isset($_POST["foto_profilo"])){
        $foto = $_POST["foto_profilo"];
        $array = array('foto' => $foto);
        echo json_encode($array);
    }

     
?>