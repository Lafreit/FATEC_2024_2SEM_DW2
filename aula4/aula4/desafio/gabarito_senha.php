<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhando a senha</title>
</head>
<body>
<?php
    $senha1 = "871960";
    print_r($_POST);
    $senha_incerida = $_POST['senha'];
    # Seu código aqui.
    if(isset($senha_incerida)){
        echo '<br><br>';
        echo 'Senha: '.$_POST['senha'];
    }
    if($senha1!=$senha_incerida){
        echo '<br><br>';
        echo 'Você errou!';
    }
    else
        echo 'Acertou!';
?>
</body>
</html>
