﻿<?php
include('connection.php');
session_start();
function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = check_input($_POST['username']);

	if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
		$_SESSION['msg'] = "Username não pode conter espaços e caracteres especiais!";
		header('location: index.php');
	} else {

		$fusername = $username;

		$password = check_input($_POST["password"]);
		$fpassword = md5($password);

		$query = mysqli_query($conn, "select * from `user` where username='$fusername' and password='$fpassword'");

		if (mysqli_num_rows($query) == 0) {
			$_SESSION['msg'] = "Falha no Login, erro nas credenciais!";
			header('location: login1.php');
		} else {

			$row = mysqli_fetch_array($query);
			if ($row['access'] == 1) {
				$_SESSION['id'] = $row['userid'];
?>

				<script>
					
					window.location.href = '../admin/';
				</script>
			<?php
			} else {
				$_SESSION['id'] = $row['userid'];
			?>
				<script>
					window.alert('Login com Sucesso, Bem vindo User!');
					window.location.href = 'user/';
				
				</script>
<?php
			}
		}
	}
}
?>