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
       if (!empty( $_SESSION['usuario'])){?>
            <h1>Registrado com sucesso!</h1> 
           <h2><a href="dados.php"> adicionar outro registro</a></h2>
           <h2><a href="consultar.php"> consultar registros</a></h2>

        
            
  <?php   
        }else{
            echo "Usuario n&atilde;o logado";
            header("Location: login_form.php?msg=1&email=");
            $query = $db->query($sql);   
      }?>    
      <?php
    include_once("footer.php");
    ?>
    </body>

 </html>     