function lookup($string){ 
   // Retorna um array com Lat/Long do Endereço passado como parametro ....
 
   $string = str_replace (" ", "+", urlencode($string));
   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
 
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $details_url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $response = json_decode(curl_exec($ch), true);
 
   if ($response['status'] != 'OK') {
    return null;
   }
 
   $geom = $response['results'][0]['geom'];
 
   $latitude = $geom['location']['lat'];
   $longitude= $geom['location']['lng'];
 
    $array = array(
        'latitude' => $geom['location']['lat'],
        'longitude' => $geom['location']['lng'],
        'location_type' => $geom['location_type'],
    );
 
    return $array;
 
}
