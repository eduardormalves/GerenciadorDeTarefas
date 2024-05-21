<?php
require 'conectaBanco.php';

$tarefa = $_POST['tarefa'];
$horarioInicio = $_POST['horarioInicio'];
$horarioFim = $_POST['horarioFim'];
$descTarefa = $_POST['descTarefa'];

$horaInicio = new DateTime($horarioInicio);
$horaFim = new DateTime($horarioFim);
if($horaFim > $horaInicio){
    $diferenca = $horaInicio->diff($horaFim);
    $duracao = $diferenca->h * 60 + $diferenca->i;
} else {
    $horaFim->modify('+1 day');
    $diferenca = $horaInicio->diff($horaFim);
    $duracao = $diferenca->h * 60 + $diferenca->i;
}

//OBS: o ->h retorna a diferença em horas, ja o -> i, retorna a diferença em minutos


$insert = "INSERT INTO tarefa (nome, descricao, duracao) VALUES ('$tarefa', '$descTarefa', '$duracao')";
if ($banco->query($insert)) {
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar a tarefa: " . $banco->error;
}

$banco->close();
?>