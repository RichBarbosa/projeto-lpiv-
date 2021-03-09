<?php
 include_once("db.php");
 include_once("nav.php")

?>
<html>
    <head>
        <title>Area Reservada</title>
        
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <!-- formatação de unicode -->
        <meta charset="utf-8">

        <!-- adicionar CSS Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <!-- css personalizado -->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
    </head>
    
    <body>
    <div class="container">
    <?php

    session_start(); 
    $login = $_SESSION['usuario'];
       if (!empty( $_SESSION['usuario'])){?>
             
        
             <?php echo "Usu&aacute;rio Logado: " . $login;?>
             <main>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xl-6 col-sm-12 bg">
                        <h1>Calcular o salario</h1>
                        <form action="calcular.php" method="POST">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nome do funcionario</label>
                                <br/>
                                <input type="text" name="nome" id="formGroupExampleInput" required >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Salario contribuição</label>
                                <br/>
                                <input type="number" name="salario" id="formGroupExampleInput2" min="0" step="0.0" required></div>
        
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Dependentes</label>
                                <br/>
                                <input type="number" name="dependente" id="formGroupExampleInput3" min="0"  required></div>

                                <br/>
                                <input type="submit" name="calcular" value="calcular">
                            </div>
                            
                            
                        </form>    

                    </div>
                   
                    </div>
            </div> 
           
    </main>

    </form>


             
          
            
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

    </div>
    <?php
    include_once("footer.php");
    ?>
</body>
</html>