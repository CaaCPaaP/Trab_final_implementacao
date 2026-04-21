<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];     

   
    /*
    if ($usuario === '' && $senha === '') {
       
        header("Location: index.php");
        exit(); 
    } else {
        echo "Usuário ou senha inválidos!";
    }
    */
}
?>
