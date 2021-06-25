	<!DOCTYPE html>
	<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/reset.css">

		<title> Usuarios cadastrados</title>

	</head>

	<body>
		  <header>

            <div class="cabecalho">
            </div>

            </header>

		<div class="cabecalho">
			<header> 

           <a href="/cadastro">Cadastro</a>  
           <a href="/">Home</a> 

			</header>
		</div>

		<div class="titulo"><h1> Usuarios cadastrados</h1> </div>

			<table class="tabela">
				<thead>
					<tr>
						<th> Nome </th>
						<th> E-mail </th>
						<th> Genero </th>
						<th> Idade </th>
						<th> Celular</th>
					</tr>
				</thead>
				<tbody>

					@foreach($registros as $row)
					<tr>
						<td> {{$row->name}}</td>
						<td> {{$row->email}}</td>
						<td> {{$row->sexo}}</td>
						<td> {{$row->idade}}</td>
						<td> {{$row->celular}}</td>
					</tr>
					@endforeach


				</tbody>
			</table>


	</body>

<style type="text/css">
	
html {
	font-family: 'Nunito', sans-serif;   
	background-image: url(css/teste.jpeg);
}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

table {
    font-family: 'Nunito', sans-serif;
    margin-left: auto;
    margin-right: auto;
    width: 70%; 
    text-align: left;

}
th {
	font-size: 25px;
	font-weight: 600;
}

td {
	padding: 10px 0 0 0;
}

.cabecalho {
 	text-align: right;
 	text-decoration: none;
 	padding: 10px 15px 0 0;
 	font-family: 'Nunito', sans-serif;
 	font-weight: 600;
}

.titulo {
	font-size: 60px;
	text-align: center;
	padding: 60px 0 80px 0;
}

.form {
	font-weight: 600;
	text-align: center;
	position: relative;
	left: 33%;
	padding: 0 0 0 0;
	border: 1px solid black;
	height: 390px;
 	width:  450px;
 	border: solid;
 	border-radius: 8px;
 	background-color: #DCDCDC;

}

.nome, .sexo, .idade, .email, .celular {
	padding: 42px 0 5px 0;
}

.button {
	padding: 10px 0 15px 0;
}
</style>
	</html>