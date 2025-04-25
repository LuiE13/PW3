<?php
include 'Contato.class.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conec = $contato = new Contato();

if ($conec) {
    $existo=$contato->checkUser($email);
    if ($existo) {
        echo "<script>
            alert('Usuario ja cadastrado!')
        </script>";
    } else {
        $exito = $contato->insertUser($nome , $email , $senha);
        if ($exito) {
            echo "<script>
                alert('Usuario inserido com sucesso!')
            </script>";
        } else {
            echo "<script>
                alert('Erro ao CADASTRAR usuario, tente novamente mais tarde!')
            </script>";
        }
    }
    
} else {
    echo "<script>
        alert('Erro ao conectar com o banco de dados, Tente novamente mais tarde!')
    </script>";
}



