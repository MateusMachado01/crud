<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if(id){
    $sql = $pdo->prepare("DELETE FROM setor WHERE SetorID = :id");
    $sql ->bindValue(':id',$id);
    $sql ->execute();
}

header("location: setor-lista.php");

?>      