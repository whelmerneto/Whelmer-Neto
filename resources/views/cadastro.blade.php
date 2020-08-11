	<!DOCTYPE html>
	<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/css/cadastro.css">
		<title> Formulario de Cadastro</title>

	</head>

	<body>

		<div class="cabecalho">
			<header> </header>
		</div>

		<div class="titulo"><h1> Formulário de cadastro</h1> </div>

		<div class="form">

		<form action="efetuado" method="post">
			@csrf

			<div class="nome">
				<label> Nome completo </label>
				<input type="text" name="name" maxlength="30"> <br>
			</div>

			<div class="sexo">
				<label for="sexo">Sexo</label>
				<input type="radio" name="sexo" id="feminino" value="feminino"> 
				<label for="feminino"> Feminino </label>
				<input type="radio" name="sexo" id="masculino" value="masculino"> 
				<label for="masculino"> Masculino </label> <br>
			</div>

			<div class="idade">
				<label for="idade" id="idade"> Idade </label> 
				<input type="number" name="idade"> <br>
			</div>

			<div class="email">
				<label for="email"> E-mail </label>
				<input type="text" name="email"> <br>
			</div>

			<div class="celular">
				<label for="celular"> Celular </label>
				<input type="text" name="celular"> <br>
			</div>

			<div class="button">
				<input type="submit" value="Enviar">
			</div>

		</form>

		</div>

	</body>
	</html>