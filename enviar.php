<?php
session_start();


include_once('conexao.php');



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";


$result_usuario = "INSERT INTO form (nome, sobrenome, empresa, email, telefone, assunto, cliente) VALUES ('$nome', '$sobrenome', '$empresa','$email', '$telefone','$assunto', '$cliente' )";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}

?>

