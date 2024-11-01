<?php

$conn = new mysqli("localhost", "root", "", "banco_novo");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM usuarios WHERE id = $id");
    $usuario = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Usuários</title>
</head>
<body>
    <h1>Registar Usuários</h1>

    <form action="processa_registro.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>