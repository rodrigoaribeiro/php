function somaHora($hora1,$hora2){
 
 	$h1 = explode(":",$hora1);
 	$h2 = explode(":",$hora2);
 	
 	$segundo = $h1[2] + $h2[2] ;
 	$minuto  = $h1[1] + $h2[1] ;
 	$horas   = $h1[0] + $h2[0] ;
 	$dia   	= 0 ;
 	
 	if($segundo > 59){
 	
 		$segundodif = $segundo - 60;
 		$segundo = $segundodif;
 		$minuto = $minuto + 1;
 	}
 	
 	if($minuto > 59){
 		
 		$minutodif = $minuto - 60;
 		$minuto = $minutodif;
 		$horas = $horas + 1;
 	}
 	
 	if($horas > 24){
 		
 		$num = 0;
 		
 	 	(int)$num = $horas / 24;
 	  	$horaAtual = (int)$num * 24;
		$horasDif = $horas - $horaAtual;
 		
 		$horas = $horasDif;				
 		
 		for($i = 1; $i <= (int)$num; $i++){
 		 			
 			$dia +=  1 ;
 		}
	 	 		
	}
		
	if(strlen($horas) == 1){
	
		$horas = "0".$horas;
	}
	
	if(strlen($minuto) == 1){
	
		$minuto = "0".$minuto;
	}
	
	if(strlen($segundo) == 1){
	
		$segundo = "0".$segundo;
 	}
 	
 	return  $dia.":".$horas.":".$minuto.":".$segundo;
 
}
/*
outra opção




 $hora = '10:00:00';

 // Soma 30 Minutos
 echo date('H:i:s', strtotime('+30 minute', strtotime($hora)));

 echo '<br />';

 // Diminui 30 Minutos
 echo date('H:i:s', strtotime('-30 minute', strtotime($hora)));
?>
//formatação....
function hour ( $a )
{
    $timestamp = strtotime(''.floor($a).':'.floor(($a - floor($a) )*100).':00'); 
    $aa = idate('H', $timestamp);
    $bb = idate('i', $timestamp);
    echo date ( 'H:i',$timestamp);"<br>";
    if($bb=="0") { $cc = "00"; } else { $cc = $bb; }
    echo "<br>$aa<br>$cc";
    $dd = $aa.".".$cc;
    return($dd);
}

*/

