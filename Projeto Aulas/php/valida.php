<?php
session_start();
include_once("conexao.php");
$acessar = filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
if($acessar){
	$usuario = filter_input(INPUT_POST, 'aluno_email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'aluno_senha', FILTER_SANITIZE_STRING);
	echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		$result_usuario = "SELECT aluno_id, aluno_name, aluno_email, aluno_senha FROM alunos WHERE alunos='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: ../home.php");
			}else{
				$_SESSION['msg'] = "<texto>Senha incorreto!</texto>";
				header("Location: ../index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<texto>Usuario incorreto!</texto>";
		header("Location: ../index.php");
	}
}else{
	$_SESSION['msg'] = "<texto>Página não encontrada</texto>";
	header("Location: ../index.php");
}
