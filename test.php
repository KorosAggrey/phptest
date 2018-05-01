<?php

/*$curl_options = array(
  CURLOPT_URL => "http://livescore-api.com/api-client/leagues/list.json?key=XiXjSBLbQe4fIsKO&secret=rdSskFQGY6XrFkTCDQWvsIGiXKxGdiuF",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HEADER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CONNECTTIMEOUT => 5
);                              
 
$curl = curl_init();
curl_setopt_array( $curl, $curl_options );
$result = curl_exec( $curl );*/
header('Content-type: application/json');
 $response = file_get_contents('book.json');
 $decode = json_decode($response);
 $front = $decode->front_seats;	
 $seats = $front->seats;
 $one = 1;
 $driver = $seats->$one;


 var_dump($driver);
foreach ($driver as $item){
    $id = $item->id;
    echo $id;
}


 $other = $decode->other_seats;	
 $seats2 = $other->seats;

foreach ($seats2 as $key => $value) {
	foreach ($value as $item) {
		$id = $item->id;
		echo $id;
	}
}

  
 


?>