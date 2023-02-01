
<?php

include "connection.php";

$idresposta = $_GET["codigo"];

$sql = "DELETE FROM questionario WHERE idresposta=$idresposta";
// echo $sql;

if (mysqli_query($conn, $sql)) {
    //echo "Registo apagado com sucesso!";
    header("location:index.php?apagar=1");
} else {
    echo "Erro ao apagar registo: " . mysqli_error($conn);
}
include "close.php"

?>