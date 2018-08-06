<?php

include 'connection.php';

$modo= "";
if(isset($_POST['modo'])){
	$modo = $_POST['modo'];
}

$nome=""; 
if(isset($_POST['nome'])){ 
	$nome = $_POST['nome'];
}
$senha="";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
}


if($modo=='inserir'){
		$sql = "SELECT 'login','senha' FROM usuario WHERE nome = '".$nome."' AND senha ='".$senha."'";
		$result=$conn->query($sql);
		$row =$result->fetch_assoc();
		if($row){ // se for diferente de vazio ele entra
header('Location:http://app-1532364742.000webhostapp.com/'); }
	
	else{
			echo "<script>alert('senha errada')</script>";
	}


		}

?>
<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<title>cadastro</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="cadastro.css">

</head>

<body id='body' >
	<div class="flex">
	<form method="post" action="cadastro.php" >
		
		<div class="caixa estilo">
		<img src="imagem/logo.png">
		<label>Nome:</label>
		<div><input type="text" name="nome" placeholder="digite seu nome" class="estilo"></div>
		<label>Senha:</label>
		<div><input type="password" name="senha" placeholder="digite sua senha" class="estilo" req></div>
		<input type="hidden" name="modo" id="modo" value="inserir">
		<input type="submit" value="login" class="botao" >
	
	</div>	
</form>
</div>
	<script >

	$('#body').css('background-color','lightblue');


	</script>


	</form>


</body>
</html>