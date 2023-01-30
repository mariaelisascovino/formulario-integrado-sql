<?php
	session_start();
	include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário de contato</title>
	<link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-half">
					<h1 class="title has-text-centered">Formulário de Cadastro</h1>
					<?php
						if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>

					<form action="enviar.php" method="POST">
						<div class="field">
							<label class="label">Nome*</label>
							<div class="control">
								<input name="nome" class="input" type="text" placeholder="Seu nome" requered>
							</div>
						</div>

						<div class="field">
							<label class="label">Sobrenome</label>
							<div class="control">
								<input name="sobrenome" class="input" type="text" placeholder="Seu sobrenome">
							</div>
						</div>

						<div class="field">
							<label class="label">Empresa</label>
							<div class="control">
								<input name="empresa" class="input" type="text" placeholder="Sua empresa">
							</div>
						</div>

						<div class="field">
							<label class="label">Email </label>
							<div class="control">
								<input name="email" class="input" type="email" placeholder="Seu email">
							</div>
						</div>

						<div class="field">
							<label for="telefone"class="label">Telefone </label>
							<div class="control">
								<input name="telefone" class="input" type="text" placeholder="Ex.:(11)91234-1234" maxlength="15" />
							</div>
						</div>

						<div class="field">
							<label class="label">Assunto</label>
							<div class="control">
								<div class="select is-fullwidth">
									<select name="assunto">
										<option>Escolha a opção</option>
										<option>emprego</option>
										<option>estudos</option>
									</select>
								</div>
							</div>
						</div>

						<div class="field">
							<label for="radio" class="label">Você é um cliente existente? </label>
							<div class="control">
								<input type="radio" name="cliente" value="sim">sim <br>
								<input type="radio" name="cliente" value="não">não<br>
							</div>
						</div>

						<div class="field is-grouped">
							<div class="control">
								<button class="button is-link is-medium">Enviar</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
</body>
</html>