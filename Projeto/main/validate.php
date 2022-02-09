<?php
include_once("config.php");
if(!$_SESSION['usuario']):
    header('location:../index.php');
    exit();
endif;

?>