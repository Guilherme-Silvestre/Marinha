<?php
include "connection.php";
include "auxEnviaEmail.php";


if (isset($_POST)) {


	$email = $_POST["email"];





	$sql = "INSERT INTO enviarmail (email)
					VALUES ('$email')";
	echo $sql;
	if (mysqli_query($conn, $sql)) {
		header("location:index.php?insere=1");
	} else {
		echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
	}


	$assuntoMsg = '[Marinha]';
	$mensagem = "Caro(a) Sr.(a) <br><br>
				Como requisitado enviamos o folheto. <br>
				https://ccm.marinha.pt/pt/museumarinha_web/planearvisita_web/Paginas/Folheto-Digital.aspx";




	enviaEmail($email, $assuntoMsg, $mensagem);
} else {
	echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

include "close.php";
