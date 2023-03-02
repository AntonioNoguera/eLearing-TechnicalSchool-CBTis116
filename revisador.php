<?php
	$primo=$_POST['uno'];
	$secondo=$_POST['dos'];
	$terzo=$_POST['tres'];
	$quarto=$_POST['cuatro'];
	$quinto=$_POST['cinco'];
	$sesto=$_POST['seis'];
	$septimo=$_POST['siete'];
	$ottavo=$_POST['ocho'];
	$nono=$_POST['nueve'];
	$decimo=$_POST['diez'];

    $aciertos=0;

    if($primo=="C"){
        $aciertos= $aciertos + 1;
    }
    
    if($secondo=="A"){
        $aciertos= $aciertos + 1;
    }
    
    if($terzo=="D"){
        $aciertos= $aciertos + 1;
    }
    
    if($quarto=="B"){
        $aciertos= $aciertos + 1;
    }
    
    if($quinto=="A"){
        $aciertos= $aciertos + 1;
    }
    
    if($sesto=="A"){
        $aciertos= $aciertos + 1;
    }
    
    if($septimo=="C"){
        $aciertos= $aciertos + 1;
    }
    
    if($ottavo=="C"){
        $aciertos= $aciertos + 1;
    }
    
    if($nono=="A"){
        $aciertos= $aciertos + 1;
    }
    
    if($decimo=="C"){
        $aciertos= $aciertos + 1;
    }
    
    echo $aciertos;

?>