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
		<link rel="stylesheet" href="css/style3.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<p style="font-size: 18px">Este questionário tem como objetivo a compreensão da correlação das expectativas dos visitantes relativas à Visita ao Museu de Marinha e a sua conferência no local após a visita e como estas são percecionadas por si.

Os resultados obtidos serão utilizados apenas para fins organizacionais. Neste sentido, à entrada do Museu o visitante poderá responder a este questionário sobre o que espera encontrar nesta visita e no final do percurso encontrará outro questionário onde poderá confirmar ou não essas expectativas.<p><br></p></p>


<p style="font-size: 18px">O questionário levará apenas 3 min a preencher e garante-se o seu total anonimato. Se tiver alguma dúvida sobre o questionário, poderá enviar-nos um email para: ccm.comunicacao.divulgacao@marinha.pt<p><br></p>

<p style="font-size: 18px">Nesta fase o questionário apenas se encontra disponível em Português, podendo o visitante utilizar as ferramentas do Google Tradutor.<p><br></p></p>

<p style="font-size: 18px">Agradecemos a sua colaboração.</p>
			</div>
            <div class="wrapperform">
				<h1 style="font-size: 45px">Questionário</h1>
            	<div id="wizard">
	                <h4></h4>
	                <section>
	                    <div class="form-row" style="margin-bottom: 26px;">
	                    	<label style="font-size: 19px" for="">
	                    		Género
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="genero" class="form-control" id="genero">
									<option class="option" hidden></option>
									<option value="masculino" class="option">Masculino</option>
									<option value="feminino" class="option">Feminino</option>
									<option value="outro" class="option">Outro</option>
								</select>
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label style="font-size: 19px" for="">
	                    		Idade
	                    	</label>
	                    	<div class="form-holder">
	                    		<input name="idade" id="idade" type="number" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label style="font-size: 19px" for="">
	                    		Escolaridade
	                    	</label>
	                    	<div class="form-holder">
	                    		<select name="escolaridade" id="escolaridade" class="form-control">
									<option class="option" hidden></option>
									<option value="1º ciclo (4ª Classe)" class="option">1º ciclo (4ª Classe)</option>
									<option value="2º ciclo (6º ano)" class="option">2º ciclo (6º ano)</option>
									<option value="3º ciclo (9º ano)" class="option">3º ciclo (9º ano)</option>
									<option value="Ensino Secundário (12º ano)" class="option">Ensino Secundário (12º ano)</option>
									<option value="Bacharelato" class="option">Bacharelato</option>
									<option value="Licenciatura" class="option">Licenciatura</option>
									<option value="Outro" class="option">Outro</option>
								</select>
	                    	</div>
	                </section>
	                
	                <h4></h4>
	                <section>
	                    <div class="form-row">
	                    	<label style="font-size: 19px" for="">
	                    		É a primeira vez que visita o Museu de Marinha?
	                    	</label>
	                    	<select name="primeiravisita" id="primeiravisita" class="form-control">
								<option class="option" hidden></option>
								<option value="sim" class="option">Sim</option>
								<option value="nao" class="option">Não</option>
							</select>
	                    </div>	
	                    <div style="font-size: 19px" class="form-row">
	                    	<label for="">
	                    		Quando foi a sua última visita a este museu?
	                    	</label>
	                    	<select name="ultimavisita" id="ultimavisita" class="form-control">
								<option class="option" hidden></option>
								<option value="Há menos de 6 meses" class="option">Há menos de 6 meses</option>
								<option value="Entre 6 meses e 1 ano" class="option">Entre 6 meses e 1 ano</option>
								<option value="Entre 1 e 2 anos" class="option">Entre 1 e 2 anos</option>
								<option value="Entre 2 e 5 anos" class="option">Entre 2 e 5 anos</option>
								<option value="Há mais de 5 anos" class="option">Há mais de 5 anos</option>
								<option value="Nunca tinha Visitado" class="option">Nunca tinha Visitado</option>
							</select>
	                    </div>	
                     	<div style="font-size: 19px" class="form-row">
	                    	<label for="">
	                    		Quais os factores que influenciaram a sua visita ao MM?
	                    	</label>
	                    	<select name="fatoresvisita" id="fatoresvisita" class="form-control">
								<option class="option" hidden></option>
								<option value="Localização" class="option">Localização</option>
								<option value="Temática" class="option">Temática</option>
								<option value="Curiosidade" class="option">Curiosidade</option>
								<option value="Veio através de um Plano Turístico" class="option">Veio através de um Plano Turístico</option>
							</select>
	                    </div>
	                    <div class="form-row" style="margin-bottom: 38px">
	                    	<label style="font-size: 19px" for="">
	                    		Quais as principais razões da sua visita?
	                    	</label>
	                    	<select name="razaovisita" id="razaovisita" class="form-control">
								<option class="option" hidden></option>
								<option value="Conhecer o museu" class="option">Conhecer o museu</option>
								<option value="Complementar uma visita anterior" class="option">Complementar uma visita anterior</option>
								<option value="Pesquisar um tema específico" class="option">Pesquisar um tema específico</option>
								<option value="Participar numa atividade" class="option">Participar numa atividade</option>
								<option value="Dar a conhecer aos filhos/netos" class="option">Dar a conhecer aos filhos/netos</option>
								<option value="Aproveitar a entrada gratuita" class="option">Aproveitar a entrada gratuita</option>

							</select>
	                    </div>
	                </section>
            	</div>
				</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		
		<script src="js/jquery.steps.js"></script>

		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
</body>
</html>
<?php
  include "close.php";
  ?>