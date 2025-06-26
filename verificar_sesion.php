<?php
session_start();

if (!isset($_SESSION['usuario'])) {

    header("Location: iniciar_sesion.html");
    exit();
}
?>