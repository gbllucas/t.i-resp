<!DOCTYPE html>
<html lang="pt" >

	<head>
		<meta charset="utf-8">
		<title>ITV</title>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		<form>
			<div>
				<b>
				<section>Cadastro Família</section>
					<br>
					Código<br>
					<input type="text" name="Codigo" maxlength="20" required autofocus><br>
					Data de Cadastro <br>
					<input taype="date" id="data_cadastro" name="data_cadastro" maxlength="10" required><br>
					<span class="validity"></span>
					<div>
						<input type="submit">	
					</div>
					<br><br>		
				</section>
				<b>
				<section>Alterar Cadastro</section>
					<br><br>
					Código<br>
					<input type="text" id = "codigo" name="codigo" maxlength="20" required autofocus><br>
					<div>
						<input type="button" name="botao-ok" value="Ok">
					</div>		
				</section>
			</div>
		</form>
	</body>
</html>