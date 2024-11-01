 <?php

 $conn = new mysqli("localhost", "root", "", "banco_novo");

 $id = 1;

 $result = $conn->query("SELECT*FROM usuarios WHERE id = $id");
 $usuario = $result->fetch_assoc();
?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibir usuario</title>
 </head>
 <body>
    <h1>Usuário: <?php echo $usuario['nome']; ?></h1>
    <p>Email: <?php echo $usuario['email']; ?></p>

    <a href="registrar_usuario.php?id=<?php echo $usuario['id']; ?>">
        <button>Cadastar Usuário</button>
    </a>
 </body>
 </html>