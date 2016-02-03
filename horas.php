<?php
function formatahora($hora_num) {
   $hora = intval($hora_num);
   $min = ($hora_num - $hora) * 100;
   $retorno = "";
   if ($hora == 0) {
      $retorno = "00";
   } else {
      if ($hora <= 9) {
         $retorno .= "0";
      }

      $retorno .=$hora;
   }
   $retorno.=":";
   if ($min == 0) {
      $retorno.="00";
   } else {
      if ($min <= 9) {
         $retorno.="0";
      }
      $retorno.=$min;
   }


   return substr($retorno, 0, 5);
}

function subtraihora($dtime, $atime) {
   //subtrai atime de dtime -->  larga - pega onde atime e dtime são  do tipo string  
   //formatadas ex - "13:00"
   
   $nextday = $dtime > $atime ? 1 : 0;
   $dep = explode(':', $dtime);
   $arr = explode(':', $atime);
   $diff = abs(mktime($dep[0], $dep[1], 0, date('n'), date('j'), date('y')) - mktime($arr[0], $arr[1], 0, date('n'), date('j') + $nextday, date('y')));
   $hours = floor($diff / (60 * 60));
   $mins = floor(($diff - ($hours * 60 * 60)) / (60));
   $secs = floor(($diff - (($hours * 60 * 60) + ($mins * 60))));
   if (strlen($hours) < 2) {
      $hours = "0" . $hours;
   }
   if (strlen($mins) < 2) {
      $mins = "0" . $mins;
   }
   if (strlen($secs) < 2) {
      $secs = "0" . $secs;
   }
   return $hours . ':' . $mins;
}

?>