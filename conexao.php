<?php
$servidor = 'Localhost';
$usuario = 'root';
$senha = '201310171711mE!';
$dbname = 'formulario';

//Criar a conexao
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conexao->connect_errno)
{

    echo "erro";
}
else {
    echo "";
}
?>
 