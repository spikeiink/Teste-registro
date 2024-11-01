<?php 

$conn = new mysqli("localhost", "root", "", "banco_novo");


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];


    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "REGISTRO ATUALIZADO";
    }else{
        echo "erro:" . $conn->error;
    }
}
?>