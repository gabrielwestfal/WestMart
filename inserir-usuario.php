<?php
include ('config.php');
include("config-usuario.php");

criarTopo();
$nome  = $_POST['nome'];
$email = $_POST['email'];
criarUsuario($conn, $nome, $email);