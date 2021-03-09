<?php
include_once("db.php");

    if(!empty($_POST)){
    $nome = $_POST['nome'];
    $SC = $_POST['salario'];
    $DP = $_POST['dependente'];
    $BC;
    $INSS;
    $VT;
    $IRRF;
    $SL;
    $FGTS;
    $total = 0;
   

        
        
            if ($SC <= 1751.81){
                $INSS = $SC * 0.08;
            }else if($SC > 1751.81 & $SC <= 2919.72){
                $INSS = $SC * 0.09;
            }else if($SC > 2919.72 & $SC <= 5839.45){
                $INSS = $SC * 0.11;   
            }else{
                $INSS = 642.34;
            }
                $VT = $SC * 0.06;
            if ($VT > 220.00) {
                $VT = 220.00;
        }else {
            $VT = $VT + 0;  
        }
            $BC = $SC - $INSS - ($DP * 189.59);
            if ($BC <= 1903.98) {
                $IRRF = 0;
            }else if ($BC > 1903.98 & $BC <= 2826.65){
                $IRRF = ($BC * 7.5)/100 - 142.80; 
            }else if ($BC > 2826.65 & $BC <= 3751.05) {
                $IRRF = BC * 0.15;
            }else if ($BC > 3751.05 & $BC <= 4664.68) {
                $IRRF = ($BC * 22.5)/100 - 636.13; 
            }else{
                $IRRF = ($BC * 27.5)/100 - 864.36;
            } 
            $SL = $SC - $VT - $INSS - $IRRF;
            $total = $total + $SC;
            
            
            $FGTS = $total * 0.08;  

           

    // Insere dados
	$sql = "INSERT INTO folha (nome, depedente, salario_contribuicao, vale_transporte, inss, irrf, sl, fgts) 
  VALUES 
  ('${nome}',
  ${DP},
  ${SC},
  ${VT},
  ${INSS},
  ${IRRF},
  ${SL},
   ${FGTS})";

$query = $db->query($sql);


if ($query){
    mysqli_close($db);
    
    header("Location: aviso.php");exit;
  }
  else{
      mysqli_close($db);
  }
    }
  
  	
 
    ?>
