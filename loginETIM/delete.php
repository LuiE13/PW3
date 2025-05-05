<?php
$id = $_GET['id'];
require 'Usuario.class.php';
$usuario = new Usuario();
$funfou=$usuario->deleteUser($id);
if($funfou){
    echo "<script>
        alert('Usuario excluido com sucesso!')"
    ."</script>";
    header("location:index.php");
}else{
    echo "<script>
        alert('Erro ao excluir usuario!')"
    ."</script>";
    header("location:index.php");
}