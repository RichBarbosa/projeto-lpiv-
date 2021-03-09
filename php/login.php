<?php
session_start(); 

include_once("db.php");

$email = $_POST['login'];
$senha = $_POST['senha'];

                                  
$sql = "SELECT * FROM dbusuario WHERE email = '${email}' AND senha = '${senha}';";


$query = $db->query($sql);
                        
foreach($db->query($sql)as $row)

if ($row>0){
	$_SESSION['usuario'] = $row['email'];
        //desconectar
        mysqli_close($db);
        header("Location: dados.php");
        exit;
        
}
                                    
//desconectar
mysqli_close($db);
header("Location: login_form.php?msg=1&email=$email");   
                                  
exit;

?>