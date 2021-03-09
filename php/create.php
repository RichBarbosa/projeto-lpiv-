<?php
include_once("db.php");

if(!empty($_POST))
{
    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// verifica se usuario já existe

	//$senha = md5($senha);
	
    // Insere usuário
	$sql = "INSERT INTO dbusuario (nome, email, senha) 
  VALUES 
  ('${nome}',
  '${email}',
   '${senha}')";
  
  	
   $query = $db->query($sql);
 
	if ($query){
	  mysqli_close($db);
	  header("Location: login_form.php");exit;
	}
	else{
		mysqli_close($db);
        header("Location: login_form.php?msg=2&email=$email");    
	}
	
	
}
?>
