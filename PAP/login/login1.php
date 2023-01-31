<?php
  include "connection.php";
  ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inquerito</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">

			</div>
            <div class="wrapperform">
				<h1 style="font-size: 50px">Admin Login</h1>
            	<div id="wizard">
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label style="font-size: 20px" for="">
							Utilizador
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="username" id="username" type="text" class="form-control" required>
	                    	</div>
	                    </div>
	                    <div class="form-row">
	                    	<label style="font-size: 20px" for="">
							Senha
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="password" id="password" type="password" class="form-control" required>
	                    	</div>
	                    </div>
                        </section>
	                </section>
            	</div>
			</div>
			<p style="color:white">
          <br>
          <?php

          session_start();
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          ?>
    </p>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		
		<script src="js/jquery.steps.js"></script>

		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
</body>
</html>