<?php
include_once("nav.php");


?>

<html>

<head>
  <title>Projeto LP</title>

  <!-- define a viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- formata��o de unicode -->
  <meta charset="utf-8">

  <!-- adicionar CSS Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- css personalizado -->
  <link href="css/estilo.css" rel="stylesheet" media="screen">
</head>

<body>
    <?php
    session_start(); 
    $login = $_SESSION['usuario'];
       if (!empty( $_SESSION['usuario'])){
             
        
              echo "Usu&aacute;rio Logado: " . $login;?>
  
  <div class="text-center">
  <h1>Calcular Folha de Pagamento</h1>
  <img src="img/pexels-pixabay-257897(1).jpg" class="img-fluid" alt="Responsive image">




  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <?php   
        }else{
            echo "Usuario n&atilde;o logado";
            header("Location: login_form.php?msg=1&email=");
            $query = $db->query($sql);   
      }
      if(isset($_POST['sair'])){
          session_destroy();
          header("Location: dados.php");
      }
    ?>
     <?php
    include_once("footer.php");
    ?>

</body>

</html>