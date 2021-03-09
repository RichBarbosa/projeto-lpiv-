<?php
 include_once("db.php");
 include_once("nav2.php")

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
       if (!empty( $_SESSION['usuario'])){                     
              echo "Usu&aacute;rio Logado: " . $login;?>           
                <h2>Funcionarios cadastrados</h2>
                
                <?php $sql = "SELECT * FROM folha;"; 
                $query = $db->query($sql);?>
                <?php
                foreach($db->query($sql) as $row){
                    foreach($db->query($sql) as $col){?>
                 <table class="table">
                <tr>
                    <th>nome do funcionario</th>
                    <th>Dependentes</th>
                    <th>Salario contribuição</th>
                    <th>Vale Transporte</th>
                    <th>instituto nacional seguro social(INSS)</th>
                    <th>inposto de renda retido na fonte(IRRF)</th>
                    <th>salario liquido</th>
                    <th>fundo de garantia de tempo de serviço(FGTS)</th>
                </tr>
                <tr style="text-align: right;">
                    <td><?php echo $col['nome'];?></td>
                    <td><?php echo $col['depedente'];?></td>
                    <td><?php echo "R$ ".$col['salario_contribuicao'];?></td>
                    <td><?php echo "R$ ".$col['vale_transporte'];?></td>
                    <td><?php echo "R$ ".$col['inss'];?></td>
                    <td><?php echo "R$ ".$col['irrf'];?></td>
                    <td><?php echo "R$ ".$col['sl'];?></td>
                    <td><?php echo "R$ ".$col['fgts'];?></td>
                </tr>
            </table>
                <?php        
                    }
                         //desconectar
                         mysqli_close($db);
                         exit;      
                }    
 

   
           
        
     //desconectar
        mysqli_close($db);
        exit;        
    
                                    
             
          
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
