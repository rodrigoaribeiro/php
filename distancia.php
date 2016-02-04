function distancia($lat1, $lon1, $lat2, $lon2) {
   /* Calculo da Distancia entre duas Coordenadas */
   $theta = $lon1 - $lon2;
   $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
   $dist = acos($dist);
   $dist = rad2deg($dist);
   $milhas = $dist * 60 * 1.1515;
   //resultado é em milhas ..... então vamos transformar em metros
   $resultado=($milhas * 1609.344);
   return $resultado;
}
