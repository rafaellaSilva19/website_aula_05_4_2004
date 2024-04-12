<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'Rafaella@gmail.com' and $senha == '12345'){
        echo("É mesmo o camarada");
    }else{
    echo("Login incorreto!");
    }
}
?>