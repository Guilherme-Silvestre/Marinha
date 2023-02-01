<?php
include "connection.php";

if (isset($_POST)) {

    $primeiravisita = $_POST["primeiravisita"];
    $genero = $_POST["genero"];
    $idade = $_POST["idade"];
    $escolaridade = $_POST["escolaridade"];
    $razaovisita = $_POST["razaovisita"];
    $ultimavisita = $_POST["ultimavisita"];
    $fatoresvisita = $_POST["fatoresvisita"];


    $sql = "INSERT INTO questionario (primeiravisita, genero, idade, escolaridade, razaovisita, ultimavisita, fatoresvisita)
                    VALUES ('$primeiravisita','$genero', '$idade', '$escolaridade', '$razaovisita', '$ultimavisita', '$fatoresvisita')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        header("location:../index.php?insere=1");
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}}

include "close.php";
?>