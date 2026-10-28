
<?php
function criarUsuario($conn, $senha, $email){
    
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (email, senha)VALUES ('$email','$senha')";

if(mysqli_query($conn, $sql)){
    $_SESSION['mensagem'] = '<div class="mensagem-sucesso">Usuario inserido com sucesso</div>';
    $_SESSION['logado'] = 1;
    header("Location: index.php");
}else{
    $_SESSION['mensagem'] = '<div class="mensagem-erro">Erro ao inserir usuario: '. mysqli_error($conn) .'</div>';
    $_SESSION['logado'] = 0;
    header("Location: index.php");
}

mysqli_close($conn);

}
?>